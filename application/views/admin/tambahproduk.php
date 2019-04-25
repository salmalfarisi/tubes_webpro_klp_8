<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Produk
                </div>
                

                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">NAMA PRODUK</label>
                            <input type="text" class="form-control" id="nama" name="namaproduk" required>
                            <!-- <small class="form-text text-danger"><?= form_error('nama') ?>.</small> -->
                        </div>
                        <?php echo $error;?>
                        <?php echo form_open_multipart('admin/tambahproduk');?>
                        <div class="form-group">
                            <label for="jurusan">JENIS PRODUK</label>
                            <select class="form-control" id="jurusan" name="jenisproduk">
                                <option value="Sepatu">Sepatu</option>
                                <option value="Sendal">Sendal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">TARGET PEMBELI</label>
                            <select class="form-control" id="jurusan" name="targetpembeli">
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nim">HARGA</label>
                            <input type="text" class="form-control" id="nim" name="harga" required>
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="text">KODE PRODUK</label>
                            <input type="text" class="form-control" id="email" name="kodeproduk" required>
                            <small class="form-text text-danger"></small>
                        </div>
                        <input  type="file" name="gambar" id="userfile"  class="btn btn-primary float-left"style="background:#FF6600;color: white" required>
                        
                        <button type="submit" name="tambah" value="uploud" class="btn btn-primary float-right"style="background:#FF6600;color: white">Tambah Data</button>
                    </form><?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div> 