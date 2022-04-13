<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <style type="text/css">
      .p-0{
        padding: 0px;
      }
      .simple-pagination ul {
    margin: 0 0 20px;
    padding: 0;
    list-style: none;
}
      .simple-pagination li {
    display: inline-block;
    margin-right: 5px;
}
.simple-pagination li a, .simple-pagination li span {
    color: #666;
    padding: 2px 10px;
    text-decoration: none;
    border: 1px solid #d0d0d0;
    background-color: #FFF;
    box-shadow: 0px 0px 10px 0px #EEE;
}
    </style>
    <section class="content-header">
      <h1>
        <img src="<?= base_url('uploads/tie-users.png') ?>"> Employees
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
             <!--        <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div> -->
                </div><!-- /.box-header -->
                <form action="<?php echo base_url() ?>employees" method="POST" id="searchList">
                    <div class="container-fluid custom_container">
                  <div class="row">
                    <div class="col-md-12">
                      <label> Name :  </label> <input type="search" name="name" class="myInput" id="name_s"> <br> <br>
                      <div class="employee_check"><input type="checkbox" name="echeck"> <label class="agree_text"> Include employees who have left the company </label></div> <br> <br>
                      <input type="submit" class="btn btn-primary" name="Search" value="Search">
                      </div>
                    </div>                 
                  </div>
                </form> 
                  <br>
                    <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 button_group_hwe">
                      <a href="<?= base_url('addnewemployee') ?>">   <button class="btn btn-primary download_excel"> Add New Employee </button>   </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="<?= base_url('bulkuploademployees') ?>">   <button class="btn btn-primary download_excel">  Bulk Upload Employees </button>   </a>
                    </div>
                  </div>                 
                  </div>  <br>
                <div class="box-body table-responsive no-padding">  
                  <table class="table table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>ID</th>
                        <th >CPF Ready</th>
                    </tr>
                    </thead>
                    <tbody class="myTable">    
                    <?php
                        for ($i=1; $i <= 100 ; $i++) { 
                          if ($i == 2) {
                            $icon =  '<i class="fa fa-times text-danger">  </i>';
                          }else{
                             $icon = ' <i class="fa fa-check text-info">  </i>';
                          }
                         ?>
                            <tr>
                              <td> <a  href="<?= base_url('employeedetails') ?>">Employee<?= $i ?> </a>  </td>
                              <td> <span class="name">Employee1@gmail.com </span> <input type="email" name="" value="" style="display: none"> </td>
                              <td> 15 August 99 </td>
                              <td> M </td>
                              <td> S123456S </td>
                              <td> 
                               <?= $icon; ?>
                              </td>
                            </tr>
                       <?php }
                     ?>    
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
<script type="text/javascript">
 
  </script>
      <script type="text/javascript">
      jQuery(document).ready(function($){



          // Delete button clicked
      $(".myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(".myTable tr").filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      });
  </script>


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