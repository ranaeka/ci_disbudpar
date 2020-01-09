<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Masukkan Data dengan Benar !</h4>
                  <form class="forms-sample" action="<?php echo base_url('barang/simpan');?>" method="post">
                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" class="form-control border-input" placeholder="Nama Barang" name="nama_barang" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>
<!--                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Produk</label>
                                                <input type="text" class="form-control border-input" name="jenisproduk" placeholder="Jenis Produk" required="">
                                            </div>
                                        </div>
                                    </div> -->

<!--                                     <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat Kos</label>
                                                <input type="text" class="form-control border-input" name="alamatkos" placeholder="Alamat Kos" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat Pemilik</label>
                                                <input type="text" class="form-control border-input" name="alamatpemilik" placeholder="Alamat Pemilik" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun berdiri</label>
                                                <input type="number" class="form-control border-input" name="tahun" placeholder="Contoh 2015" required="">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jumlah Kamar</label>
                                                <select name="kamar" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                              </select>
                                            </div>
                                        </div>
 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="kategori" class="form-control">
                                                <option value="Properti">Properti</option>
                                                <option value="Transportasi">Transportasi</option>
                                              </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Merek Barang</label>
                                                <input type="text" class="form-control border-input" placeholder="Merek Barang" name="merk_barang" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label>Jumlah Barang</label>
                                                <input type="number" class="form-control border-input" name="jml_barang" placeholder="/produk">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Status Peminjaman</label>
                                                <input type="text" class="form-control border-input" placeholder="Status Peminjaman" name="status_peminjaman" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Status Perawatan</label>
                                                <input type="text" class="form-control border-input" placeholder="Status Perawatan" name="status_perawatan" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Upload Gambar</label>
                                              <div class="input-group col-xs-12">
                                                <input type="file" class="form-control border-input" name="gambar" multiple="">
                                                </div>
                                                <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
                                            </div>
                                        </div>
                                    </div>

                            <div class="clearfix"></div>
                    <button type="submit" value="upload" class="btn btn-success mr-2">Tambah</button>
                    <span class=""><a href="<?php echo base_url();?>barang" class="btn btn-danger btn-fill btn-wd">Batal</a></span>
                  </form>
<!--                                         
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No HP Pemilik</label>
                                                <input type="number" name="hp" class="form-control border-input" placeholder="+628 xxx xxx xxx" required="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="card" style="margin:10px 0">
                                                <!-- Default panel contents -->
<!--                                             <div class="card-header">Muatan Parkir</div>
                                                <ul class="list-group list-group-flush">
                                                    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                                                    <?php
                                                    foreach ($data->result() as $row){
                                                    ?>
                                                    <li class="list-group-item">
                                                        <?php echo $row->fasilitas;?>
                                                        <label class="switch ">
                                                          <input type="checkbox" name="check_list[]" alt="Checkbox" value="<?php echo $row->fasilitas;?>" class="warning">
                                                          <span class="slider"></span>
                                                        </label>
                                                    </li>
                                                    <?php }?>
                                                    </div>
                                                    <li class="list-group-item">
                                                        Tidak Ada
                                                        <label class="switch ">
                                                          <input type="checkbox" class="success">
                                                          <span class="slider"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div>
                                        <div class="col-md-6">
                                        <div class="card" style="margin:10px 0"> -->
                                                <!-- Default panel contents -->
<!--                                             <div class="card-header">Akses Lingkungan</div>
                                                <ul class="list-group list-group-flush">
                                                    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                                                    <?php
                                                    foreach ($data2->result() as $row){
                                                    ?>
                                                    <li class="list-group-item">
                                                        <?php echo $row->akses;?>
                                                        <label class="switch ">
                                                          <input type="checkbox" name="check_list2[]" alt="Checkbox" value="<?php echo $row->akses;?>" class="success">
                                                          <span class="slider round"></span>
                                                        </label>
                                                    </li>
                                                    <?php }?>
                                                    </div>
                                                    <li class="list-group-item">
                                                        Tidak Ada
                                                        <label class="switch ">
                                                          <input type="checkbox" class="success">
                                                          <span class="slider round"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </div> --> -->
        
                                    <div class="row">
                                        
                                        
                                    </div>
<!--                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan Tambahan</label>
                                                <textarea rows="10" name="ket" class="form-control border-input" placeholder="Tambahkan deskripsi kos seperti jumlah kamar,fasilitas,harga,dll."></textarea>
                                            </div>
                                        </div>
                                    </div>
 -->


                </div>
              </div>
            </div>
          </div>
        </div>