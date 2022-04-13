<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <img  src="<?= base_url('uploads/payroll.png') ?>"> Payroll
      </h1>
    </section>
    <style type="text/css">
        .mb-3{
            margin-bottom: 15px;
        } 
        .mb-45{
            margin-bottom: 45px;
        }
         .mb-0{
            margin-bottom: 0px !important;
        }
        .py-20{
            padding: 0px 20px !important;
        }
        .calendarss {
            position: relative;
            left: -30px;
        }
    </style>
    <section class="content">
    
        <div class="row" id="step-1">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="#" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">  
                               <!--   <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4 no-padding ">
                                          <h4> <b> Payroll </b> </h4>
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <div class="col-md-3 text-right">
                                        <label for="fname">Month <span style="color: red"> * </span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option> January </option>
                                            <option selected> February </option>
                                            <option> March </option>
                                            <option> April </option>
                                            <option> May </option>
                                            <option> Jun </option>
                                            <option> July </option>
                                            <option> August </option>
                                            <option> September </option>
                                            <option> October </option>
                                            <option> November </option>
                                            <option> December </option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="row mb-3">
                                    <div class="col-md-3 text-right">
                                        <label for="fname">Year <span style="color: red"> * </span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control">
                                           <option> 2000 </option>
                                           <option> 2001 </option>
                                           <option> 2002 </option>
                                           <option> 2003 </option>
                                           <option> 2004 </option>
                                           <option selected> 2021 </option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4">
                                         <input type="button" class="btn btn-primary retrive" value="Retrive Records"/>
                                    </div>
                                </div>
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 show_data" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center p-0 mt-3 mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2 id="heading" style="margin-bottom: 50px;">February 2021</h2>                                  
                                    <form id="msform" action="javascript:void(0)">
                                        <!-- progressbar -->
                                        <ul id="progressbar" style="width: 70%; margin: 50px auto;">
                                            <li id="account"></li>
                                            <li id="personal"></li>
                                            <li id="payment"></li>
                                        </ul><!-- fieldsets -->
                                        <fieldset>
                                            <input type="button" name="previous" class=" action-button-previous btn-secondary" style="border:none;" value="Previous" disabled>
                                            <input type="button" name="next" class="next action-button btn-secondary border-1" value="Next" disabled="">
                                            <div class="box-borders">    </div>
                                            <div class="container-fluid mb-3" id="no-payroll">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4> <b class="text-danger"> No payroll records has been generated for February 2021 yet. </b> </h4>
                                                    </div>
                                                    <div class="col-md-12"> <button class="btn btn-success generate_payroll" style="padding:10px;font-size: 24px;">  Generate Payroll </button> </div>
                                                </div>
                                            </div>
                                            <section class="draft_section" style="display: none; border:1px solid #000;padding-top: 10px">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-6 text-left"> <button class="border-1 btn-danger p-10" > Delete All Pay Items  </button> </div>
                                                    <div class="col-md-6 text-right savedraft"> <button class="border-1 btn-success p-10" > Save Draft </button></div>
                                                </div>
                                            </div>
                                            <div class="container-fluid append">
                                                <h4 class="text-left"> John Tan <i style="margin-left:100px;color: #3c8cbc;  position: absolute; left: 80px;" class="fa fa-plus clicktoappend"></i> </h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option> Monthly Salary </option> </select>  </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="2500.00"> </div>
                                                    <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                                 <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option>   Employee CPF (Additional Wages) </option> </select>  </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="500.00"> </div>
                                                    <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                                 <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option>   Loans </option> </select>   </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="2500.00"> </div>
                                                     <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                                <div class="row"> <div class="col-md-12"> <hr> </div> </div>
                                            </div>
                                             <div class="container-fluid">
                                                <h4 class="text-left"> Selene Geh  <i style="margin-left:100px;color: #3c8cbc; position: absolute; left: 80px;" class="fa fa-plus clicktoappend"></i></h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-12 text-left">  <b class="text-danger nopayitems"> <i> No Pay Items created yet </i> </b> </div>
                                                   
                                                </div>
                                                <div class="row"> <div class="col-md-12"> <hr> </div> </div>
                                            </div>
                                             <div class="container-fluid">
                                                <h4 class="text-left">  Tan Gee   <i style="margin-left:100px;color: #3c8cbc; position: absolute; left: 80px;" class="fa fa-plus clicktoappend"></i></h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option>    Monthly Salary </option> </select>   </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="2500.00"> </div>
                                                    <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                                 <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option>   Transport Allowance </option> </select>   </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="500.00"> </div>
                                                     <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                                 <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option>   Housing Allowance </option> </select>   </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="500.00"> </div>
                                                    <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                                 <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option>   Meal Allowance </option> </select>  </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="500.00"> </div>
                                                   <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                                 <div class="row mb-3">
                                                    <div class="col-md-4 mb-5"> <select class="form-control"> <option>    Loans </option> </select>   </div>
                                                    <div class="col-md-2 mb-5"> <input class="form-control" type="text" name="" value="2500.00"> </div>
                                                     <div class="col-md-3 mb-5"> <input class="form-control" type="text" name=""> </div>
                                                    <div class="col-md-2">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>
                                                    <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div>
                                                </div>
                                            </div>
                                            </section>
                                        </fieldset>
                                        <fieldset>                          
                                            <input type="button" name="previous" class="previous action-button-previous btn-primary" value="Previous" />
                                             <input type="button" name="next" class="next action-button btn-primary" value="Next" /> 
                                         <div class="box-borders">  
                                        </div>
                                             <div class="container-fluid box-border">
                                                 <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                     <div class="col-md-10">
                                                        <h4 class="text-left"> <b> John Tan </b> </h4><hr>
                                                        <h5 class="text-left"> <b> Salary </b> </h5>
                                                        <hr>
                                                        <div class="col-md-4 no-padding text-left"> Monthly Salary : </div> <div class="col-md-2 text-right"> 2000.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <div class="col-md-4 no-padding text-left">Employee CPF (Additional Wages) : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <div class="col-md-4 no-padding text-left"> Loans : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <div class="col-md-4 no-padding text-left"> Employee Contribution : </div> <div class="col-md-2 text-right"> 350.00  </div> <div class="col-md-6 text-left" style="padding: 0px;"><span> based on 17% </span></div>
                                                        <div class="col-md-4 no-padding text-left"> CDAC: </div> <div class="col-md-2 text-right"> 1.50 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <hr> 
                                                        <div class="col-md-4 no-padding text-left"> Take Home: </div> <div class="col-md-2 text-right"> 1648.50 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <hr> <hr> 
                                                     </div>                                                   
                                                 </div>
                                                  <div class="row mb-3">
                                                       <div class="col-md-1"></div>
                                                     <div class="col-md-10">
                                                         <h5 class="text-left"> <b> Other Items </b> </h5> <hr>
                                                         <div class="col-md-4 no-padding text-left"> Employee Contribution : </div> <div class="col-md-2 text-right"> 410.00  </div><div class="col-md-6 text-left" style="padding: 0px;"><span> based on 20% </span></div>
                                                         <div class="col-md-4 no-padding text-left"> SDF : </div> <div class="col-md-2 text-right"> 1.48 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <hr>
                                                     </div>
                                                 </div>
                                                  <div class="row"> <div class="col-md-12"> <hr style="width: 90%;border:1px solid #656565; margin-left: 5%;"> </div> </div>
                                                  <div class="row mb-3">
                                                      <div class="col-md-1"></div>
                                                     <div class="col-md-10">
                                                        <h4 class="text-left"> <b> Tan Gee </b> </h4><hr>
                                                        <h5 class="text-left"> <b> Salary </b> </h5>
                                                        <hr>
                                                        <div class="col-md-4 no-padding text-left"> Monthly Salary : </div> <div class="col-md-2 text-right"> 2000.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <div class="col-md-4 no-padding text-left">Trannsport Allowance : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <div class="col-md-4 no-padding text-left"> Meal Allowance : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <div class="col-md-4 no-padding text-left"> Housing Allowance : </div> <div class="col-md-2 text-right"> 350.00  </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <div class="col-md-4 no-padding text-left"> Over time: </div> <div class="col-md-2 text-right"> 1.50 </div><div class="col-md-6 text-left" style="padding: 0px;"><span> 5 Hours </span></div>
                                                        <div class="col-md-4 no-padding text-left"> No Pay Leave : </div> <div class="col-md-2 text-right"> 1.50  </div><div class="col-md-6 text-left" style="padding: 0px;"><span> 2 Days </span></div>
                                                        <hr> 
                                                        <div class="col-md-4 no-padding text-left"> Take Home: </div> <div class="col-md-6 text-left"> 1648.50 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                        <hr><hr> 
                                                     </div>
                                                 </div>
                                                  <div class="row mb-3">
                                                       <div class="col-md-1"></div>
                                                     <div class="col-md-10">
                                                         <h5 class="text-left"> <b> Other Items </b> </h5> <hr>
                                                         <div class="col-md-4 no-padding text-left"> FWL : </div> <div class="col-md-2 text-right"> 400.00  </div><div class="col-md-6 text-left" style="padding: 0px;"><span> Tier 2 </span></div>
                                                         <div class="col-md-4 no-padding text-left"> SDF : </div> <div class="col-md-2 text-right"> 1.48 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <hr>
                                                     </div>
                                                 </div>
                                             </div>
                                        </fieldset>
                                        <fieldset>                                           
                                             <input type="button" name="previous" class="previous action-button-previous btn-primary" value="Previous" />  
                                              <input type="button" name="next" class=" action-button btn-secondary" style="border:none;" value="Next" disabled="">
                                               <div class="box-borders">    </div>                                          
                                                <div class="container-fluid">
                                                    <div class="row mb-3 text-center">
                                                        <div class="col-md-6  text-left paysummary" style=" height: 200px; padding-left: 0px;">
                                                            <div class="border-1 py-20" style=" height: 100%;">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12">
                                                                        <h4 class="text-left"> <b> Summary </b> </h4><hr>
                                                                        <div class="col-md-8 no-padding text-left"> <b>  <a href="<?= base_url('takehomepay') ?>"> Take Home Pay </a> </b> </div> <div class="col-md-4  text-right"> 20,000.00 </div>
                                                                        <div class="col-md-8 no-padding text-left"> <b>    <a href="<?= base_url('fwl') ?>"> Foreign Worker Levy </a> </b> </div> <div class="col-md-4 text-right"> 1900.00 </div>
                                                                        <div class="col-md-8 no-padding text-left"> <b>   <a href="<?= base_url('cpfdetails') ?>"> CPF Grand Total </a> </b>  </div> <div class="col-md-4 text-right"> 1648.50 </div>
                                                                        <hr> 
                                                                        <div class="col-xs-8 no-padding text-left"> <b> Total Employment Costs </b>  </div> <div class="col-xs-4 text-right"> 1648.50 </div>
                                                                        <hr><hr>                                                        
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-6 text-left Payoutdate" style="height: 200px; padding-right: 0px;"> 
                                                            <div class="border-1 py-20" style="height: 100%;">
                                                            <h4 class="mb-5" style="flex">  <span> Payout  Date </span> <input style="width: 170px; height: 33px;" class="date" type="text" name="" placeholder="dd-mm-yy"> <i class="fa fa-calendar calendarss"></i> <input style="margin-bottom: 6px;" type="submit" class="btn btn-success" name="" value="Save"> <span style="font-size: 20px;" title="This date will be printed onto the Payslips. This information is mandated by MOM Singapore"> ? </span> </h4>
                                                            <a href="#"> Email Payslips To Employees </a>
                                                            <p class="mb-0">  <a href="javascript:void(0)"> CPF Submission Files </a> </p>
                                                            <p>  <a href="javascript:void(0)">Summary PDF File </a> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 <!--    <div class="row mb-3">
                                                     <div class="col-md-9">
                                                         <h4 class="text-left"> <b> Summary </b> </h4>
                                                         <div class="col-md-5 text-left"> <b> Total Employee Take home Pay : </b> </div> <div class="col-md-4 no-padding text-right"> 20,000.00 </div>
                                                         <div class="col-md-4 no-padding text-left"> <b> Foreign Worker Levy : </b> </div> <div class="col-md-5 text-right"> 1900.00 </div>
                                                         <div class="col-md-12 text-left"> CPF  </div> <hr>
                                                         <div class="col-md-4 no-padding text-left">Total CPF </div> <div class="col-md-5 text-right"> 500.00 </div>
                                                         <div class="col-md-4 no-padding text-left"> Total SDL  </div> <div class="col-md-5 text-right"> 500.00 </div> <div class="col-md-3 text-left">Forigner SDL $48   </div>
                                                         <div class="col-md-4 no-padding text-left"> Total MBMF  </div> <div class="col-md-5 text-right"> 350.00 </div> <div class="col-md-3 text-left">1 Pax  </div>
                                                         <div class="col-md-4 no-padding text-left">Total CDAC </div> <div class="col-md-5 text-right"> 1.50</div> <div class="col-md-3 text-left">5 Pax  </div>
                                                         <div class="col-md-4 no-padding text-left"> Total SINDA </div> <div class="col-md-5 text-right"> 1.50  </div> <div class="col-md-3 text-left">2 Pax  </div>
                                                         <div class="col-md-4 no-padding text-left"> Total ECF </div> <div class="col-md-5 text-right"> 1.50 </div>
                                                       <hr> 
                                                         <div class="col-md-4 no-padding text-left"> <b> CPF Grand Total </b>  </div> <div class="col-md-5 text-right"> 1648.50 </div>
                                                           <hr> <hr>                                                        
                                                     </div>
                                                 </div>
                                                  <div class="row mb-3 border-1" style="width: 336px">
                                                              <div class="col-md-6"> <b> Total Employment Cost </b> </div>
                                                              <div class="col-md-3"> <b> 23548.00 </b> </div>
                                                   </div> -->
                                                </div>
                                                <div class="container-fluid border-1">
                                                 <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <h4 class="text-left"> <b> John Tan </b> </h4>
                                                            <h5 class="text-left"> <b> Salary </b> </h5>
                                                            <hr>
                                                            <div class="col-xs-4 no-padding text-left"> Monthly Salary : </div> <div class="col-md-2 text-right"> 2000.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                            <div class="col-xs-4 no-padding text-left">Trannsport Allowance : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                            <div class="col-xs-4 no-padding text-left"> Loans : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                            <div class="col-xs-4 no-padding text-left"> Employee Contribution : </div> <div class="col-md-2 text-right"> 350.00  </div> <div class="col-md-6" style="padding: 0px; text-align: left;"><span> based on 17% </span></div>
                                                            <div class="col-xs-4 no-padding text-left"> CDAC: </div> <div class="col-md-2 text-right"> 1.50 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                            <hr>
                                                            <div class="col-xs-4 no-padding text-left"> Take Home: </div> <div class="col-md-2 text-right"> 1648.50 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                            <hr><hr> 
                                                        </div>                                                   
                                                 </div>
                                                  <div class="row mb-3">
                                                     <div class="col-md-1"></div>
                                                     <div class="col-md-10">
                                                         <h5 class="text-left"> <b> Other Items </b> </h5> <hr>
                                                         <div class="col-xs-4 no-padding text-left"> Employee Contribution : </div> <div class="col-md-2 text-right"> 410.00  </div><div class="col-md-6" style="padding: 0px; text-align: left;"><span> based on 20% </span></div>
                                                         <div class="col-xs-4 no-padding text-left"> SDF : </div> <div class="col-md-2 text-right"> 1.48 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <hr>
                                                     </div>
                                                 </div>
                                                 <hr style="height: 1px;background: #000;"> 
                                                  <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                     <div class="col-md-10">
                                                         <h4 class="text-left"> <b> Tan Gee </b> </h4>
                                                         <h5 class="text-left"> <b> Salary </b> </h5> <hr>
                                                         <div class="col-xs-4 no-padding text-left"> Monthly Salary : </div> <div class="col-md-2 text-right"> 2000.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <div class="col-xs-4 no-padding text-left">Trannsport Allowance : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <div class="col-xs-4 no-padding text-left"> Meal Allowance : </div> <div class="col-md-2 text-right"> 500.00 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <div class="col-xs-4 no-padding text-left"> Housing Allowance : </div> <div class="col-md-2 text-right"> 350.00  </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <div class="col-xs-4 no-padding text-left"> Over time: </div> <div class="col-md-2 text-right"> 1.50 </div><div class="col-md-6" style="padding: 0px; text-align: left;"><span> 5 Hours </span></div>
                                                         <div class="col-xs-4 no-padding text-left"> No Pay Leave : </div> <div class="col-md-2 text-right"> 1.50  </div><div class="col-md-6" style="padding: 0px; text-align: left;"><span> 2 Days </span></div>
                                                         <hr> 
                                                         <div class="col-xs-4 no-padding text-left"> Take Home: </div> <div class="col-md-2 text-right"> 1648.50 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                           <hr> <hr> 
                                                     </div>
                                                 </div>
                                                  <div class="row mb-3">
                                                     <div class="col-md-1"></div>
                                                     <div class="col-md-10">
                                                         <h5 class="text-left"> <b> Other Items </b> </h5> <hr>
                                                         <div class="col-xs-4 no-padding text-left"> FWL : </div> <div class="col-md-2 text-right"> 400.00  </div><div class="col-md-6" style="padding: 0px; text-align: left;"><span> Tier 2 </span></div>
                                                         <div class="col-xs-4 no-padding text-left"> SDF : </div> <div class="col-md-2 text-right"> 1.48 </div> <div class="col-md-6" style="opacity: 0;">0</div>
                                                         <hr>
                                                     </div>
                                                 </div>
                                             </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<style type="text/css">

@media only screen and (max-width: 991px){
    .paysummary{
        height: auto !important;
        margin-bottom: 1rem;
        padding-right: 0px !important;
    }

    .Payoutdate{
        padding-left: 0px !important;
    }
}

@media only screen and (max-width: 767px){

    #progressbar{
        display: flex;
        padding-left: 15px;
    }

    .savedraft{
        margin-top: 1rem;
        text-align: left;
    }

    .paysummary{
        height: auto !important;
        margin-bottom: 1rem;
        padding-right: 0px !important;
    }

    .Payoutdate{
        padding-left: 0px !important;
    }

}

#heading {
    text-transform: uppercase;
    color: #3c8cbc;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative;
}



#msform fieldset:not(:first-of-type) {
    display: none
}



#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #3c8cbc;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    font-weight: bold;
    color: white;
   border: none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
        position: absolute;
    right: 17px;
    top: 0px;
}

#msform .action-button-previous {
    width: 100px;
    font-weight: bold;
    color: white;
    border: none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
        position: absolute;
    left: 17px;
    top: 0px;
}


.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #3c8cbc;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #3c8cbc;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #3c8cbc
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 20%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    content: "1. Draft";
      font-weight: bold;
}

#progressbar #personal:before {
    content: "2. Review";
   font-weight: bold;
       margin: auto;
}
#progressbar #personal{
    margin: 0px 17.9%;
}
#progressbar #payment:before {
    content: "3. Finalized";
    float:right;
    font-weight: bold;
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c";
}

#progressbar li:before {
    width: 100%;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #9e9e9e;
    background: lightgray;
    padding: 2px
}
#progressbar li#personal:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: -100%;
    top: 25px;
    z-index: -1
}
#progressbar li#payment:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: -100%;
    top: 25px;
    z-index: -1
}


#progressbar li#personal.active:after{
    background: #00a65a;
    color:#fff;
}
#progressbar li#payment.active:after{
    background: #00a65a;
    color:#fff;
}
#progressbar li.active:before {
     background: #00a65a;
    color: #fff;
}
.progress {
    height: 20px;
}

.progress-bar {
    background-color: #3c8cbc
}

.fit-image {
    width: 100%;
    object-fit: cover
}
.active-border{
    border:3px solid yellow;
}

</style>
<script type="text/javascript">
    $(document).ready(function(){
$('.generate_payroll').click(function(){
    $('.draft_section').show();
    $('.box-borders').show();
    $('.next').show();
    $('.next').removeClass('btn-secondary');
    $('.next').addClass('btn-primary');
    $('.next').attr('disabled',false);
    $('#no-payroll').hide();
    $('#account').addClass('active');
    $('#account').addClass('active-border');
})
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);
// $("#progressbar li").eq($("fieldset").index(current_fs)).addClass("active");
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass('active-border');
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass('active-border');

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass('active-border');
$("#progressbar li").eq($("fieldset").index(previous_fs)).addClass('active-border');

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});

$(document).on('click','.retrive',function(){
    $('#step-1').hide();
    $('.show_data').show();
})
$(document).on('click','.remove',function(){
   var leng = $(this).parent('div').parent('div').parent('div').find('.row').length;  
if(leng == 1){
   $(this).parent('div').parent('div').parent('div').append('<div class="row mb-3"> <div class="col-md-4 ">  <b class="text-danger nopayitems"> No Pay items created yet </b> </div>   </div>');
}
   $(this).parent('div').parent('div').remove();
})
$(document).on('click','.clicktoappend',function(){
    $(this).parent('h4').next('div').find('.nopayitems').hide();
    $(this).parent('h4').parent('div').append('<div class="row mb-3">   <div class="col-md-4"> <select class="form-control"> <option> Monthly Salary </option>  <option> Loan </option> <option> Transport Allowance </option> <option> Housing Allowance </option> <option> Meal Allowance </option> </select>   </div>   <div class="col-md-2"> <input class="form-control" type="text" name="" value=""> </div>  <div class="col-md-3"> <input class="form-control" type="text" name=""> </div>  <div class="col-md-3">  <input type="checkbox" name=""> <span> Repeat Monthly </span> </div>  <div class="col-md-1"> <i  class="fa fa-times remove"></i> </div> </div>');
})

</script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>