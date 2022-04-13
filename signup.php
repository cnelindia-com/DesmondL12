<!------ Include the above in your HEAD tag ---------->
<html>
   <title> HR System Sign Up </title>
   <head>
      <link rel="icon" type="image/x-icon" href="<?= base_url('uploads/logo-mini.png') ?>">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <style type="text/css">
      #signup_form{
         width: 50%;
         background-color: #fff; 
         padding: 20px 10px;
         margin: 0;
         position: absolute;
         top: 50%;
         left: 50%;
         -ms-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
      }
      .form-group {
         margin-bottom: 1rem;
      }
      label{
         text-align: right;
      }
      .logo{
         text-align: center;
         margin-bottom: 20px;
      }
      .logo img{
         width: 350px;
      }

      .heading{
         text-align: center;
         margin-bottom: 1rem;
      } 

      @media only screen and (max-width: 767px){

         #signup_form{
            width: 90%;
         }

         label{
            text-align: left;
         }  

         .logo img{
            width: 100%;
         }

      }

   </style>
   <body style="background-image: url(<?= base_url('uploads/background1-min.png') ?>)">
      <div class="overlay" style="background-color: #0000003d;height: 100%">
                     <form id="signup_form" method="post">
                        
              

                     <?php if($this->session->flashdata('status')=='User Registered Successfully'): ?>
                                <div class="alert alert-success" style="text-align: center; margin-top: 50px; "> 
                                <?= $this->session->flashdata('status'); ?>
                                </div>
                                <?php elseif($this->session->flashdata('status')=='User Already registered'):?>
                                    <div class="alert alert-danger" style="text-align: center; margin-top: 50px; "> 
                                <?= $this->session->flashdata('status'); ?>
                                </div>
                                <?php endif; ?>
                  
                       <div class="logo">
                          <img src="<?= base_url('uploads/logo1.png') ?>">
                        </div>
                        <div class="heading">
                           <h4 class="form-heading"> Free Sign Up</h4>
                           
                        </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label text-right"> <span class="text-danger"> * </span> Company Name</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="" required="" name="cname">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label"> <span class="text-danger"> * </span> ACRA Registration Number</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="" required="" name="registration">
                            </div>
                          </div>
                           <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label"> <span class="text-danger"> * </span> Full Name</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="" required="" name="fname">
                            </div>
                          </div>
                           <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label"> <span class="text-danger"> * </span> Email</label>
                            <div class="col-sm-6">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="" required="" name="email">
                            </div>
                          </div>
                        <div class="form-group row" style="position: relative;">
                            <label for="inputEmail3" class="col-sm-5 col-form-label"> <span class="text-danger"> * </span> Password</label>
                            <div class="col-sm-6">
                            <input id="inputPassword" placeholder="" type="password" class="form-control" required="" name="password">
                               <span onclick="myFunction()" style=" position: absolute; right: 35px;  top: 10px;" id="icon" class=" fa fa-eye"></span>
                            </div>
                          </div>
                        <div class="form-group row">
                           <div class="col-sm-5">  </div>
                           <div class="col-sm-6">
                              <label class="checkbox"><input type="checkbox" required="">
                             I agree to the  <a href="#">Terms of Service</a></label> 
                           </div>
                        </div>
                         <div class="form-group row">
                           <div class="col-sm-5">  </div>
                           <div class="col-sm-6">
                              <label class="checkbox"><input type="checkbox" required="" >
                             I agree to the  <a href="#">Privacy Policy</a></label> 
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-5">  </div>
                           <div class="col-sm-6">
                              <button class="btn btn-success form-control" name="register" type="submit" >Sign Up</button>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-12" style="text-align: right; padding-right: 80px;">
                              <a href="<?= base_url() ?>"> Have an existing account? Login instead. </a>
                           </div>
                        </div>
                     </form>
               </div>
      <script type="text/javascript">
         function myFunction() {
         var x = document.getElementById("inputPassword");
         var icon = document.getElementById("icon");
         if (x.type === "password") {
         x.type = "text";
         icon.setAttribute("class","fa fa-eye-slash");
         } else {
         x.type = "password";
         icon.setAttribute("class","fa fa-eye");
         }
         }
      </script>
   </body>
</html>