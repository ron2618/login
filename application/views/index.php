  <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Barang</div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="alert alert-success alert-dismissable">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>ini adalah Barang</a>.
                            </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <a href="<?php echo base_url('index.php/data/tambah'); ?>"><button class="btn btn-warning btn-sm">TAMBAH</button></a><br><br>

                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NAMA</th>
                      <th>HARGA</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
              <?php
             if( ! empty($barang)){ 
                 foreach($barang as $data){ 
                  echo "<tr>
                  <td>".$data->id."</td>
                  <td>".$data->nama."</td>
                  <td>Rp.".$data->harga."</td>
                  <td><a href='".base_url("index.php/data/ubah/".$data->id)."'><button class='btn btn-warning btn-sm'>EDIT</button></a> |
                  <button class='btn btn-danger btn-sm' data-toggle='modal' data-target='#myModal'>DELETE</button></td>
                  </tr>";
                  
                         }
                          }else{ 
                   echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                     }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
          <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Warning!!</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>data yang di hapus tidak bisa di kembalikan</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
          <a href=<?php echo "'".base_url("index.php/data/hapus/".$data->id)."'";?>><button type="button" class="btn btn-danger" >hapus</button></a>
        </div>
      </div>
    </div>
  </div>
   </div>
</body>
</html>
        <!-- /.container-fluid -->