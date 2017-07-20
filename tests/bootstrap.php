<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS');
header('Content-Type: application/json');

require __DIR__ . '/../vendor/autoload.php';

use ovo4096\Aliyun\OSS\FormUpload;
use Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__ . '/../');
$dotenv->load();

echo FormUpload::generateClientJSON(
    [
        "id" => $_ENV['ACCESS_KEY_ID'],
        "secret" => $_ENV['ACCESS_KEY_SECRET']
    ],
    $_ENV['BUCKET_HOST'],
    'user-dir/', 30);
