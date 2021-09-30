<?php 

/**
* Template Name: Notice Template
 */
get_header();?>


<div class="gpa__notice_board_wrapper">
    <div class="row">
    <div class="col-12 gpa__notice_board_title_wrapper text-center"><h1>NOTICES AND EVENTS</h1></div>
    </div>
    <div class="row gpa__notice_board_inner">

        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 gpa__notice_dispay_area">
        <h3>SUBMIT YOUR NOTICE </h3>
            <section class="gpa__notice_area">
                
            <div class="gpa__user_submited_post_form_wrapper ">
                    
                    <h4>Please fill fields below and submit posts </h4>
                    <h6>*Post category <b>must</b> be your Notice Board</h6>
                    <?php 
                    if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
                </div>
  


            </section>
        </div>


        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 gpa__recent_notices">
            <aside>
                <h3>Notice Board Feed</h3>
                <div class="gpa__recent_notice_container scrollable mt-2">
            <div class="gpa__recent_notice_scroll">
                <?php 
                    query_posts('meta_key=post_views_count&orderby=meta_value_num&cat=21&posts_per_page=10');
                    //$catquery = new WP_Query( 'cat=30&meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5' );  
                    if (have_posts()) :while (have_posts()) :   the_post();?>
                    <article class="gpa__sidebar_post  gpa__recent_notice ">
                        
                            <div class=" gpa__recent_notice_thumbnail_wrapper">
                                
                                <a href="<?php the_permalink();?>">
                                    <div class="gpa__recent_notice_thumbnail">
                                        <img width="86" height="77" src="<?php the_post_thumbnail_url();?>" srcset="<?php the_post_thumbnail_url();?>" class="wp-post-image" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="gpa__recent_notice_content_wrapper">
                                <h4 class="gpa__recent_notice_title ">
                                    <a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 7 ); ?></a>
                                </h4>
                                <div class="gpa__recent_notice_post_meta gpa__recent_notice_post_meta text-right">
                                    <div class="gpa__recent_notice_post_date gpa__post_date"><i class="fas fa-clock"></i>     <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></div>
                                </div>
                            </div>
                    </article>
                    <?php endwhile; endif;
                    //wp_reset_postdata();
                    wp_reset_query();
                ?>
                </div>

            </div>
            </aside>
        </div>

    </div>


</div>



<?php get_footer();