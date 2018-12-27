
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">apakah kamu yakin mau keluar mr <?php echo $this->session->userdata("nama"); ?></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?=base_url('index.php/login/logout')?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?=base_url('vendor/chart.js')?>/Chart.min.js')?>"></script>
    <script src="<?=base_url('vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('vendor/datatables/dataTables.bootstrap4.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('js/sb-admin.min.js')?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?=base_url('js/demo/datatables-demo.js')?>"></script>
    <script src="<?=base_url('js/demo/chart-area-demo.js')?>"></script>

  </body>

</html>
