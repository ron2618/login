<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('css/sb-admin.css')?>" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">		
            <div class="form-group">
              <div class="form-label-group">

                <input type="text" id="username" name ="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
          
            <div class="form-group">
              <div class="checkbox">
                <div class="g-recaptcha" data-sitekey="6LcOwYIUAAAAADpq1kzmYkXAM2WtkZtljMXJBB3h"></div>
              </div>
            </div>
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?=base_url('index.php/register')?>">Register an Account</a>
            <a class="d-block small" href="https://api.whatsapp.com/send?phone=6285230320154">Forgot Password?</a>
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