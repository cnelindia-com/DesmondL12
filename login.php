<!------ Include the above in your HEAD tag ---------->
<html>
   <title> HR System | Admin Log In </title>
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
  width: 100% !important;
}
a{
  text-decoration: none;
}
   </style>
   <body style="background-image: url(<?= base_url('uploads/background2-min.png') ?>)">
      <div class="overlay" style="background-color: #0000003d;height: 100%">
                     <form id="signup_form" action="<?= base_url('home') ?>">
                        <div class="logo">
                          <img src="<?= base_url('uploads/logo1.png') ?>">
                        </div>
                        <div class="heading">
                           <h4 class="form-heading"> Sign In</h4>
                        </div>
                           <div class="form-group row">
                            <div class="col-sm-12">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>
                          </div>
                        <div class="form-group row" style="position: relative;">
                            <div class="col-sm-12">
                            <input id="inputPassword" placeholder="Password" type="password" class="form-control" required="">
                               <span onClick="myFunction()" style=" position: absolute; right: 20px;  top: 10px;" id="icon" class=" fa fa-eye"></span>
                            </div>
                          </div>
                            <div class="form-group row">
                           <div class="col-sm-12">
                              <button class="btn btn-success form-control" type="submit">Log In</button>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6"> <a href="<?= base_url('signup'); ?>"> New Sign Up </a> </div>
                           <div class="col-sm-6 text-end"> <a href="<?= base_url('forgotpassword'); ?>"> Forgot Password </a>  </div>
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