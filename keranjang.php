<?php
    include "header.php";
?>
<h2>Daftar Barang di Keranjang</h2>
<table class = "table table-hover striped">
    <thead>
        <tr>
            <th>No</th> <th>Nama Produk</th> <th>Jumlah</th> <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk) :
        // $subtotal=$val_produk['subtotal'];
        // $subtotal2=number_format($subtotal, 2);?>
        <tr>
            <td> <?=($key_produk+1)?> </td> 
            <td> <?=$val_produk['nama_produk']?> </td>
            <td> <?=$val_produk['qty']?> </td>
            <td> <a href = "hapus_cart.php?id=<?=$key_produk?>" class = "btn btn-danger"> <strong>X</strong> </a>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href =  "checkout.php" class = "btn btn-primary">Checkout</a>
<?php
    include "footer.php";
?>