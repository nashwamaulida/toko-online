<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];

        if(empty($nama)||empty($alamat)||empty($no_telp)){
            echo "<script>alert('Semua data harus diisi!');location.href='ubah_user.php?id_pelanggan=$id_pelanggan'</script>";
            } else {
            include "koneksi.php";
            $query = "update pelanggan set nama='$nama',alamat='$alamat',no_telp='$no_telp' where id_pelanggan='$id_pelanggan'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_user.php?id_pelanggan=".$id_pelanggan."';</script>";


            } 
        }
    }
?>
