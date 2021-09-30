
<?php 

$colleges = get_field('colleges');

$course_name = get_field('course_name');

$current_course_unit_info = get_field('current_course_unit');

?>

<strong><h1 class="gpa__college_title"> <?php echo $colleges['college_title'];?>(<?php echo $colleges['college_title_abreviation'];?>) </h1></strong>

<h4 class="gpa__course_name"><b> <?php echo $course_name;?></b> </h4>
<strong><h3 class="gpa__courseunit_name"> <?php echo $current_course_unit_info['current_course_unit_code'];?>:<?php echo $current_course_unit_info['current_course_unit_name'];?></h3></strong>
<hr class="gpa__horizontal_rule">