<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-comments-o"></i>FEEDBACK
      </h1>
    </section>
    <style type="text/css">

.mb-3{
    margin-bottom: 15px;
}
.star-container {
  display: flex;
  width: 350px;
  flex-direction: row-reverse;
}

.star {
}

.star:before {
  content: "\f005";
  font-family: fontAwesome;
  font-size: 30px;
  position: relative;
  display: block;
  color: #aaa;
  margin:0px 15px;
}

.star:after {
  content: "\f005";
  font-family: fontAwesome;
  position: absolute;
  top: 63px;
  font-size: 30px;
  color: gold;
  opacity: 0;
    margin:0px 15px;
}
.star:hover:after,
.star:hover ~ .star:after,
.star.star__checked:after,
.star.star__checked ~ .star:after{
  opacity: 1;
}


    </style>
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 feddback_form">
              <!-- general form elements -->
                <div class="box box-primary">
                   <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="addUser" action="<?=base_url('feedback') ?>" method="post" role="form">
                    
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">
                                <input type="hidden" name="star" id="starid" value=""/>
                                    <h2> How would you rate our system? </h2>
                                        <div class="star-container" id="input">
                                        <div class="star" id="5"></div>
                                        <div class="star" id="4"></div>
                                        <div class="star" id="3"></div>
                                        <div class="star" id="2"></div>
                                        <div class="star" id="1"></div>
                                      </div>

                                      
                                    <div class="form-group">
                                        <label class="my-3"> Feedback </label>
                                        <textarea class="form-control" rows=6 required="" name="textarea">  </textarea>
                                    </div>
                                     <div class="form-group">
                                        <label class="my-3"> Feature Request  </label>
                                        <textarea class="form-control" rows=6 name="textarea_1">  </textarea>
                                        
                                    </div>
                                </div>
                            </div> 
                        </div><!-- /.box-body -->    
                        <div class="box-footer" style="border: none;">
                            <input type="submit" class="btn btn-primary submit" value="Submit" name="feedback"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 success_msg" style="display: none; border: 2px solid #dbdbdb; padding: 40px 30px;">
                    <h3> <b> Thank you! Your feedback has been submitted. </b> </h3>
            </div>
        </div>    
    </section>
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('submit','#addUser',function(){
        $('.feddback_form').hide();
        $('.success_msg').show(slow);
    })
    $(document).on('click','.submit',function(){
        $('.success_msg').show();
    })
    let stars = document.querySelectorAll(".star");
document.querySelector(".star-container").addEventListener("click", starRating);
let rating = document.querySelector(".rating");

function starRating(e) {
  stars.forEach((star) => star.classList.remove("star__checked"));
  const i = [...stars].indexOf(e.target);
  if (i > -1) {
    stars[i].classList.add("star__checked");
    rating.textContent = `${stars.length - i}/5`;
  } else {
    rating.textContent = `${0}/5`;
  }
}
</script>
<script>
  jQuery(document).ready(function(){
jQuery(".star").click(function(){
  
//  var form =$(this).val().lengt; // $('#subject').val().lengt
var mystr = $(this).attr("id");
//  alert(mystr);
 $("#starid").val(mystr);

});
});

</script>