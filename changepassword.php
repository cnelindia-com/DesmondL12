<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle"></i> Change Password
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">

            <div class="col-md-5">
                <div class="nav-tabs-custom">              
                        <div class=" tab-pane" id="changepass">
                            <form role="form" action="<?= base_url('changepassword') ?>" method="post">
                                 <?php if($this->session->flashdata('status')=='Update Successful'): ?>
                                <div class="alert alert-success" style="text-align: center; "> 
                                <?= $this->session->flashdata('status'); ?>
                                </div>
                                <?php elseif($this->session->flashdata('status')=='Reset Password Failed'):?>
                                    <div class="alert alert-danger" style="text-align: center; "> 
                                <?= $this->session->flashdata('status'); ?>
                                </div>
                                <?php endif; ?>

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="inputPassword1">Old Password</label>
                                                <input type="password" class="form-control" id="inputOldPassword" placeholder="Old password" name="oldPassword" maxlength="20" required>
                                                <span  style=" position: absolute; right: 23px;  top: 35px;" id="icon" class=" fa fa-eye"></span>
                                            </div>
                                        </div>
                                    </div>
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
                                                 <span  style=" position: absolute; right: 23px;  top: 35px;" id="icon" class=" fa fa-eye"></span>
                                                    <input type="hidden" name="pEmploymentDetailID" value=""/>
                                                </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
            
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-primary" value="Submit" name="password_change" />
                                    <input type="reset" class="btn btn-default" value="Reset" />
                                </div>
                            </form>
                        </div>                        
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