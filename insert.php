<?php
include 'config.php';
if (!empty($_POST)) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $new_artikel = array('id_artikel' => $id, 'judul_artikel' => $judul, 'isi_artikel' => $isi);
    $collection->insertOne($new_artikel);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <h1>Menambahkan Data Artikel</h1>
    <form action="insert.php" method="post">
        <label for="id"> Id
            <input type="text" name="id" id="id">
        </label>
        <br><br>
        <label for="judul"> Judul
            <input type="text" name="judul" id="judul">
        </label>
        <br><br>
        <label for="isi"> Isi
            <input type="text" name="isi" id="isi">
        </label>
        <br><br>
        <input type="submit" value="Tambah">
    </form>
    <?php  ?>
</body>

</html>