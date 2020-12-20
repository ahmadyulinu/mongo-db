<?php
include 'config.php';

$insertOneResult = $collection->insertOne([
    'id_artikel' => '2',
    'judul_artikel' => 'Masak memasak',
    'isi_artikel' => 'Lorem ipsum',
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());
