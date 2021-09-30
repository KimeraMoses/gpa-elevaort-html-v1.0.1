


  </div>



<!--***Footer starts here***-->
<footer>

<!--DISCLAIMER-->
<div class="container-fluid text-center mb-10" id="gpa__disclaimer_wrapper">
    <i class="gpa__icon fa fa-exclamation-circle gpa__icon_disclaimer"></i><h1>Disclaimer</h1>
    <hr class="rule">
    <p>Please note that pastpapers might slightly be different in setting and format to the exams and tests that you are preparing for. The lecturers have all the rights to completely change the format and the questions to new ones(<b>Can be encountered but on rare occassions</b>) that have never appeared</p>
 
</div>
  

<!--connect-->
<div class="container-fluid" id="gpa__footer_wrapper">
  <div class="row text-center">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
        <?php if(is_active_sidebar('gpa__footer_1')){
            dynamic_sidebar('gpa__footer_1');} ?> 
      
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
        <?php if(is_active_sidebar('gpa__footer_2')){
            dynamic_sidebar('gpa__footer_2');} ?>
        
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          
          <?php if(is_active_sidebar('gpa__footer_3')){
            dynamic_sidebar('gpa__footer_3');
          } ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <h4>Campus Food</h4>
          <div class="gpa__campus_food_advert row text-center">
            <div class="col-12 gpa__campus_food_col_1">
              <h5> Save Your Time, Make Your Order Now!! </h5> 
            </div> <!--col-1-->
            <div class="col-12 gpa__campus_food_col_2">
              <img class= "gpa__campus_food_logo" src="<?php bloginfo('template_directory');?>/img/camp-food.png" alt="MUK" >
              <a href="http://gpaelevator.com/campus-food/" target="_blank" class="gpa__btn btn gpa__order_btn"> ORDER NOW </a>
            </div><!--col-2-->
            <div class="col-12 gpa__campus_food_col_3">
              <h5>Quick Deliveries to Your Lecture Room or Office </h5> 
            </div><!--col-3-->
          </div>
      </div>


  </div>

</div>


<!--copyright section-->
<div id="gpa__footer_copyright_wrapper" class="container-fluid">

  <div class="col-12">
    <h6>Copyright &copy; <script> document.write(new Date().getFullYear()) </script> All rights reserved by gpa elevator
    | Designed & Maintained by <a href="https://moxtechdevelopers.ga"><i>MOXTECH DEVELOPERS</i></a></h6>
  </div>
</div>

</footer>
<!--***Home-page Footer Ends here***-->
