<?php
include "koneksi.php";
if (isset($_POST["ok"])){
    $id_barang=$_POST['id_barang'];
    $nama_barang=$_POST['nama_barang']; 
    $jumlah_barang=$_POST['jumlah_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $kondisi=$_POST['kondisi'];
    $deskripsi=$_POST['deskripsi'];

    $simpan=mysqli_query($koneksi,"update barang set 
     nama_barang='$nama_barang',
     jumlah_barang='$jumlah_barang',
     jenis_barang='$jenis_barang',
     kondisi='$kondisi',
     where id_barang='$id_barang'");

     if ($simpan){
        header("location:databarang.php");
        echo "<div class='alert alert-success'>Sukses mengubah data baru</div>";
     }else{
        echo "<div class='alert alert-danger'>Gagal mengubah data baru</div>";
     }
}
?>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                <h2>update</h2>
                <form method="POST" action="">

                    <?php
         $tampil=mysqli_query($koneksi,"SELECT `DetailID`, `PenjualanID`, `PodukID`, `JumlahProduk`, `SubTotal` FROM `detail_penjualan` WHERE 1 id='$_GET[id]'");
         foreach ($tampil as $row)
            ?>
             <div class="form-group">
                        <label><b>detail id</b></label>
                        <input value="<?php echo $row['detail_id']; ?>" type="text" class="form-control"
                            placeholder="detail id" name="detail_id" readonly>
                    </div>
                    <div class="form-group">
                        <label><b>penjualan_id</b></label>
                        <input value="<?php echo $row['penjualan_id']; ?>" type="text" class="form-control"
                            placeholder="penjualan id" name="penjualan_id">
                    </div>
                    <div class="form-group">
                        <label><b>produk_id</b></label>
                        <input value="<?php echo $row['produk_id']; ?>" type="text" class="form-control"
                            placeholder="produk id" name="produk_id">
                    </div>
                    <div class="form-group">
                        <label><b>jumlah_produk</b></label>
                        <input value="<?php echo $row['jumlah_produk']; ?>" type="text" class="form-control"
                            placeholder="jumlah produk" name="jumlah_produk">
                    </div>
                    <div class="form-group">
                        <label><b>sub_total</b></label>
                        <input value="<?php echo $row[sub_total]; ?>" type="text" class="form-control"
                            placeholder="sub total" name="sub_total">
                    </div>
                    <br>
                    <button type="submit" name="ok" class="btn btn-success">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
         

                   
                    <?php ?>
            </div>
        </div>
    </div>