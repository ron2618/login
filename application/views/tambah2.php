<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('css/sb-admin.css')?>" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Tambah Data</div>
        <div class="card-body">
         <?php  echo form_open("index.php/control/tambah/"); ?>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                     <input type="text" id="username" name ="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="username">Username</label>
              </div>
            </div></div><br>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                 <input type="text" id="email" name ="email" class="form-control" placeholder="email" required="required" autofocus="autofocus">
                <label for="email">email</label>
              </div>
            </div></div></div>
             <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                 <input type="text" id="password" name ="password" class="form-control" placeholder="password" required="required" autofocus="autofocus">
                <label for="password">password</label>
              </div>
            </div></div></div>
            <div class="form-group">
              <div class="form-label-group">
              	<div class="form-row">
                <div class="col-md-6">
            <select name="user" id="user" class="form-control">
 			 <option value="1">Admin</option>
 			 <option value="0">Operator</option>
			</select></div></div>
        </div>

            <div class="form-group">
              <div class="checkbox">
                <label>
              </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="daftar">
         <?php echo form_close();?>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="text-center">
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  </body>

</html>
