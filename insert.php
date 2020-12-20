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
                        <a class="nav-link" href="#">
                            <h4>Add an Article</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="id">
                    <h5>ID</h5>
                </label>
                <input type="number" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
                <label for="judul">
                    <h5>Judul Artikel</h5>
                </label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">
                    <h5>Isi Artikel</h5>
                </label>
                <textarea type="text" class="form-control" id="isi" name="isi" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Add Data</button>
        </form>
    </div>
</body>

</html>