<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hr System : Forgot Password</title>
      <link rel="icon" type="image/x-icon" href="<?= base_url('uploads/logo-mini.png') ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <style type="text/css">
 .login-box{
  width: 25%;
  background-color: #fff; 
  padding: 50px;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
      border: 1px solid #636363;
}
.logo{
      text-align: center;
    margin-bottom: 20px;
}
.logo img{
  width: 100%;
}
  </style>
  <body class="login-page"  style="background-image: url(<?= base_url('uploads/background3-min.png') ?>)"
      <div class="overlay" style="background-color: #0000003d;height: 100%">
    <div class="login-box">
   
                     <?php if($this->session->flashdata('status')=='1'): ?>
                                <div class="alert alert-success" style="text-align: center; "> 
                                <?= $this->session->flashdata('status'); ?>
                                </div>
                                <?php elseif($this->session->flashdata('status')=='Please Enter Correct Mail'):?>
                                    <div class="alert alert-danger" style="text-align: center; "> 
                                <?= $this->session->flashdata('status'); ?>
                                </div>
                                <?php endif; ?>

       <div class="logo">
            <img src="<?= base_url('uploads/logo1.png') ?>">
          </div>
        <h4 class="text-center mb-5">Forgot Password</h4>
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <form action="<?=base_url('forgotpassword') ?>" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="login_email" required />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Submit" name="reset_password" />
            </div><!-- /.col -->
          </div>
        </form>
        <a href="<?php echo base_url() ?>"> Back to Login</a><br>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>