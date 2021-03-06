<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CI Admin - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
	<title>CI Admin : Login</title>
    <!-- Icons-->
    <link href="<?php echo base_url(); ?>assets/icons/coreui/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/icons/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/icons/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/icons/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="button" class="btn btn-primary px-4">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button type="button" class="btn btn-link px-0">Forgot password?</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button type="button" class="btn btn-primary active mt-3">Register Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap and necessary plugins-->
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/icons/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/icons/coreui/js/coreui.min.js"></script>
	<!-- AngularJS-->
	<script src="<?php echo base_url(); ?>assets/js/angularjs/1.6.10/angular.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/angularjs/js/angular-custom-1.6.10.js"></script>
  </body>
</html>