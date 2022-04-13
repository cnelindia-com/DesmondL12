<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <img style="width: 30px" src="<?= base_url('uploads/upload-user.png') ?>"> Bulk Upload Employees
      </h1>
    </section>
    <style type="text/css">
        .mb-3{
            margin-bottom: 15px;
        }

        .table tr:nth-child(even) {
            background: #fff;
        }

    </style>
    <section class="content">
    
        <div class="row mb-3">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <p  style="padding-left: 10px"> Download an  <a href="javascript:void(0)" class="download_sample" title="click to download sample"><b>  Excel File Sample </b> </a> and fill it up with your employees’ details </p>
                   
                    <form role="form" id="addUser" action="javascript:void(0)" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">  
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="fname">Upload Excel File : </label>
                                    </div>
                                    <div class="col-md-6">
                                       <input type="file" name="" class="form-control">
                                    </div>
                                </div>  
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
    
                        <div class="box-footer" style="border:none">
                            <input type="submit" class="btn btn-primary mr-30" value="Upload File" />
                            <input type="submit" class="btn btn-primary" value="Confirm Records" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="error_section">
                        <h4> <b> Errors Detected </b> </h4>
                        <p class="text-danger"> <b> Excel row 2: Missing Full Name </b> </p>
                        <p class="text-danger"> <b> Excel row 4: Missing Email </b> </p>
                        <p class="text-danger"> <b> Excel row 2: Missing Invalid Email </b> </p>
                        <p class="text-danger"> <b> Excel row 2: Missing Full Name </b> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <div class="container-fluid sample" style="padding-left: 0px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive"> 
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>  Full Name </th>
                                    <th style="width: 80px;">  DOB </th>
                                    <th>  ID Type </th>
                                    <th>  ID Number </th>
                                    <th>  Email </th>
                                    <th>  SPR Start Date </th>
                                    <th>  Foriegn Worker Skill Lavel </th>
                                    <th>  Date Joined </th>
                                    <th>  Donation Type </th>
                                    <th style="text-align: right;">  Monthly Salery </th>
                                    <th style="text-align: right;">  Transport Allowance </th>
                                    <th style="text-align: right;">  Meal Allowance </th>
                                    <th style="text-align: right;">  Housing Allowance </th>
                                    <th>  Is Director </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    for ($i=1; $i <= 10; $i++) { ?>
                                <tr> 
                                    <td> Peter Lim </td>
                                    <td> 12 Jun 98 </td>
                                    <td> NRIC </td>
                                    <td> N124587C </td>
                                    <td> Peter@gmail.com </td>
                                    <td> 9 March 14 </td>
                                    <td> Heigher Skilled </td>
                                    <td> 1 April 18 </td>
                                    <td> MBMF </td>
                                    <td style="text-align: right;"> 2000.00 </td>
                                    <td style="text-align: right;"> 200.00 </td>
                                    <td style="text-align: right;"> 100.00 </td>
                                    <td style="text-align: right;"> 500.00 </td>
                                    <td> Yes </td>
                            </tr>
                                <?php  }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('click','.download_sample',function(){
        $('.sample').show();
    })
</script>