<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas, username, password) value ('".$nama_petugas."','".$username."','".$password."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
}
?>