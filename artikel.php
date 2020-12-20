<?php
include 'config.php';
$id = $_GET['id'];
$res = $collection->findOne(['id_artikel' => "$id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
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

    <div class="container mt-4">
        <div class="col d-flex justify-content-center">
            <div class="row">
                <div class="box mt-5 shadow rounded">
                    <?php if (!empty($res)) { ?>
                        <div class="text-container m-5">
                            <h4><?= $res['judul_artikel']; ?></h4>
                            <p><?= $res['isi_artikel']; ?></p>
                            <hr>
                            <div class="float-left mb-3 mr-3">
                                <a href="index.php" class="nav-item text-secondary">&laquo; home</a>
                            </div>
                            <div class="float-right mb-3">
                                <a href="edit.php?id=<?= $id; ?>" class="text-secondary">&laquo; Edit this article</a>
                            </div>
                        </div>
                    <?php   } else { ?>
                        <div class="text-container m-5">
                            <h4>There is nothing here...</h4>
                            <p>Go back to where you came from.</p>
                            <hr>
                            <div class="float-left mb-3">
                                <a href="index.php" class="text-secondary">
                                    < home</a> </div> </div> <?php }
                                                                ?> </div> </div> </div> </div> </body> </html>