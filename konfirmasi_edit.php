<?php
include "config.php";

$id = $_POST['id_artikel'];
$judul = $_POST['judul'];
$isi = $_POST['isi_artikel'];

if (!empty($judul) && !empty($isi)) {
    $query = ["id_artikel" => "$id"];
    $update = [
        '$set' => [
            "judul_artikel" => "$judul",
            "isi_artikel" => "$isi"
        ]
    ];
    $update = $collection->updateOne($query, $update);
    header("Location: index.php");
} else {
    header('Location: edit.php');
}
