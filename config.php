<?php
//koneksi mongoDB
require_once __DIR__ . "/vendor/autoload.php";
$collection = (new MongoDB\Client)->blog->artikel;
