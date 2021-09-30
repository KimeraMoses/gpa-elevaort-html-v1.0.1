<?php $current_course_unit_info = get_field('current_course_unit');?>
<?php $colleges = get_field('colleges');?>

<div class="row gpa__breadcrumb_section_wrapper">

<div class="col-12 gpa__universiity_title_wrapper "> 
  <h3 class="gpa__university_title"><?php echo $colleges['university_title'];?> </h3>
</div>
<?php //get_template_part('/woocommerce/single-product');?>
<div class="col-12 gpa__breadcrumb_navigation_wrapper text-center">
    <h6 class="gpa__breadcrumb_navigation_item"><i class="fas fa-home gpa__icon_nav "></i><b class="gpa__elevator_pages_nav_item"><a href="<?php echo home_url();?>">Home</a></b>
    <i class="gpa__icon_nav fas fa-angle-double-right"></i><b class="gpa__elevator_pages_nav_item"><a href="<?php echo $colleges['university_link'];?>"><?php echo $colleges['university_title_abreviation'];?></a></b>

<i class="gpa__icon_nav fas fa-angle-double-right"></i><b class="gpa__elevator_pages_nav_item"><a <?php if($colleges['college_link']):?> href="<?php echo $colleges['college_link'];?> " <?php endif;?>>
    <?php if($colleges['college_title_abreviation']):
       echo $colleges['college_title_abreviation']; 
     else:
      echo $colleges['college_title'];?>
    <?php endif;?></a></b>

    <?php if($current_course_unit_info['current_course_unit_code']):?>
    <i class="gpa__icon_nav fas fa-angle-double-right"></i><b class="gpa__elevator_pages_nav_item"><a class="gpa__current_link"><?php echo $current_course_unit_info['current_course_unit_code'];?></a></b></h6>
    <?php endif;?>
  </div>
</div>