<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hr System : Forgot Password</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <link rel="icon" type="image/x-icon" href="<?= base_url('uploads/logo-mini.png') ?>">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style type="text/css">
  #reset_form{
  width: 25%;
  background-color: #fff; 
  padding: 50px;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
    .logo{
      text-align: center;
    margin-bottom: 20px;
}
.logo img{
  width: 300px;
}
.pb-4{
  padding-bottom: 20px;
}
  </style>
  <body style="background-image: url(<?= base_url('uploads/background2-min.png') ?>)">
      <div class="overlay" style="background-color: #0000003d;height: 100%">
      
      
      
    <div id="reset_form" class="login-box">
      <div class="login-logo">
       <!--  -->
      </div><!-- /.login-logo -->
      <div class="login-box-body">
         <div class="logo">
            <img src="<?= base_url('uploads/logo1.png') ?>">
          </div>
        <h3 class="login-box-msg text-center pb-4"> <b> Reset Password </b></h3>
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>

        <form action="<?= base_url('resetpassword') ?>" method="post">
        
                <?php if($this->session->flashdata('status')=='Successful'): ?>
                <div class="alert alert-success" style="text-align: center; "> 
                <?= $this->session->flashdata('status'); ?>
                </div>
                <?php elseif($this->session->flashdata('status')=='Failed'):?>
                <div class="alert alert-danger" style="text-align: center; "> 
                <?= $this->session->flashdata('status'); ?>
                </div>
                <?php endif; ?>
           <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputPassword1">New Password</label>
                    <input type="password" class="form-control" id="inputPassword1" placeholder="New password" name="newPassword" maxlength="20" required>
                     <span  style=" position: absolute; right: 23px;  top: 35px;" id="icon" class=" fa fa-eye"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputPassword2">Confirm New Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Confirm new password" name="cNewPassword" maxlength="20" required>
                    <input type="hidden" name="pGUID" value="<?php echo $_REQUEST['pGUID'];?>"/>
                     <span  style=" position: absolute; right: 23px;  top: 35px;" id="icon" class=" fa fa-eye"></span>
                </div>
            </div>
        </div>
          
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Submit" name="reset" onclick="return checkPassword()" />
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
</div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).on('click','#icon',function(){
         $(this).toggleClass("fa-eye fa-eye-slash");
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
    })
</script>

<script>
          
          // Function to check Whether both passwords
          // is same or not.
          function checkPassword(form) 
          {
            // console.log(form);
              password1 = form.newPassword.value;
              password2 = form.cNewPassword.value;

              alert(password1);
              // If Not same return False.    
              if (password1 != password2) 
              {
                  alert ("\nPassword did not match: Please try again...")
                  return false;
              }

              // If same return True.
              else
              {
               return true;
              }
          }
      </script>

  </body>
</html>