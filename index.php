<?php
include 'config.php';

/* insert document
$insertOneResult = $collection->insertOne([
    'id_artikel' => '6',
    'judul_artikel' => $title,
    'isi_artikel' => 'Lorem ipsum dolor',
]);
*/

// read document
$res = $collection ->find();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded" style="word-spacing: 3px;">
  <a class="navbar-brand" href="#">My Adventure</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insert.php">Write an Article</a>
      </li>
      </ul>  
  </div>
  </nav>

  <div class="container mt-4">
    <div class="listed-article mt-4">
            <div class="text text-center">
              <h3>Daftar Artikel</h3>
            </div>
        <?php 
            foreach ($res as $result) { ?>
            <div class="card m-4 shadow">
              <div class="card-body">
                <?php echo '<h4>', $result['judul_artikel'], '</h4>'; ?>
                <?php echo '<a href="artikel.php?id=',$result['id_artikel'], '" class="text-secondary float-left mt-2" style="font-weight:400">Read article</a>'; ?>
                <?php echo '<a href="delete.php?id=',$result['id_artikel'], '" class="text-secondary float-right m-2">Delete Article</a> '; ?>
                <?php echo '<a href="edit.php?id=',$result['id_artikel'], '" class="text-secondary float-right m-2">Edit Article</a>'; ?>
              </div>
            </div>
        <?php } ?>
  </div>
  </div>
</body>
</html>