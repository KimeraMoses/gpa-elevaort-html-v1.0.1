
<?php $university_information = get_field('university_information');?>
<?php $colleges = get_field('colleges');?>
<?php $university_links = get_field('university_links');?>

<?php if($colleges['university_title']=='MAKERERE UNIVERSITY'):?>
  <?php 
        $university_website = 'https://www.mak.ac.ug/11';
        $students_portal = 'https://student.mak.ac.ug/';
        $e_learning = 'https://muele.mak.ac.ug/';
        $admissions_portal = 'https://admissions.mak.ac.ug/';
        $scholarships = 'https://www.mak.ac.ug/admissions/fees-payment-and-funding';
      else: 
        $univ ='s' ?>
<?php endif;?>


<div class="gpa__college_sidebar_university_links_wrapper">
  <img id="gpa__college_sidebar_university_logo" src="<?php echo $university_links['university_logo'];?>"  alt="<?php echo $colleges['university_title'];?> logo"> <span>
    <strong><h3 class="gpa__sidebar_quick_links">Quick Links</h3></strong></span>
   <div class="gpa__sidebar_quick_links_wrapper">
              <ul class="gpa__quick_links_ul">
           <li class="gpa__college_sidebar_quick_link" id="link-item-first-child"><a href="<?php echo home_url();?>">Home Page</a></li>
           <li class="gpa__college_sidebar_quick_link"><a href="<?php echo $university_website;?>" target="_blank">University Website</a></li>
           <li class="gpa__college_sidebar_quick_link"><a href="<?php echo $students_portal;?>" target="_blank">Students Portal</a></li>
           <li class="gpa__college_sidebar_quick_link"><a href="<?php echo $e_learning;?>" target="_blank">e-Learning</a></li>
           <li class="gpa__college_sidebar_quick_link"><a href="<?php echo $admissions_portal;?>" target="_blank">Admissions Portal</a></li>
           <li class="gpa__college_sidebar_quick_link"><a href="<?php echo $scholarships;?>" target="_blank">Scholarships</a></li>
            
             </ul>
   </div>
</div>

<!-- 
https://www.mak.ac.ug/ 
https://student.mak.ac.ug/
https://muele.mak.ac.ug/
https://admissions.mak.ac.ug/
https://www.mak.ac.ug/admissions/fees-payment-and-funding
-->