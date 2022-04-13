<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <img  src="<?= base_url('uploads/payroll.png') ?>"> Monthly Account
      </h1>
    </section>
    <style type="text/css">
        .mb-3{
            margin-bottom: 15px;
        }
        hr{
          width: 100%;
        }
    </style>
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary p-5">
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="javascript:void(0)" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">  
                                <div class="row ">
                                    <div class="col-md-2">
                                        <label for="fname">  Month <span style="color: red;font-size: 20px"> * </span> : </label>
                                    </div>
                                    <div class="col-md-9">
                                        <select>
                                            <option> January </option>
                                            <option> February </option>
                                            <option> March </option>
                                            <option> April </option>
                                            <option> May </option>
                                            <option> Jun </option>
                                            <option selected> July </option>
                                            <option> August </option>
                                            <option> September </option>
                                            <option> October </option>
                                            <option> November </option>
                                            <option> December </option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <label for="fname">  Year <span style="color: red;font-size: 20px"> * </span> : </label>
                                    </div>
                                    <div class="col-md-9">
                                        <select>
                                           <option> 2000 </option>
                                           <option> 2001 </option>
                                           <option> 2002 </option>
                                           <option> 2003 </option>
                                           <option> 2004 </option>
                                           <option selected> 2021 </option>
                                        </select>
                                    </div>
                                </div> 
                                 <div class="row mb-3">
                                    <div class="col-md-9">
                                        <label for="fname">Display Setting</label> 
                                        <span class=" text-danger display_setting" style="display: none"> Please select one option</span> <br>
                                    <input type="radio" name="setting" value="payout"> <label class="radio-btn"> Display By Payout </label><br>
                                    <input type="radio" name="setting" value="individual"> <label class="radio-btn"> Individual Accounts </label>
                                      
                                    </div>
                                </div> 
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
                        
                        <div class="box-footer" style="border:none;">
                            <input type="button" class="btn btn-primary retrive" onClick="return validateForm()" value="Retrive Records" />
                        </div>
                    </form>
         <div id="individual" style="display: none">
                <h2 style="background: #3c8bbb;    color: #fff;    padding: 5px 10px;    text-align: center;"> July 2021 </h2>
                <p> <a href="#"> Download in Excel File Format </a> </p>
                <div class="row mb-3">
                       <div class="col-md-5">
                           <div class=" col-md-5 text-left no-padding"> <b> Pay Items </b> </div> <div class="col-md-5 text-right"> <b> Amount </b> </div>
                             <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> Director Gross Salery </div> <div class="col-md-5 text-right"> 14,900.00 </div>
                           <div class=" col-md-5 text-left no-padding"> Staff Gross Salery  </div> <div class="col-md-5 text-right">  1,788.00 </div>
                           <div class=" col-md-5 text-left no-padding"> Director CPF(Employee)  </div> <div class="col-md-5 text-right"> 16,688.00 </div>
                           <div class=" col-md-5 text-left no-padding"> Staff CPF(Employee)  </div> <div class="col-md-5 text-right"> - 4,688.00 </div>
                           <div class=" col-md-5 text-left no-padding">CDAC </div> <div class="col-md-5 text-right"> 1.50 </div>                         
                            <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> <b> Total </b> </div> <div class="col-md-5 text-right"> <b> 28689.50 </b> </div>
                            <div class="col-md-10 no-padding">  <hr> <hr> </div>
                       </div>
                   </div>
                </div>
     <div id="payout" style="display: none">
                <h2 style="background: #3c8bbb;    color: #fff;    padding: 5px 10px;    text-align: center;"> July 2021 </h2>
                <p> <a href="#"> Download in Excel File Format </a> </p>                 
                  <div class="row mb-3">
                       <div class="col-md-5">
                           <h4 class="text-left"> <b> Salary Payout - Director </b> </h4>
                             <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> Gross Salery  </div> <div class="col-md-5 text-right"> 20,000.00 </div>
                           <div class=" col-md-5 text-left no-padding"> CPF(Employee)  </div> <div class="col-md-5 text-right"> 500.00 </div>
                           <div class=" col-md-5 text-left no-padding"> CDAC  </div> <div class="col-md-5 text-right"> 500.00 </div>
                           <div class=" col-md-5 text-left no-padding"> MBMF </div> <div class="col-md-5 text-right"> 350.00  </div>
                           <div class=" col-md-5 text-left no-padding">SINDA </div> <div class="col-md-5 text-right"> 1.50 </div>
                           <div class=" col-md-5 text-left no-padding"> ECF </div> <div class="col-md-5 text-right"> 1.50 </div>
                            <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> <b> Total </b> </div> <div class="col-md-5 text-right"> 21353.00 </div>
                            <div class="col-md-10 no-padding">  <hr> <hr> </div>
                       </div>
                   </div>
                 <div class="row mb-3">
                       <div class="col-md-5">
                           <h4 class="text-left"> <b> Salary Payout - Staff </b> </h4>
                             <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> Gross Salery  </div> <div class="col-md-5 text-right"> 20,000.00 </div>
                           <div class=" col-md-5 text-left no-padding"> CPF(Employee)  </div> <div class="col-md-5 text-right"> 500.00 </div>
                           <div class=" col-md-5 text-left no-padding"> CDAC  </div> <div class="col-md-5 text-right"> 500.00 </div>
                           <div class=" col-md-5 text-left no-padding"> MBMF  </div> <div class="col-md-5 text-right"> 350.00  </div>
                           <div class=" col-md-5 text-left no-padding">SINDA </div> <div class="col-md-5 text-right"> 1.50 </div>
                           <div class=" col-md-5 text-left no-padding"> ECF </div> <div class="col-md-5 text-right"> 1.50 </div>
                            <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> <b> Total </b> </div> <div class="col-md-5 text-right"> 21353.00 </div>
                            <div class="col-md-10 no-padding">  <hr> <hr> </div>
                       </div>
                   </div>
                      <div class="row mb-3">
                       <div class="col-md-5">
                           <h4 class="text-left"> <b> CPF Payout  </b> </h4>
                             <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> Director CPF - Employer Portion  </div> <div class="col-md-5 text-right"> 280.00 </div>
                           <div class=" col-md-5 text-left no-padding"> Staff CPF - Employer Portion  </div> <div class="col-md-5 text-right"> 3325.00 </div>
                           <div class=" col-md-5 text-left no-padding"> SDL  </div> <div class="col-md-5 text-right"> 500.00 </div>
                           <div class=" col-md-5 text-left no-padding"> CDAC  </div> <div class="col-md-5 text-right"> 500.00 </div>
                           <div class=" col-md-5 text-left no-padding"> MBMF </div> <div class="col-md-5 text-right"> 350.00  </div>
                           <div class=" col-md-5 text-left no-padding">SINDA </div> <div class="col-md-5 text-right"> 1.50 </div>
                           <div class=" col-md-5 text-left no-padding"> ECF </div> <div class="col-md-5 text-right"> 1.50 </div>
                            <div class=" col-md-5 text-left no-padding"> Director CPF - Employee Portion  </div> <div class="col-md-5 text-right"> 280.00 </div>
                           <div class=" col-md-5 text-left no-padding"> Staff CPF - Employee Portion  </div> <div class="col-md-5 text-right"> 3762.00 </div>
                            <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> <b> Total </b> </div> <div class="col-md-5 text-right"> 9000.00 </div>
                            <div class="col-md-10 no-padding">  <hr> <hr> </div>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <div class="col-md-5">
                           <h4 class="text-left"> <b> FWL Payout  </b> </h4>
                             <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> Being Payment made For FWl  </div> <div class="col-md-5 text-right"> 2000.00 </div>                          
                            <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> <b> Total</b> </div> <div class="col-md-5 text-right"> 2000.00 </div>
                            <div class="col-md-10 no-padding">  <hr> <hr> </div>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <div class="col-md-5">
                           <h4 class="text-left"> <b> Other Payout  </b> </h4>
                             <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> Reimbursement  </div> <div class="col-md-5 text-right"> 100.00 </div>
                           <div class=" col-md-5 text-left no-padding"> Deduction  </div> <div class="col-md-5 text-right"> -200.00 </div>
                           <div class=" col-md-5 text-left no-padding"> Director's Fee  </div> <div class="col-md-5 text-right"> 500.00 </div>
                            <div class="col-md-10 no-padding">  <hr> </div>
                           <div class=" col-md-5 text-left no-padding"> <b> Total</b> </div> <div class="col-md-5 text-right"> 400.00 </div>
                            <div class="col-md-10 no-padding ">  <hr> <hr> </div>
                       </div>
                   </div>
                </div>
            </div>

        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('click','.retrive',function(){
        var checked = $('input[name=setting]:checked').val();
      if(checked == "payout"){
        $('#payout').show();
        $('#individual').hide();
      }
      if(checked == "individual"){
         $('#individual').show();
          $('#payout').hide();
      }
        
    } )
  function validateForm() {
    var radios = document.getElementsByName("setting");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid) $('.display_setting').show();
    else $('.display_setting').hide(  );
    return formValid;
}
</script>