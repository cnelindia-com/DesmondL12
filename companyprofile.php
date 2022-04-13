<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-building-o"></i> Company Profile
      </h1>
    </section>
    <style type="text/css">

        .mb-3{
            margin-bottom: 15px;
        }

    </style>
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary pb-20">
                   <!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="#" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-10">  
                                    <h4 class="my-3">Setting up your company profile will allow us to prepare information about your company to submit to CPF or IRAS.</h4>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Company Name <span style="color: red"> * </span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control required" value="Hr System" id="fname" name="fname" maxlength="128">
                                    </div>
                                </div>  
                                 <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname"> Company Logo</label>
                                    </div>
                                     <div class="col-md-2">
                                            <img id="blah" class="profile_img" style="width: 100%; height: 100%;" src="<?= base_url() ?>/uploads/profile.png">
                                    </div>
                                    <div class="col-md-4 upload_section" style="height: 150px">
                                        <input onchange="readURL(this);" type="file" class="form-control required" value=" ">
                                        <input style="position: absolute;bottom: 0px;left:15px" type="submit" class="required" value="Upload Photo ">
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">MOM Sector <span style="color: red"> * </span></label> 
                                    </div>
                                    <div class="col-md-8">
                                       <select class="form-control" name="mom-sector">
                                           <option> Option 1 </option>
                                           <option> Option 2 </option>
                                           <option> Option 3 </option>
                                       </select>
                                    </div>
                                    <div class="col-md-1">
                                    	<i>CPF</i>
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">ACRA Registration Number <span style="color: red"> * </span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control required" value=" ASd5421515 " id="fname" name="fname" maxlength="128">
                                    </div>
                                       <div class="col-md-1">
                                    	<i>CPF,IRAS</i>
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">CPF Submission Number <span style="color: red"> * </span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="required group_input" value="" id="fname" name="fname" maxlength="128"> - 
                                        <input type="text" class="required group_input" value="" id="fname" name="fname" maxlength="128">
                                    </div>
                                       <div class="col-md-1">
                                    	<i>CPF</i>
                                    </div>
                                </div>  
                                    <div class="row">
                                    <div class="col-md-3">
                                        <label for="fname">Payroll Period From Date <span style="color: red"> * </span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <select> 
                                            <?php 
                                               for ($i=1; $i <= 31 ; $i++) { 
                                                if($i === 15){ $selected = "selected"; }else{ $selected = ""; }
                                                ?>

                                                     <option <?= $selected ?>> <?= $i ?> </option>   
                                                 <?php   }      ?>
                                        </select> of every month
                                    </div>
                                </div>   
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                    </form>
                    <div class="my-3 pl-10 comapny_profile_p">
                          <p> <b> CPF: These information are required when generating files to submit to CPF </b></p>
                          <p> <b> IRAS: These information are required when generation files to submit to IRAS </b></p>
                    </div>
                 
                </div>
            </div>
            <div class="col-md-8">
                <div class="bg-white">
                <h4> <b> Explanation </b> </h4>
                <div class="row">
                    <div class="col-md-2">
                        <h4 class="mt-0"> <b> MOM Sector </b> </h4>
                    </div>
                    <div class="col-md-9">
                        <p> This is applicable if you hire foriegners as MOM categorize companies into 5 different sectors. You can verify your sector by logging into MOM Work Permit Online(WPOL) system  </p>
                    </div>
                </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript">
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>