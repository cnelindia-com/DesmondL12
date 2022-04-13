<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-plus"></i> Add New Employee
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
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="#" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">First Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo set_value('fname'); ?>" id="fname" name="fname" maxlength="128">
                                    </div>
                                </div>  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="lname">Last Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" value="<?php echo set_value('lname'); ?>" id="lname" name="lname" maxlength="128">
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control required" value="<?php echo set_value('email'); ?>" id="email" name="email" maxlength="128">
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="mobile">Mobile Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" value="<?php echo set_value('mobile'); ?>" id="mobile" name="mobile" maxlength="128">
                                    </div>
                                </div>    
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
               
                <div class="row">
                    <div class="col-md-12">
                       
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>