<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <img src="<?= base_url('uploads/tie-user-single.png') ?>"> Employee Detail
      </h1>
    </section>
    <style type="text/css">
        .mb-3{
            margin-bottom: 15px;
        }
    </style>
    <section class="content">
    
        <div class="row">
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
        <form role="form" id="addUser" action="#" method="post" role="form">

             <div class="col-md-8">
                <div class="box box-primary">
                        <div class="row" style="padding-left: 10px">
                            <div class="col-md-2 text-center">
                                <h5 class="cpf_ready"> CPF <br> Ready </h5>
                                <p> <i class=" fa fa-check text-success"></i> </p>
                                <p class="text-danger"> Check all fields <br> marked with <b>CPF</b> </p>
                            </div>
                        </div>
                        <div class="box-body">
                            <h4> <b> Personal Detail </b> </h4>
                            <div class="row">
                                <div class="col-md-8">  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname"> Full Name <span style="color: red"> * </span> </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control required" value="Hr System" id="fname" name="fname" maxlength="128">
                                      
                                    </div>
                                </div>  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">DOB</label>
                                    </div>
                                    <div class="col-md-8"  style="position: relative;">
                                        <input type="text" class="form-control required date" value=""  name="dob" placeholder="dd-mm-yy"> 
                                          <i class="fa fa-calendar calendars"></i>
                                    </div>
                                    <div class="col-md-1">
                                        <i> CPF </i>
                                    </div>
                                </div>
                                    <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname"> Gender </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="radio" name="gender" checked > <label class="radio-btn">Male</label>
                                        <input type="radio" name="gender" > <label class="radio-btn">Female</label>
                                    </div>
                                </div>                                
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">ID Type </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control required" value="" id="fname" name="fname" maxlength="128">
                                    </div>
                                    <div class="col-md-1">
                                           <i> CPF </i>
                                    </div>
                                </div>  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname"> ID Number </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control required" value=" " id="fname" name="fname" maxlength="128">
                                    </div>
                                    <div class="col-md-1">
                                           <i> CPF </i>
                                    </div>
                                </div>                              
                                   <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Postal Code </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control required" value="" id="fname" name="fname" maxlength="128">
                                    </div>
                                </div>   
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                        <!-- /.box-body -->
                        <div class="col-md-8">
                <div class="box box-primary" style="border-top: none;">
                        <div class="box-body">
                            <h4> <b>Employment Detail</b> </h4>
                            <div class="row">
                                <div class="col-md-7">  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                       
                                    </div>
                                    <div class="col-md-9" style="display: block ruby;">
                                        <input type="checkbox" checked class="" value=""  name="fname" > <label class="agree_text"> Is Director </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" checked class="" value=""  name="fname" > <label class="agree_text"> Donation Fee Paid By Employer </label>
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname"> Work Email <span style="color: red"> * </span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control required" value="" id="fname" name="fname" maxlength="128">
                                    </div>
                                </div>  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">SPR Start Date</label>
                                    </div>
                                    <div class="col-md-8" style="position: relative;">
                                        <input type="text" class="form-control required date" value=""  name="spr_start-date" placeholder="dd-mm-yy">
                                        <i class="fa fa-calendar calendars"></i>
                                    </div>
                                    <div class="col-md-1">
                                          <i> CPF </i>
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">SPR CPF Rates </label>
                                    </div>
                                    <div class="col-md-8">
                                       <select class="form-control">  
                                        <option> 10 </option>
                                        <option> 20 </option>
                                        <option> 30 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                           <i> CPF </i>
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Foreign Worker Skill Level</label>
                                    </div>
                                    <div class="col-md-8">
                                          <select class="form-control">  
                                            <option> 10 </option>
                                            <option> 20 </option>
                                            <option> 30 </option>
                                         </select>
                                    </div>
                                    <div class="col-md-1">
                                            <i> CPF </i>
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Work Permit Issued Date </label>
                                    </div>
                                    <div class="col-md-8" style="position: relative;">
                                        <input type="text" class="form-control required date" value=""  name="spr_start-date" placeholder="dd-mm-yy">
                                        <i class="fa fa-calendar calendars"></i>
                                    </div>
                                    <div class="col-md-1">
                                            <i> CPF </i>
                                    </div>
                                </div> 
                                  <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Date Join</label>
                                    </div>
                                    <div class="col-md-8" style="position: relative;">
                                        <input type="text" class="form-control required date" value=""  name="spr_start-date" placeholder="dd-mm-yy">
                                        <i class="fa fa-calendar calendars"></i>
                                    </div>
                                </div>  
                                    <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Date Left</label>
                                    </div>
                                   <div class="col-md-8" style="position: relative;">
                                        <input type="text" class="form-control required date" value=""  name="spr_start-date" placeholder="dd-mm-yy">
                                        <i class="fa fa-calendar calendars"></i>
                                    </div>
                                </div>  
                                    <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Donation Type</label>
                                    </div>
                                    <div class="col-md-8">
                                      <select class="form-control">  
                                            <option> one </option>
                                            <option> two </option>
                                            <option> three </option>
                                         </select>
                                    </div>
                                    <div class="col-md-1">
                                           <i> CPF </i>
                                    </div>
                                </div>   
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                        <!-- /.box-body -->
                        <div class="col-md-8">
                <div class="box box-primary"  style="border-top: none;">
                        <div class="box-body">
                            <h4> <b> Monthly Default Payroll Items</b> </h4>
                            <h5> Setup monthly recurring salary items </h5>
                            <div class="row ">
                                <div class="col-md-11">  
                                    <button> Add New Item </button>
                                    <table class="table"> 
                                        <tr>
                                            <th> Payroll Item Type </th>
                                            <th> Amount </th>
                                            <th> Remarks </th>
                                        </tr>
                                        <tr>
                                            <td class="star_case"><span class="star"> * </span> <select class="form-control"> <option> Monthly Salery </option> </select> </td>
                                            <td class="star_case"> <span  class="star"> * </span> <input class="form-control" type="text" name="" value="5400.00"> </td>
                                            <td style="position: relative;"> <input class="form-control" type="text" name="">  <i class="fa fa-minus minus"> </i> </td>
                                        </tr>
                                        <tr>
                                            <td class="star_case"><span  class="star"> * </span> <select class="form-control"> <option> Transport Allowance </option> </select> </td>
                                            <td class="star_case"> <span  class="star"> * </span><input class="form-control" type="text" name="" value="5400.00"> </td>
                                            <td style="position: relative;"> <input class="form-control" type="text" name="">  <i class="fa fa-minus minus"> </i> </td>
                                        </tr>
                                        <tr>
                                            <td class="star_case"> <span  class="star"> * </span> <select class="form-control"> <option> Employee CPF (Additional Wages) </option> </select>  </td>
                                            <td class="star_case"> <span  class="star"> * </span> <input class="form-control" type="text" name="" value="5400.00"> </td>
                                            <td style="position: relative;"> <input class="form-control" type="text" name="">  <i class="fa fa-minus minus"> </i> </td>
                                        </tr>
                                    </table>   
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Save" />
                          
                        </div>                   
                </div>
            </div>
             <div class="col-md-8">
                <div class="bg-white">
                <h4> <b> Explanation </b> </h4>
                <div class="row">
                    <div class="col-md-2">
                        <h4 class="mt-0"> <b> Work Email </b> </h4>
                    </div>
                    <div class="col-md-7">
                        <p> This will be used to for login purposes (where applicable). Payslips will also be send to this email address. </p>
                    </div>
                </div>
                </div>
            </div>
                 </form>
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
<style type="text/css">
    .star_case{
        position: relative;
    }
    .star{
            color: red;
    position: absolute;
    left: -2px;
    top: 17px;
    font-size: 18px
    }
    .cln{
    position: absolute;
    right: 2px;
    top: 10px;
    font-size: 18px
    }
</style>