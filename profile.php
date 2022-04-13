<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle"></i> My Profile
        <small>View or modify information</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
              <!-- general form elements -->


                <div class="box box-warning">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>/uploads/profile.png" alt="User profile picture">
                        <h3 class="profile-username text-center">JOhn</h3>

                        <p class="text-muted text-center">Admin</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right">johnsim@gmail.com</a>
                            </li>
                            <li class="list-group-item">
                                <b>Mobile</b> <a class="pull-right">1234567890</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-md-5">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#details" data-toggle="tab">Details</a></li>                      
                    </ul>
                    <div class="tab-content">                        
                            <form action="#" method="post" id="editProfile" role="form">
                                <?php $this->load->helper('form'); ?>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">                                
                                            <div class="form-group">
                                                <label for="fname">Full Name</label>
                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="" value=" John Sim " maxlength="128" />
                                                <!-- <input type="hidden" value="<?php //echo $userId; ?>" name="userId" id="userId" />     -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="mobile">Mobile Number</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="" value="1234567890" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="" value="johnsim@gmail.com">
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

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>
<style type="text/css">
.stripeval {
    float: left;
    width: 100%;
    margin: 12px 4px 2px 3px;
}
.stripetype {
    margin-top: 10px !important;
    margin-right: 9px !important;
}
</style>
<script type="text/javascript">
$(function(){ // start of doc ready.
   $(".stripetype").click(function(e){
      e.preventDefault();  // stops the jump when an anchor clicked.
      var title = $(this).val(); // anchors do have text not values.
      if (confirm('Are You Sure Want to Stripe in '+title+' ?')) {
      $.ajax({
        url: '<?php echo base_url();?>user/stripemode',
        data: {'title': title}, // change this to send js object
        type: "post",
        success: function(data){
          window.location.href = "<?php echo base_url();?>profile";
        }
      });
  }
   });
}); // end of doc ready
</script>