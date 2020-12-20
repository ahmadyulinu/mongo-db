<?php
include "config.php";
$id = $_GET['id'];
$old = $collection->findOne(array('id_artikel' => $id));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded mb-4" style="word-spacing: 3px;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3>Tech News</h3>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <h4>Home</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert.php">
                            <h4>Add an Article</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <form action="konfirmasi_edit.php" method="post">
            <input type="hidden" name="id_artikel" value="<?= $id; ?>">
            <div class="form-group">
                <label for="judul">
                    <h5>Judul Artikel</h5>
                </label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $old['judul_artikel']; ?>">
            </div>
            <div class="form-group">
                <label for="isi_artikel">
                    <h5>Isi Artikel</h5>
                </label>
                <textarea type="text" class="form-control" id="isi_artikel" name="isi_artikel" rows="10" value=""><?= $old['isi_artikel']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Edit Data</button>
        </form>
    </div>

</body>

</html>