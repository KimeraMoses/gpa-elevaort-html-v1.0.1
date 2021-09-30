<?php
/**
* Template Name: College Template
 */


get_header(); ?>


<?php 

/**** VARIABLES HAVING ACF FIELD *******/
      $colleges = get_field('colleges');
      $school_department = get_field('school_department');
      $school = get_field('school');

/**** CALLING THE BREADCRUMB TEMPLATE*******/
      get_template_part('/template-parts/gpa-breadcrumb');
?>


<div class="container-fluid gpa__content_main_mobile">
  <div class="row text-center">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" id="gpa__college_display_area" >

        <div class="gpa__college_content_section gpa__main_content_area">
          <strong><h1 class="gpa__college_title"><?php echo $colleges['college_title'];?>
          <?php if($colleges['college_title_abreviation']):?>(<?php echo $colleges['college_title_abreviation'];?>)<?php endif;?></h1></strong>


          <?php if( have_rows('school') ): ?><!--*** School Start ***-->
            
            <?php while( have_rows('school') ): the_row(); 

              // vars
              $school_name = get_sub_field('school_name');

              ?>
              <?php if($school_name):?>
                <div class="gpa__college_school_title_container">     
                <h2 class="gpa__college_school_title"><b> <?php echo $school_name;?></b> </h2>   
                </div> 
              <?php endif;?>

              <?php if( have_rows('school_department') ): ?><!--*** Department Start ***-->
            
                <?php while( have_rows('school_department') ): the_row(); 

                  // vars
                  $department_name = get_sub_field('department_name');

                  ?>
                  <?php if($department_name):?>
                      <strong><h3 class="gpa__school_dept_name">  <?php echo $department_name;?> </h3></strong>
                  <?php endif;?>
                  <div class="gpa__school_dept_course_wrapper"> <!--start course div-->

                  <?php if( have_rows('department_course') ): ?><!--*** Course Start ***-->
                    
                       <ul class="gpa__dept_course_ul"> <!--start Course  ul-->
            
                    <?php while( have_rows('department_course') ): the_row(); 

                      // vars
                      $course_name = get_sub_field('course_name');
                      $course_code= get_sub_field('course_code');

                      ?>
                  
                      <li class="gpa__dept_course_li"><!--start Course  li-->
                      <input type="checkbox" class="gpa__course_checkbox" id="<?php echo $course_code;?>" autocomplete="off" >
                      <label for="<?php echo $course_code;?>" class="gpa__course_label" >
                                  <!--************************ REPEATER **********************-->
                      <h4 class ="gpa__dept_course_name"  data-toggle="collapse" data-target="#<?php echo $course_code;?>" aria-expanded="false"><b><?php echo $course_name;?></b></h4>
                      </label>                     


                        
                      <?php if( have_rows('course_academic_year') ): ?> <!--***Academic Year Start ***-->
                              <ul class="collapse"  id="<?php echo $course_code;?>"><!--start year ul-->

                        <?php while( have_rows('course_academic_year') ): the_row(); 

                          // vars
                          $academic_year = get_sub_field('academic_year');

                          ?>

                          <li class="gpa__academic_year"><b><i>YEAR <?php echo $academic_year;?></i></b><!--start year li-->


                  
                          <?php if( have_rows('semester_one_course_unit') ): ?> <!--*** Sem1 Start ***-->
                             <ul><!--start sem ul-->
                             <li><!--start sem1 li-->
                             <strong><b class="gpa__semester_one_name"><i>SEMESTER ONE</i></b></strong>
                      
                             <ul><!--start sem1 courseunit ul-->
                            <?php while( have_rows('semester_one_course_unit') ): the_row(); 

                              // vars
                              $semester_one_course_unit_name = get_sub_field('semester_one_course_unit_name');
                              $semester_one_course_unit_code = get_sub_field('semester_one_course_unit_code');
                              $semester_one_course_unit_link = get_sub_field('semester_one_course_unit_link');

                              ?>
                              <li class="gpa__semester_course_unit"><b><i><a  href="<?php echo $semester_one_course_unit_link;?>"><?php echo $semester_one_course_unit_code;?>-<?php echo $semester_one_course_unit_name;?></a></i></b></li><!--end sem2 courseunit li-->

                            <?php endwhile; ?>
                            </ul><!--end sem1 courseunit ul-->
                          <?php endif; ?><!--*** End Semester One ***-->
                              </li><!--end sem1 li-->
              
                          <?php if( have_rows('semester_two_course_unit') ): ?> <!--*** Sem2 Start ***-->
                              <li><!--start sem2 li-->
                                      <b class="gpa__semester_one_name"><i>SEMESTER TWO</i></b>
                              <ul><!--start sem2 courseunit ul-->
                            <?php while( have_rows('semester_two_course_unit') ): the_row(); 

                              // vars
                              $semester_two_course_unit_name = get_sub_field('semester_two_course_unit_name');
                              $semester_two_course_unit_link = get_sub_field('semester_two_course_unit_link');
                              $semester_two_course_unit_code = get_sub_field('semester_two_course_unit_code');

                              ?>
                                  
                              <li class="gpa__semester_course_unit"><b><i><a  href="<?php echo $semester_two_course_unit_link;?>"><?php echo $semester_two_course_unit_code;?>-<?php echo $semester_two_course_unit_name;?></a></i></b></li><!--end sem2 courseunit li-->
                                      

                            <?php endwhile; ?>  
                              </ul> <!--end sem2 courseunit ul-->   
                              </li><!--end sem2 li-->

                              </ul><!--end sem ul-->
                          <?php endif; ?><!--*** End Semester Two ***-->

                          </li><!--end year li-->
                       <?php endwhile; ?>
                        </ul><!--end year ul-->
                      <?php endif; ?><!--*** End Academc Year ***-->


                       </li><!--end Course  li-->
                    <?php endwhile; ?>
                        </ul><!--end Course  ul-->
                  <?php endif; ?><!--*** End Course ***-->


                        </div> <!--end course div-->
                <?php endwhile; ?>
              <?php endif; ?><!--*** End Department ***-->

                
            <?php endwhile; ?>
          <?php endif; ?><!--*** End School ***-->


          
        </div>
    </div>


      
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" id="gpa__college_sidebar" >
          <?php get_template_part('/template-parts/must-checkout');?>

          <div class="gpa__sidebar_website_guide">
            <strong><h4 class="gpa__college_sidabar_guide_title">Quick Guide | Gpa Elevator</h4></strong>
            <div id="gpa__college_sidebar_guidelines_wrapper">
              <p>Just click on your course, then select the year which you want to visit and then select that particular course unit to get access to all papers and lecture notes<br/>
                      OR<br/>
                Search for that Particular course units using course-unit name or course code to get you there directly..
              </p>  
              <?php get_template_part('searchform');?>
            </div>
          </div><!--**gpa__sidebar_website_guide**-->
        
          <?php get_template_part('/template-parts/university-links');?>

      </div>

  </div>
</div>

<?php get_footer();?>