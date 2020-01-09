<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="<?php echo base_url();?>perawatan/input" class="btn btn-info btn-fill btn-wd">Tambah Data</a></span>
                  <h4 class="">Data Perawatan</h4>
                  <p class="text-danger">
                    Data Perawatan
                  </p>
                  <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Id Perawatan
                          </th>
                          <th>
                            Nama Barang
                          </th>
                          <th>
                            Jumlah perawatan
                          </th>
                          <th>
                            Tanggal Perawatan
                          </th>
                          <th>
                            Keterangan Perawatan
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
                            <td><?php echo $row->id_perawataan;?></td>
                            <td><?php echo $row->nama_barang;?></td>
                            <td><?php echo $row->jml_perawataan;?></td>
                            <td><?php echo $row->tgl_perawataan;?></td>
                            <td><?php echo $row->ket_perawataan;?></td>
                          <td>
                            <a href="<?php echo base_url('perawatan/hapus/'.$row->id_perawataan);?>" class="badge badge-danger">Hapus</a>
                            <a href="<?php echo base_url('perawatan/ubah/'.$row->id_perawataan);?>" class="badge badge-success">Update</a>
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