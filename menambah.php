<?php
        include "koneksi.php";
        if (isset($_POST["ok"]))
        {
            $detail_id = $_POST["detail_id"];
            $penjualan_id = $_POST["penjualan_id"];
            $produk_id = $_POST["produk_id"];
            $jumlah_produk = $_POST["jumlah_produk"];
            $sub_total = $_POST["sub_total"];

            $simpan = mysqli_query($koneksi, "insert into barang set 
                detail_id ='$detail_id ',
                penjualan_id='$penjualan_id',
                produk_id='$produk_id',
                jumlah_produk='$jumlah_produk',
                sub_total='$sub_total'");
                if ($simpan) {
                    echo "<div class = 'alert alert-success'>Sukses menambah barang</div>";
                  }  
                else {
                    echo "<div class = 'alert alert-danger'>Gagal Menambah Data</div>";
                  }
        }
    ?>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                <h2>menambah barang</h2>
                <form method="post" action="">
                    <div class="form-grup">
                        <label><b>DetailID</b></label>
                        <input type="text" class="form-control" placeholder="detail id" name="detail_id">
                    </div>
                    <div class="form-grup">
                        <label><b>PenjualanID</b></label>
                        <input type="text" class="form-control" placeholder="penjualan id" name="penjualan_id">
                    </div>
                    <div class="form-grup">
                        <label><b>ProdukID</b></label>
                        <input type="text" class="form-control" placeholder="produk id" name="produk_id">
                    </div>
                    <div class="form-grup">
                        <label><b>JumlahProduk</b></label>
                        <input type="text" class="form-control" placeholder="Jumlah produk" name="jumlah_produk">
                    </div>
                    <div class="form-grup">
                        <label><b>SubTotal</b></label>
                        <input type="text" class="form-control" placeholder="sub total" name="sub_total">
                    <br>
                    <button type="submit" name="ok" class="btn btn-success">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                </form>
            </div>
        </div>
    </div>