<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="">Ubah Data Barang</h4>
                  <p class="text-danger">
                    data barang
                  </p>
                  
      <form action="" method="post" action="<?php echo base_url(). 'barang/ubah'; ?>">
        <input type="hidden" name="id" value="<?= $barang['id_barang']; ?>">

      <div class="form-group">
        <label for="namabarang">Nama Barang</label>
        <input type="text" name="namabarang" class="form-control" id="namabarang" value="<?= $barang['nama_barang']; ?>">
        <small class="form-text text-danger"><?= form_error('namabarang'); ?></small>
      </div>
<!--        <div class="form-group">
          <label for="jenis produk">Jenis Produk</label>
          <select class="form-control" id="keterangan" name="keterangan">
            <?php foreach ($jenisproduk as $jp ) : ?>
              <?php if ($ket == $produk['jenisproduk']) : ?>
                <option value="<?= $jp; ?>" selected><?= $jp; ?></option>
                <?php else :  ?>
           <option value="<?= $jp; ?>"><?= $jp; ?></option>
            <?php endif; ?>
        <?php endforeach;  ?>
          </select>
        </div> -->
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $barang['kategori']; ?>">
        <small class="form-text text-danger"><?= form_error('kategori'); ?></small>
      </div>
      <!-- <div class="form-group">
          <label for="keterangan">keterangan</label>
          <select class="form-control" id="keterangan" name="keterangan">
            <?php foreach ($keterangan as $ket ) : ?>
              <?php if ($ket == $produk['keterangan']) : ?>
                <option value="<?= $ket; ?>" selected><?= $ket; ?></option>
                <?php else :  ?>
           <option value="<?= $ket; ?>"><?= $ket; ?></option>
            <?php endif; ?>
        <?php endforeach;  ?>
          </select>
        </div> -->
      <div class="form-group">
        <label for="merk_barang">Merek Barang</label>
        <input type="text" name="merk_barang" class="form-control" id="merk_barang" value="<?= $barang['merk_barang']; ?>">
        <small class="form-text text-danger"><?= form_error('merk_barang'); ?></small>
      </div>
      <div class="form-group">
        <label for="jml_barang">Jumlah Barang</label>
        <input type="text" name="jml_barang" class="form-control" id="jml_barang" value="<?= $barang['jml_barang']; ?>">
        <small class="form-text text-danger"><?= form_error('jml_barang'); ?></small>
      </div>
      <div class="form-group">
        <label for="status_peminjaman">Status_peminjaman</label>
        <input type="text" name="status_peminjaman" class="form-control" id="status_peminjaman" value="<?= $barang['status_peminjaman']; ?>">
        <small class="form-text text-danger"><?= form_error('status_peminjaman'); ?></small>
      </div>
      <div class="form-group">
        <label for="status_perawatan">Status Perawatan</label>
        <input type="text" name="status_perawatan" class="form-control" id="status_perawatan" value="<?= $barang['status_perawatan']; ?>">
        <small class="form-text text-danger"><?= form_error('status_perawatan'); ?></small>
      </div>
      <div class="form-group">
        <label>Upload Gambar</label>
          <div class="input-group col-xs-12">
          <input type="file" class="form-control border-input" name="gambar" multiple="">
          </div>
        <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
      </div>
      <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
      <span class=""><a href="<?php echo base_url();?>barang" class="btn btn-danger btn-fill btn-wd">Batal</a></span>
    </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>