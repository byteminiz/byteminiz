<?php
$url = 'https://drive.google.com/uc?export=download&id=1DpXKIjWDwhRvz3iwfjOXGzeBeY7Rlxpv';
$html = file_get_contents($url);
if (preg_match('/name="uuid" value="(.*?)"/', $html, $matches)) {
    $uuid = $matches[1];
    $dlUrl = 'https://drive.usercontent.google.com/download?id=1DpXKIjWDwhRvz3iwfjOXGzeBeY7Rlxpv&export=download&confirm=t&uuid=' . $uuid;
    file_put_contents('c:/xampp/htdocs/byte_miniz/storage/app/public/videos/bulk_order_bg.mp4', fopen($dlUrl, 'r'));
    echo 'Downloaded successfully.';
} else {
    echo 'Failed to find uuid';
}
