<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
<body>

<html lang="en">
<head>
  <title>Toko Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <h3>Produk Hosplay Ofcstore.com</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th><th>Nama Produk</th><th>Deskripsi</th>
                <th>Harga</th><th>Foto Produk</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_produk=mysqli_query($conn,"select * from produk");
            $no = 0;
            while($data_produk=mysqli_fetch_array($qry_produk)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_produk['nama_produk']?></td> 
                <td><?=$data_produk['deskripsi']?></td>
                <td><?=$data_produk['harga']?></td>
                <td><?=$data_produk['foto']?></td>
                <td><img src="<?php echo "foto/".$data_produk['foto']; ?>" width="150" height="150"></td>
                <td><a href = "ubah_produk.php?id_produk=<?=$data_produk['id_produk']?>" 
                class = "btn btn-success">Ubah</a> | 
                <a href = "hapus.php?id_produk=<?=$data_produk['id_produk']?>" 
                onclick = "return confirm('Apakah anda yakin menghapus data ini?')" 
                class = "btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>