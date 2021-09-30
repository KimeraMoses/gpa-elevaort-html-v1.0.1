<?php
/**
* Template Name: University Template
 */


get_header();
?>
<?php 
/**** VARIABLES HAVING ACF FIELD *******/
  $university_information = get_field('university_information');
?>

<div class="gpa__university_wrapper ">
    <div class="row text-center gpa__gpa_university_wrapper_row">

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" id="gpa__university_display_area" >
            

            <div class="container-fluid gpa__main_content_area gpa__content_main_mobile">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 gpa__main_content_logo_wrapper">
                            <img class="gpa__university_logo " src="<?php echo $university_information['university_logo'];?>" alt="<?php the_title();?>">    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10  pl-4 gpa__main_content_university_info_wrapper ">
                        <h1 class="gpa__university_title"><?php the_title();?></h1>
                        <div class="gpa__university_description">
                            <p> <?php echo $university_information['university_short_description'];?></p>
                        </div>
                    </div>
                </div>

                <div class="gpa__university_colleges_facaulty_schools_wrapper text-left">
    
                    <?php if( have_rows('university_collegesfaculties') ): ?>
                    <h4>COLLEGES/FACULTIES</h4>
                    <ul>
                    <?php while( have_rows('university_collegesfaculties') ): the_row(); 

                    // vars
                    $collegefaculty_name = get_sub_field('collegefaculty_name');
                    $link_to_collegefaculty = get_sub_field('link_to_collegefaculty');

                    ?>

                    <li class="gpa__university_college"><a href="<?php echo $link_to_collegefaculty;?>"><?php echo $collegefaculty_name;?></a></li>

                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                </div> <!--***End of Colleges wrapper*** -->


            </div> <!--****End main content area***-->

        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" id="gpa__right_sidebar">
            <?php get_template_part('/template-parts/must-checkout');?>

            <div id="gpa__sidebar_right" class="sidebar">
               <?php dynamic_sidebar( 'Gpa Elevator Right Sidebar' ); ?>
            </div>


        </div>



    </div><!--end row-->
    <div class="row mt-2 mb-3 gpa__user_submited_post_wrapper">
        <div class="col-md-8 gpa__user_submited_col">
        <div class="gpa__user_submited_post">
                <div class="gpa__user_submited_post_inner">
                   <h3 class= "text-white bg-info mb-2 p-2 rounded-top gpa__user_submited_post_title">Submit stories making headlines in your campus</h3>
                    <p>Gpa Elevator news team decided to give every student a chance to submit in any story making headlines in their 
                        respective universities, colleges/faculties, schools, departments or classes that
                         will automatically appear on the GPA ELEVATOR platform under news arena sections after preview.<br/> 
                         There are however some terms and conditions set up to guide you when submitting posts. Please read them before you submit 
                         <a href="#">gpa elevator news terms and conditions </a>
                    </p>
                </div>
                <div class="gpa__user_submited_post_form_wrapper">
                    
                    <h4>Please fill fields below and submit posts </h4>
                    <h6>*Post category <b>must</b> be your university name</h6>
                    <?php 
                    if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
                </div>

            </div>
        </div>

        <div class="col-md-4">
          
            <div class="gpa__news_most_viewed_posts_wrapper">
                <div class="gpa__news_cat_title_wrapper gpa__news_sidebar_cat_title_wrapper"><h5>RECENT POSTS</h5></div>
                <?php 
                query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=7');
                
                if (have_posts()) :while (have_posts()) :   the_post();?>
                <article class="gpa__sidebar_post format-standard gpa__news_sidebar_article">
                          <?php if (has_post_thumbnail()):?>
                              <div class="gpa__news_sidebar_thumbnail_wrapper">
                                  
                                  <a href="<?php the_permalink();?>"><div class="gpa__news_sidebar_post_thumbnail_wrapper">
                                    <img width="120" height="86" src="<?php the_post_thumbnail_url();?>" class="wp-post-image" alt=""></div></a>
                              </div>
                          <?php endif;?>
                              <div class="gpa__news_sidebar_content_wrapper">
                                  <h3 class="gpa__news_sidebar_post_title">
                                      <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                  </h3>
                                  <div class=" gpa__news_sidebar_post_meta">
                                    <div class="gpa__news_sidebar_post_date"><a href="<?php the_permalink();?>" class="gpa__news_sidebar_post_date_link"><i class="fas fa-clock"></i> <?php the_date();?></a><span class="gpa__news_cat_separator"> || </span><?php the_category(', ');?></div>
                                  </div>
              
                              </div>
                </article>
                <?php endwhile; endif;
                wp_reset_query();
                ?>
              </div>
              
              
              </div>






        </div>

    </div>


    





<?php get_footer();?>
