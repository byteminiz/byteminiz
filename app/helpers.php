<?php

use App\Helpers\DriveStorage;

if (!function_exists('drive_url')) {
    function drive_url(?string $path): string
    {
        return DriveStorage::url($path);
    }
}
