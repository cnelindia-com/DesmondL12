<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit FWL 
      </h1>
    </section>
    <section class="content">
        <div class="row">          
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body table-responsive no-padding">
            <div class="row" style="padding-top: 20px">
              <div class="col-md-2"></div>
              <div class="col-md-8 text-center">
                    <p> <b>While our system attempts to calculate FWL as accurate as possible, discrepencies may
occur due to a few reasons. Eg Inaccurate or missing data, unpublished changes to
MOM calculation. As such, do use this page to update any difference in FWL provided
by MOM</b> </p>
          </div>
           <div class="col-md-2"></div>
            </div>
                <!-- <div class="box-body table-responsive no-padding">  -->
                  <table class="table table-hover" id="datatable">
                    <h1 class="text-center November2021_hwe" style="font-size: 60px;"> November 2021 </h1>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>ID Type</th>
                        <th>ID</th>
                        <th style=" width: 150px;">Amount</th>
                        <th style=" width: 400px;">Remarks</th>
                    </tr>
                    </thead>
                    <tbody class="myTable">                      
                    <tr>
                      <td>
                       <span class="name"> John Lim </span>
                       <input type="text" name="" value="" style="display: none">
                        </td>
                      <td> S Pass </td>
                      <td> S123456A </td>
                      <td>
                       <span style="display: none" class="name"> 100000 </span>
                       <input type="text" name="" class="form-control" value="100000" >
                        </td>
                        <td>
                       <span style="display: none" class="name"> Service Tier 1 , basic skilled </span>
                       <input type="text" name=" " class="form-control" value="Service Tier 1 , basic skilled" >
                        </td>                     
                    </tr>
                     <tr>
                      <td> <span class="name"> John Tan </span> <input type="text" name="" value="" style="display: none"> </td>
                      <td> Work Permit </td>
                      <td> S123456A </td>
                      <td>
                        <span style="display: none" class="name"> 100000 </span>
                       <input type="text" name="" class="form-control" value="100000" >
                        </td>
                        <td>
                      <span style="display: none" class="name"> Service Tier 2 , basic skilled </span>
                       <input type="text" name="" class="form-control" value="Service Tier 2 , basic skilled" >
                        </td>      
                    </tr>
                     <tr>
                      <td> <span class="name"> Smith Lim </span> <input type="text" name="" value="" style="display: none"> </td>
                      <td> S Pass </td>
                      <td> S123456A </td>
                      <td>
                       <span style="display: none" class="name"> 100000 </span>
                       <input type="text" name="" class="form-control" value="100000" >
                        </td>
                        <td>
                      <span style="display: none" class="name"> Service Tier 3 , basic skilled </span>
                       <input type="text" name="" class="form-control" value="Service Tier 3 , basic skilled" >
                        </td>      
                    </tr>
                    </tbody> 
                  </table>
                <!-- </div> -->
                  <button style="margin-left: 10px" class="btn btn-primary my-3"> Save </button> 
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php //$this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
  $(document).on('dblclick','.name',function(){
    $(this).hide();
   var vals = $(this).html();
    $(this).next('input').val(vals).show();
  })
    $(document).on('keypress','input',function(e){
       if (e.which == 13) {
        var val = $(this).val();
    $(this).hide();    
    $(this).prev('.name').html(val).show();
  }
  })
</script>