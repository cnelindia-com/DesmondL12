 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Home
      </h1>

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
<section class="content" id="home">
        <div class="container-fluid" style="background: #fff; padding: 20px;margin-bottom: 20px">
        <div class="row ">
           <!-- ./col -->
           <div class="col-md-12">
             <h4> <b> Payroll Records </b> </h4>
            <p class="my-3">
             <span > Year </span> 
             <select>
               <option> 2018 </option>
               <option> 2019 </option>
               <option> 2020 </option>
               <option selected> 2021 </option>
             </select>
              </p>
              <button class="btn btn-primary">  Retrive Payroll Records </button> 
              <div class="table-responsive">
                <table class=" table table-hover" style="margin-top: 20px" id="datatable">
                      <thead>
                      <tr>
                          <th>Period </th>
                          <th>Status</th>
                          <th>As Of</th>
                          <th style="text-align: right;"><span style="margin-right: 10px !important;">Take Home</span></th>
                          <th style="text-align: right;"><span style="margin-right: 10px !important;">CPF</span></th>
                          <th style="text-align: right;"><span style="margin-right: 10px !important;">FWL</span></th>
                          <th style="text-align: right;"><span style="margin-right: 10px !important;">Total</span></th>
                      </tr>
                      </thead>
                      <tbody class="myTable">  
                      <?php
                          for ($i=1; $i < 20 ; $i++) {  ?>
                            <tr>
                                <td>  June 2021 </td>
                                <td> Finalized </td>
                                <td> 1-july-2021 </td>
                                <td class="text-right"> 12323.00 </td>
                                <td class="text-right"> 552.50 </td>
                                <td class="text-right"> 2045.50 </td>
                                <td class="text-right"> 14920.00 </td>
                              </tr>
                        <?php  }
                      ?> 
                      </tbody>                 
                  </table>
              </div>
            </div>
          </div>
          </div>
          <div class="container-fluid " style="background: #fff; padding: 20px;">
          <div class="row" style=" margin-bottom: 20px;">
             <!-- ./col -->
             <div class="col-md-12">
                <h4> Download Excel Records</h4>
                <span style="position: relative;" class="mr-50"> <span> From </span> <input type="text" id="date" name="" class="date "  placeholder = 'dd-mm-yy'> <i class="fa fa-calendar calendar"></i>  </span>
                <span class="fromtodate" style="position: relative;">  <span> To </span> &nbsp;&nbsp; <input type="text" class="date"  name=""  placeholder = 'dd-mm-yy'> <i class="fa fa-calendar calendar"></i>  </span>
                <h4 style="color: red"> From date cannot be later than To Date </h4> 
                <button class="btn btn-primary download_excel">  Download Excel Records </button>
              </div>
            </div>
            <div class="row priview_excel" style="display: none;">
                <div class="col-md-12">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th>  Employee Name </th>
                                <th>  ID Type </th>
                                <th>  Employee ID  </th>
                                <th>  Payroll Period </th>
                                <th>  From Date </th>
                                <th>  To Date </th>
                                <th>  Payout Date  </th>
                                <th>  Status </th>
                                <th>  Salery Item</th>
                                <th>  Amount </th>
                                <th>  Remarks </th>
                                <th>  Directors </th>
                                <th>  Commission </th>
                                <th>  Allowance </th>
                                <th>  CPF Ordainary Wages </th>
                                <th>  CPF Additional Wages </th>
                            </tr>
                        </thead>
                        <tbody>                   
                            <tr> 
                                <td> Peter Lim </td>
                                <td> NRIC </td>
                                <td> XXX123456 </td>
                                <td> Sep 21 </td>
                                <td> 1 Sep 21 </td>
                                <td> 30 Sep 21 </td>
                                <td> 1 Oct 21 </td>
                                <td> Finalized </td>
                                <td> Transport Allowance </td>
                                <td> 2500.00 </td>
                                <td>Based on 17% </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                             
                           </tr>
                           <tr> 
                                <td> Peter Lim </td>
                                <td> NRIC </td>
                                <td> XXX123456 </td>
                                <td> Sep 21 </td>
                                <td> 1 Sep 21 </td>
                                <td> 30 Sep 21 </td>
                                <td> 1 Oct 21 </td>
                                <td> Finalized </td>
                                <td> Loans </td>
                                <td> 2500.00 </td>
                                <td>Based on 17% </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                             
                           </tr>
                           <tr> 
                                <td> Peter Lim </td>
                                <td> NRIC </td>
                                <td> XXX123456 </td>
                                <td> Sep 21 </td>
                                <td> 1 Sep 21 </td>
                                <td> 30 Sep 21 </td>
                                <td> 1 Oct 21 </td>
                                <td> Finalized </td>
                                <td> Employee Contribution </td>
                                <td> 2500.00 </td>
                                <td>Based on 17% </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                             
                           </tr>
                           <tr> 
                                <td> Peter Lim </td>
                                <td> NRIC </td>
                                <td> XXX123456 </td>
                                <td> Sep 21 </td>
                                <td> 1 Sep 21 </td>
                                <td> 30 Sep 21 </td>
                                <td> 1 Oct 21 </td>
                                <td> Finalized </td>
                                <td>SDL </td>
                                <td> 2500.00 </td>
                                <td>Based on 17% </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                                <td> True </td>
                             
                           </tr>
                        </tbody>
                    </table>
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
<script type="text/javascript">
  $(document).on('click','.download_excel',function(){
    $('.priview_excel').show();
  })
</script>
