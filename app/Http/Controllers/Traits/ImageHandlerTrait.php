<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;

trait ImageHandlerTrait
{
    private function handleImageUpload($imageFile, $path = 'menu')
    {
        // Generate unique image name
        $imageName = time() . '-' . $imageFile->getClientOriginalName();

        // Set the full filesystem path to storage/app/public/menu
        $storagePath = storage_path("app/public/$path");

        // ✅ Ensure the directory exists
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
        }

        // Read the image using Intervention Image
        $image = Image::read($imageFile);

        // Save the original image
        $fullImagePath = $storagePath . '/' . $imageName;
        $image->save($fullImagePath);

        // Create and overwrite with a cropped version (500x400)
        $image->cover(500, 400);
        $image->save($fullImagePath);

        // Return the relative path (e.g., "menu/filename.jpg")
        return "$path/$imageName";
    }
}
