<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="<?php echo base_url();?>barang/input" class="btn btn-info btn-fill btn-wd">Tambah Data</a></span>
                  <h4 class="">Data Barang</h4>
                  <p class="text-danger">
                    Data barang yang tersedia.
                  </p>
                  <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Id Barang
                          </th>
                          <th>
                            Nama Barang
                          </th>
                          <th>
                            Kategori Barang
                          </th>
                          <th>
                            Merek Barang
                          </th>
                          <th>
                            Jumlah Barang
                          </th>
                          <th>
                            Gambar
                          </th>
                          <th>
                            Status Peminjaman
                          </th>
                          <th>
                            Status Perawatan
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $no=0;//variabel no
                            $no++;
                            foreach ($data->result() as $row){
                            ?>
                        <tr class="table-primary">
                            <td><?php echo $no++;?></td>
                            <td><?php echo $row->id_barang;?></td>
<!--                             <td><?php echo $row->id_ruangan;?></td> -->
                            <td><?php echo $row->nama_barang;?></td>
                            <td><?php echo $row->kategori;?></td>
                            <td><?php echo $row->merk_barang;?></td>
                            <td><?php echo $row->jml_barang;?></td>
                            <td><?php echo $row->gambar;?></td>
                            <td><?php echo $row->status_peminjaman;?></td>
                            <td><?php echo $row->status_perawatan;?></td>
                          <td>
                            <a href="<?php echo base_url('barang/hapus/'.$row->id_barang);?>" class="badge badge-danger">Hapus</a>
                            <a href="<?php echo base_url('barang/ubah/'.$row->id_barang);?>" class="badge badge-success">Update</a>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    <script type="text/javascript">
                      $(document).ready( function () {
                          $('#myTable').DataTable();
                      } );
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>