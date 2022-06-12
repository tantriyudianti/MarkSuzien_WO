<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/cdnjs/materialdesignicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.4.1-dist/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css');?>">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo base_url('assets/images/13.jpg');?>" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Create Your Account</p>
              <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
                <?php echo form_open('user/register-proses',''); ?>

                <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="nama"class="form-control" id="exampleInputEmail1" placeholder="Username">
                  <?php echo form_error('nama', '<div class="text-danger"><small>', '</small></div>');?>
                </div>
                <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email"class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                  <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
                </div>

                <div class="form-group mb-4">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password"
                  <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>');?>
                </div>

                <button type="submit" class="btn btn-block login-btn mb-4">Register Now!</button>
                  <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="<?php echo base_url('assets/js/jquery/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/popper/node_modules/popper.js/dist/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap-4.4.1-dist/js/bootstrap.min.js');?>"></script>
</body>
</html>