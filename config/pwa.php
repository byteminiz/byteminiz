<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Would you like the install button to appear on all pages?
      Set true/false
    |--------------------------------------------------------------------------
    */

    'install-button' => true,

    /*
    |--------------------------------------------------------------------------
    | PWA Manifest Configuration
    |--------------------------------------------------------------------------
    |  php artisan erag:update-manifest
    */

    'manifest' => [
        'name' => 'ByteMiniz - Veg Mini Burgers',
        'short_name' => 'ByteMiniz',
        'background_color' => '#FEFCEA',
        'display' => 'standalone',
        'description' => 'Order delicious veg mini burgers online from ByteMiniz. Fresh, flavourful, and made to order!',
        'theme_color' => '#FB6107',
        'icons' => [
            [
                'src' => 'logo.png',
                'sizes' => '512x512',
                'type' => 'image/png',
                'purpose' => 'any maskable'
            ],
            [
                'src' => 'logo.png',
                'sizes' => '192x192',
                'type' => 'image/png'
            ],
            [
                'src' => 'logo.png',
                'sizes' => '180x180',
                'type' => 'image/png'
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug Configuration
    |--------------------------------------------------------------------------
    | Toggles the application's debug mode based on the environment variable
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Livewire Integration
    |--------------------------------------------------------------------------
    | Set to true if you're using Livewire in your application to enable
    | Livewire-specific PWA optimizations or features.
    */

    'livewire-app' => false,
];
