 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>

<!--         <div class="box-header">
            <h3 class="box-title"></h3>
            <div class="box-tools">
                <select class="select_location form-control">
                 <option  value="">Select Interval</option>
                 <option  value="">Today</option>
                 <option value="">Last 7 Days</option>
                 <option  value="">Last 30 Days</option>
                 <option value="">Last 3 Month</option>
                 <option value="">Last year</option>
              </select>
            </div>
            </div> -->

<script type="text/javascript">
jQuery(document).ready( function($) {
$('.select_location').on('change', function(){
   window.location = $(this).val();
});
$('.select_usertype').on('change', function(){
   window.location = $(this).val();
});

});
</script>
    </section>
<section class="content">
        <div class="row">
           <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <p>Video Chat</p>

                  <h3> Completed</h3>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="fa fa-video-camera"></i>
                </div>
                <a href="<?php echo base_url();?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
               <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <p>Tech Available</p>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo base_url(); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <p>Products</p>

                  <h3> Items</h3>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="fa fa-product-hunt"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <p>New Pet Parent Signup</p>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <p>New Vet Signup</p>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <p>New Tech Signup</p>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <p>Pet Parent Login</p>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo base_url(); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <p>Vet Available</p>
                  <h3></h3>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo base_url(); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            </div>
        </section>
<!--  -->



   
    <section class="content">
        <div class="container">
        <div class="row">
          <div id="morris-line-chart" style="height: 250px;"></div>
        </div>
      </section>
</div>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#stacked {
  margin-top: 26px !important;
}

</style>
