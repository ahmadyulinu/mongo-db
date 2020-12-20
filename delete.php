<?php
include 'config.php';
$hapus = array('id_artikel' => $_GET['id']);
$collection->deleteOne($hapus);
header('Location: index.php');
