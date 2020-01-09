<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Masukkan Data dengan Benar !</h4>
                  <form class="forms-sample" action="<?php echo base_url('perawatan/simpan');?>" method="post">
                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" class="form-control border-input" placeholder="Nama Barang" name="nama_barang" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Jumlah Perawatan</label>
                                                <input type="text" class="form-control border-input" placeholder="jml_perawataan" name="Jml_perawataan" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>
                                   
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_perawataan">Tanggal Perawataan</label>
                                            <input type="date" class="form-control" name="Tgl_pesanan"placeholder=" tgl_pesanan" required/>
                                        </div> 
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Keterangan Perawataan</label>
                                                <input type="text" class="form-control border-input" placeholder="ket_perawataan" name="Ket_perawataan" class="form-control form-control-lg" required="">
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

                </div>
              </div>
            </div>
          </div>
        </div>