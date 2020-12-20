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
    <div class="col d-flex justify-content-center">
        <div class="row">
            <div class="box mt-5 shadow rounded">
            <?php if(!empty($res)) { ?>
                <div class="text-container m-5">
                    <h4><?= $res['judul_artikel'];?></h4>
                    <p><?= $res['isi_artikel']; ?></p>
                <hr>
                    <div class="float-left mb-3">
                        <a href="index.php" class="nav-item text-secondary">< home</a>
                    </div>
                    <div class="float-right mb-3">
                    <a href="edit.php?id=<?= $id ;?>" class="text-secondary">< Edit this article</a>
                </div>
                </div>
             <?php   } else { ?>
                <div class="text-container m-5">
                    <h4>There is nothing here...</h4>
                    <p>Go back to where you came from.</p>
                <hr>
                <div class="float-left mb-3">
                    <a href="index.php" class="text-secondary">< home</a>
                </div>

                
                </div>
            <?php }
            ?>
            </div> 
        </div>
    </div>
    </div>
    

</body>
</html>