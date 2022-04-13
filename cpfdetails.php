<style type="text/css">
	@media (max-width: 1366px  ){
		.col-md-3 {
		    width: 36% !important;
		}
	}
</style>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-money"></i> CPF Details 
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body table-responsive no-padding" style="padding:0px 10px !important">
  
                  <table class="table table-hover" style="margin-top: 15px;">
                    <h3 class="text-center cpfdownload"> August 2021 </h3>
                    <a href="#"> Download CPF Submission File  </a> <br>
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>CPF Account No.</th>
                        <th>Name of Employee</th>
                        <th class="text-right">CPF To Be Paid ($)</th>
                        <th class="text-right">SDL To Be Paid ($)</th>
                        <th class="text-right">Employer CPF ($)</th>
                        <th class="text-right">Employee CPF ($)</th>
                        <th class="text-right">Ordinary Wages ($)</th>
                        <th class="text-right">Additional Wages ($)</th>
                        <th>Agency</th>
                        <th class="text-right">Agency Fund ($)</th>
                    </tr>
                    </thead>
                    <tbody class="myTable">  
                    <?php
                        for ($i=1; $i < 5 ; $i++) {  ?>
                           <tr>
                              <td>  <?= $i ?> </td>
                              <td> S12346567A </td>
                              <td>  <span class="name">John Tan </span> <input type="email" name="" value="" style="display: none">  </td>
                              <td class="text-right"> 123.00 </td>
                              <td class="text-right"> 5.50 </td>
                              <td class="text-right"> 205.50 </td>
                              <td class="text-right"> 205.50 </td>
                              <td class="text-right"> 205.50 </td>
                              <td class="text-right"> 205.50 </td>
                              <td> CDAC </td>
                              <td class="text-right"> 10.00 </td>
                            </tr>
                      <?php  }
                     ?>                    
                    <tr>
                      <td colspan="3" class="text-right"> <b> Total Amount </b> </td>
                      <td class="text-right"> <b> 492.00 </b> </td>
                      <td class="text-right"> <b> 16.50 </b> </td>
                      <td class="text-right"> <b> 616.50 </b> </td>
                      <td class="text-right"> <b> 616.50 </b> </td>
                      <td class="text-right"> <b>  </b> </td>
                      <td class="text-right"> <b> 616.50 </b> </td>
                      <td class="text-right"> <b>  </b> </td>
                      <td class="text-right"> <b> 30.00 </b> </td>
                    
                    </tr>
                   
                    </tbody>                 
                  </table>
          
                </div><!-- /.box-body -->
                <div class="box-footer clearfix summary_group_hwe">
                   <div class="container-fluid">
                    <div class="row">
                       <div class="col-md-12">
                          <h4 class="text-left"> <b> Summary </b> </h4>
                          <div class="row">  <div class="col-md-5 text-left"><span style="margin-right: 15px;">1</span> Total CPF Contribution  </div> <div class="col-md-1 text-right"> 2000.00 </div></div>
                          <div class="row">  <div class="col-md-5 text-left"><span style="margin-right: 15px;">2</span> CPF Late Payment Interest </div> <div class="col-md-1 text-right"> - </div></div>
                          <div class="row">  <div class="col-md-5 text-left"><span style="margin-right: 15px;">3</span> Foreign Worker Levy (FWL) </div> <div class="col-md-1 text-right"> - </div></div>
                          <div class="row">  <div class="col-md-5 text-left"><span style="margin-right: 15px;">4</span> FWL Late Payment Interest </div> <div class="col-md-1 text-right"> -  </div></div>
                          <div class="row">  <div class="col-md-5 text-left"><span style="margin-right: 10px;">5a</span> Skill Development Levy (SDL) - For Local Employee  </div> <div class="col-md-1 text-right"> 51.50 </div></div>
                          <div class="row">  <div class="col-md-5 text-left"><span style="margin-right: 10px;">5b</span> Skill Development Levy (SDL) - For Foriegn Employee  </div> <div class="col-md-1 text-right"> 21.50 </div></div>
                         <div class="row">   <div class="col-md-5 text-left"><span style="margin-right: 15px;">6</span> Donation To Community Chest  </div> <div class="col-md-1 text-right">  </div> <div class="col-md-2 text-left no-padding"> &nbsp; <span> Donor Count : 0 </span> </div></div>
                         <div class="row">   <div class="col-md-5 text-left"><span style="margin-right: 15px;">7</span> Total MBMF Contributions  </div> <div class="col-md-1 text-right"> 1.50  </div> <div class="col-md-2 text-left no-padding" > &nbsp; <span> Donor Count : 1 </span> </div></div>
                         <div class="row">   <div class="col-md-5 text-left"><span style="margin-right: 15px;">8</span> Total SINDA Contributions  </div> <div class="col-md-1 text-right"> 1.50  </div> <div class="col-md-2 text-left no-padding"> &nbsp; <span> Donor Count : 2 </span> </div></div>
                         <div class="row">   <div class="col-md-5 text-left"><span style="margin-right: 15px;">9</span> Total CDAC Contributions  </div> <div class="col-md-1 text-right"> 1.50 </div><div class="col-md-2 text-left no-padding"> &nbsp; <span> Donor Count : 5 </span> </div></div>
                         <div class="row">   <div class="col-md-5 text-left"><span style="margin-right: 10px;">10</span> Total ECF Contributions  </div> <div class="col-md-1 text-right">  </div> <div class="col-md-2 text-left no-padding"> &nbsp; <span> Donor Count : 0 </span> </div></div>
                         <div class="row">   <div class="col-md-8 ">  <hr> </div> </div>
                         <div class="row">  <div class="col-md-5 text-left"> <b> Grand Total: </b>  </div> <div class="col-md-1 text-right"> <b> 2074.50  </b> </div></div>
                         <div class="row">   <div class="col-md-8 ">  <hr><hr> </div></div>
                       </div>
                   </div>
                </div>
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
     