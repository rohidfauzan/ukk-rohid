<?php
include "koneksi.php";
$hapus = mysqli_query($koneksi,"delete from barang where produk_id='$_GET[id]'");
header("location:show.php")
?>