  <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data User</div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="alert alert-success alert-dismissable">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>ini adalah data user</a>.
                            </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <a href="<?php echo base_url('index.php/control/tambah'); ?>"><button class="btn btn-warning btn-sm">TAMBAH</button></a><br><br>

                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NAMA</th>
                      <th>EMAIL</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
              <?php
             if( ! empty($admin)){ 
                 foreach($admin as $data){ 
                  echo "<tr>
                  <td>".$data->id."</td>
                  <td>".$data->username."</td>
                  <td>".$data->email."</td>
                  <td><a href='".base_url("index.php/control/ubah/".$data->id)."'><button class='btn btn-warning btn-sm'>EDIT</button></a> |
                  <a href='".base_url("index.php/control/hapus/".$data->id)."'><button class='btn btn-danger btn-sm'>DELETE</button></a></td>
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
        <!-- /.container-fluid -->