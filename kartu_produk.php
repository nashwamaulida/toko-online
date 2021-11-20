<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Title -->
    <!-- <title>Semua Produk</title> -->
  </head>
  <body>
      <?php
          include "koneksi.php";
          $query=mysqli_query($conn, "select * from produk");
          $no=0;
          while($data_produk=mysqli_fetch_array($query)){
          $no++;
        ?>
      
    <!-- Card Show Product -->
    <div class="card my-4 mx-4 p-3">
      <img src="<?php echo "foto/".$data_produk['foto']; ?>" class="card-img-top" alt="product picture" width="200" height="200" />
      <div class="card-body">
        <h5 class="card-title"><?=$data_produk['nama_produk']?></h5>
        <p class="card-text"><?=$data_produk['deskripsi']?></p>
        <p class="card-text">Rp <?=$data_produk['harga']?></p>
        <a href="detail_produk.php?id_produk=<?=$data_produk['id_produk']?>" class="btn btn-success">+Cart</a>
      </div>
    </div>
    <?php
      }
      ?>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>