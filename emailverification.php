<!------ Include the above in your HEAD tag ---------->
<html>
   <title> HR System | Admin Log In </title>
   <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <style type="text/css">
      #verifications{
        max-width: 500px;
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
        width: 100%;
      }

      @media only screen and (max-width: 767px){

        #verifications{
          width: 90%;
          padding: 30px;
        }

        #verifications h4{
          font-size: 20px;
        }

      }
   </style>
   <body  style="background-image: url(<?= base_url('uploads/background2-min.png') ?>)">
    <div class="overlay"  style="background-color: #0000003d;height: 100%"> 
      <div class="" id="verifications">
        <div class="logo">
            <img src="<?= base_url('uploads/logo1.png') ?>">
          </div>
          <h4> Email Verification Successful </h4>         
          <p> Thank you. Your email has been verified </p>
          <p> Please setup your <a href="<?= base_url('companyprofile') ?>"> Company Profile </a> so that we can process CPF information for you. </p>         
        </div>
      </div>
   </body>
</html>