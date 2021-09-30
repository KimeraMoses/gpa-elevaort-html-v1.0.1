<?php 
get_header();?>


<div class="gpa__notice_board_wrapper">
    <div class="row">
    <div class="col-12 gpa__notice_board_title_wrapper text-center"><h1>NOTICES AND EVENTS</h1></div>
    </div>
    <div class="row gpa__notice_board_inner">

        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 gpa__notice_dispay_area">
        <h3>Notice Area</h3>
            <section class="gpa__notice_area">
                

                <?php
                  if (have_posts()) :while (have_posts()) :   the_post();?>
                  <article class="row ">
                        <div class="col-12 ">
                          <h1 class="gpa__current_notice_title"><?php the_title();?><?php if(function_exists('gpa_PostViews')) { gpa_PostViews(get_the_ID()); }?></h1>
                        </div>
                        <?php if (has_post_thumbnail()):?>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-left gpa__current_notice_thumbnail_wrapper">
                                <div class="gpa_current_notice_thumbnail_inner">
                                    <a href="<?php the_post_thumbnail_url();?>">
                                        <div class="gpa__news_sidebar_post_thumbnail_wrapper">
                                            <img width="" height="" src="<?php the_post_thumbnail_url();?>" class="img-fluid wp-post-image" alt="">
                                        </div>
                                    </a>
                                    <div class="gpa__current_notice_post_date gpa__post_date"><i class="fas fa-clock mr-1">  </i><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></div> 
                                </div>
                                </div>
                        <?php endif;?>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                    <div class="gpa__current_notice_content"><?php the_content();?></div>
                                    <div class="gpa__current_notice_meta row">
                                        <div class="gpa__notice_author col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 text-left">
                                            <img alt="GPA Reporter" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" srcset="https://secure.gravatar.com/avatar/3d0bcaa990e91e578ad67d90cee95265?s=160&amp;d=mm&amp;r=g 2x" class="avatar avatar-80 photo" height="80" width="80" data-pin-no-hover="true">				
                                            <span class="meta_text">Posted by</span>
                                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
		
                                        </div>
                                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 text-left gpa__current_notice_meta_location">
                                         <?php the_category(', ');?><span class="gpa__news_cat_separator"> || </span> <span> MUK</span> <span class="gpa__news_cat_separator"> || </span> <span> CEDAT</span><span class="gpa__news_cat_separator"> || </span> <?php the_tags() ?>
                                        </div>
                
                                    </div>
                                </div>
                </article>
                <?php endwhile; endif; ?>


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
			<div class="row gpa__submit_notice_wrapper mt-2">
				<div class="col-12">
            		<h3>Submit Your Notice</h3>
				</div>
				<div class="col-12 gpa__student_submit_notice_wrapper">
		          <h6>Do you want your notice to appear on this notice board?</h6>
		            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			            Click here
                    </button>
                    <div class="gpa__user_submited_post_form_wrapper collapse"  id="collapseExample">
                    
                    <h4>Please fill fields below and submit posts </h4>
                    <h6>*Post category <b>must</b> be your university name</h6>
                    <?php 
                    if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
                </div>
            	
				</div>
            </div>
        </div>

    </div>


</div>



<?php get_footer();