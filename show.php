<?php
session_start();
if (!isset($_SESSION["id_admin"])) {
    header("location:login.php");
} else 
?>
<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                <h1>Data Barang</h1>
                <form action="" method="post">
                    Cari berdasarkan
                    <select name="pilih">
                        <option value="detail_id">detail_id</option>
                        <option value-"penjualan_id">penjualan_id</option>
                        <option value="produk_id">produk_id</option>
                        <option value-"jumlah_produk">jumlah_produk</option>
                        <option value-"sub_total">sub_total</option>
                    </select>
                    <input type="text" name="tekscari" size="24">
                    <input type="submit" name="cari" value="Cari">
                    <input type="submit" name="semua" value="Tampilkan Semua">
                </form>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>DetailID</th>
                        <th>PenjualanID</th>
                        <th>ProdukID</th>
                        <th>JumlahProduk</th>
                        <th>SubTotal</th>
                        
                    </tr>
                    <?php
                include "koneksi.php";
                $tampil = "";
                if (isset($_POST['cari'])) {
                    $pilih = $_POST['pilih'];
                    $tekscari = $_POST['tekscari'];
                    $tampil = mysqli_query($koneksi, "select * from menambah where $pilih like '%$tekscari%'");
                } else {
                     $tampil = mysqli_query($koneksi, "select * from menambah");
                }
                foreach ($tampil as $row) {
                   ?>
                    <tr>
                        <td><?php echo "$row[detail_id]"; ?></td>
                        <td><?php echo "$row[penjualan_id]"; ?></td>
                        <td><?php echo "$row[produk_id]"; ?></td>
                        <td><?php echo "$row[jumlah_produk]"; ?></td>
                        <td><?php echo "$row[sub_total]"; ?></td>
                        <td><?php echo "<a href='update.php?id=$row[detail_id]'>UPDATE</a> | <a href='menghapus.php?id=$row[detail_id]'>DELETE</a>"; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <a class="btn btn-primary" href="menambah.php">Tambahkan Data Barang</a>
            </div>
        </div>
    </div>