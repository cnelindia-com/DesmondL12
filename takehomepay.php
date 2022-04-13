<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-list-alt"></i> Take Home Pay Summary      
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-5">
              <div class="box">
                <div class="box-body table-responsive no-padding">
                  <div class="border-1 mb-3" style="margin-bottom: 15px;">
                  <h1 style="text-align: center">  February 2021   </h1>
                  <p style="text-align: center"> 3 February 2021 to 2 March 2021 </p>
                    <h5 class="text-center"> <b> DRAFT </b> </h5>
                  </div>
                  <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Employee </th>
                        <th style="text-align: right;">Take Home Pay</th>
                    </tr>
                    </thead>
                    <tbody class="myTable">                      
                    <tr>
                      <td> <a href="<?= base_url('employeedetails') ?>"> Employee1 </a> </td>
                      <td style="text-align: right;"> 2000.00 </td>                     
                    </tr>
                     <tr>
                     <td>  <a href="<?= base_url('employeedetails') ?>"> Employee2 </a> </td>
                    <td style="text-align: right;"> 3000.00 </td>
                    </tr> 
                    <tr>
                     <td>  <a href="<?= base_url('employeedetails') ?>"> Employee3 </a> </td>
                    <td style="text-align: right;"> 3500.00 </td>
                    </tr> 
                    <tr>
                     <td>  <a href="<?= base_url('employeedetails') ?>"> Employee4 </a> </td>
                    <td style="text-align: right;"> 4000.00 </td>
                    </tr>
                     <tr>
                     <td>  <a href="<?= base_url('employeedetails') ?>"> Employee5 </a> </td>
                    <td style="text-align: right;"> 3000.00 </td>
                    </tr>
                    </tbody>                 
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php //$this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
