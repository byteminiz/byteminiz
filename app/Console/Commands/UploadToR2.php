<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class UploadToR2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:upload-to-r2 {--force : Overwrite existing files on R2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload all public storage files to Cloudflare R2';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $localDisk = Storage::disk('public');
        $r2Disk = Storage::disk('r2');

        $files = $localDisk->allFiles();

        if (empty($files)) {
            $this->warn('No files found in public storage.');
            return self::SUCCESS;
        }

        $this->info("Found " . count($files) . " files to upload.");
        $this->newLine();

        $bar = $this->output->createProgressBar(count($files));
        $bar->start();

        $uploaded = 0;
        $skipped = 0;
        $failed = 0;

        foreach ($files as $file) {
            // Skip .gitignore
            if (basename($file) === '.gitignore') {
                $bar->advance();
                $skipped++;
                continue;
            }

            try {
                // Check if file already exists on R2 (skip unless --force)
                if (!$this->option('force') && $r2Disk->exists($file)) {
                    $skipped++;
                    $bar->advance();
                    continue;
                }

                // Read from local and write to R2
                $stream = $localDisk->readStream($file);
                $r2Disk->writeStream($file, $stream);

                if (is_resource($stream)) {
                    fclose($stream);
                }

                $uploaded++;
            } catch (\Exception $e) {
                $failed++;
                $this->newLine();
                $this->error("Failed to upload {$file}: {$e->getMessage()}");
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);

        $this->info("Upload complete!");
        $this->table(
            ['Status', 'Count'],
            [
                ['Uploaded', $uploaded],
                ['Skipped (already exists)', $skipped],
                ['Failed', $failed],
            ]
        );

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }
}
