<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk = $_POST ['nama_produk'];
    $deskripsi_produk = $_POST ['deskripsi'];
    $harga = $_POST ['harga'];
    $foto = $_FILES ['file']['name'];
	$ukuran	= $_FILES ['file']['size'];
	$file_tmp = $_FILES ['file']['tmp_name'];

        if(empty($nama_produk)||empty($deskripsi_produk)||empty($harga)||empty($foto)){
            echo "<script>alert('Semua data harus diisi!');location.href='ubah_produk.php?id_produk=$id_produk'</script>";
            } else {
            include "koneksi.php";
            move_uploaded_file($file_tmp, 'foto/'.$foto);
            $query = "update produk set nama_produk='$nama_produk',deskripsi='$deskripsi_produk',harga='$harga',foto= '$foto' where id_produk='$id_produk'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
            } else {
            echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";


            } 
        }
    }

// if($_POST){
//     $id_produk=$_POST['id_produk'];
//     $nama_produk=$_POST['nama_produk'];
//     $deskripsi=$_POST['deskripsi'];
//     $harga=$_POST['harga'];
//     $foto = $_FILES ['file']['name'];
// 	$ukuran	= $_FILES ['file']['size'];
// 	$file_tmp = $_FILES ['file']['tmp_name'];

//         if(empty($nama_produk)||empty($dskripsi)||empty($harga)||empty($foto)){
//             echo "<script>alert('Semua data harus diisi!');location.href='ubah_produk.php?id_produk=$id_produk'</script>";
//             } else {
//             include "koneksitk.php";
//             $query = "update produk set nama_produk='$nama_produk',deskripsi='$deskripsi',harga='$harga', foto='$foto' where id_produk='$id_produk'";
//             $update=mysqli_query($conn,$query);
//             if($update){
//                 echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
//             } else {
//                 echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
//             } 
//         }
//     }
?>