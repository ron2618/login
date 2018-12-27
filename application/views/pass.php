  <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data User</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <a href="<?php echo base_url('index.php/data/tambah'); ?>"><button class="btn btn-warning btn-sm">tambah</button></a><br><br>
                  <thead>
                    <tr>
                      <th>password</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>password</th>

                    </tr>
                  </tfoot>
              <?php
             if( ! empty($admin)){ 
                 foreach($admin as $data){ 
                  echo "<tr>
                  <td>".$data->password."</td>
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