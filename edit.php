<?php include "config.php"; 
$id = $_GET['id'];
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
    $update = $collection -> updateOne($query,$update);
    header("Location: index.php");
} else {
    echo "Error";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="edit.php?id=<?= $id;?>" method="post">
<label for="judul">Judul Artikel</label>
    <input type="text" placeholder="Judul Artikel" name="judul" id="judul">
    <label for="isi_artikel">Isi Artikel</label>
    <textarea name="isi_artikel" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="submit">

</form>
    
</body>
</html>