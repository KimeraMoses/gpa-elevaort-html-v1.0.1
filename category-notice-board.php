<?php 
get_header();?>


<div class="gpa__notice_board_wrapper">
    <div class="col-12 gpa__notice_board_title_wrapper text-center"><h1>NOTICES AND EVENTS</h1></div>

    <div class="row gpa__notice_board_inner gpa__swap_column">

        <div class="col-md-3 gpa__recent_notices">
            <aside>
                <h3>Notice Board Feed</h3>
                <div class="gpa__recent_notice_container scrollable gpa__scrollable_notice_cat mt-2">

                <?php 
                    query_posts('meta_key=post_views_count&orderby=meta_value_num&cat=30&posts_per_page=20');
                    if (have_posts()) :while (have_posts()) :   the_post();?>
                    <article class="gpa__sidebar_post  gpa__recent_notice ">
                        
                            <div class=" gpa__recent_notice_thumbnail_wrapper">
                                
                                <a href="<?php the_permalink();?>">
                                    <div class="gpa__recent_notice_thumbnail">
                                        <img width="86" height="77" src="<?php the_post_thumbnail_url();?>" srcset="<?php the_post_thumbnail_url('extra_small');?>" class="wp-post-image" alt="">
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
                    wp_reset_query();
                ?>
                </div>
            </aside>
			<div class="row gpa__submit_notice_wrapper mt-2">
				<div class="col-12">
            		<h3>Submit Your Notice</h3>
				
				<div class="gpa__student_submit_notice_wrapper">
                  <h5>Do you want your notice to appear on this notice board?</h5>
                  <a href="<?php echo home_url('/students-submit-notice');?>" rel="noopener noreferrer"> Click Here</a>
				</div>
			   </div>
            </div>
        </div>
        <div class="col-md-9 gpa__notice_dispay_area">
            <section>
				<h3>GPA NOTICE DIARY</h3>
				<div class="gpa__notice_diary_wrapper">
    
                  <ul class="related-posts row clearfix">
      <?php if(have_posts()): $i = 1; while (have_posts() && $i < 10) : the_post(); ?>
      
      <?php //if (have_posts()) : while(have_posts()) : the_post();?>
      <li class="item row-type gpa__main_post col-md-4 col-sm-4">
          <?php if (has_post_thumbnail()):?>
         <div class="gpa__post_thumbnail_small_wrapper">
              <a href="<?php the_permalink();?>">
              <img width='360' height='240' class="gpa__post_thumbnail_small wp-post-image" src="<?php the_post_thumbnail_url();?>" alt="Post thumbnail" srcset="<?php the_post_thumbnail_url();?>  100w" sizes="(max-width: 360px) 100vw, 360px"></a>
             
          </div>
          <?php endif;?>
          <div class="post-c-wrap gpa__notice_diary_title">
              <h4><b>
                  <a href="<?php the_permalink();?>"><?php the_title();?></a></b>
              </h4>
              <div class="gpa__post_excerpt">
                <?php echo excerpt(10);?><br/>
                <a class="gpa__btn_more" href="<?php the_permalink();?>">More</a>
              </div>
              <div class="meta">
                  <div class="post-date"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?><span class="gpa__news_cat_separator"> || </span><?php the_category(', ');?> </div>
              </div>
          </div>
      </li>
      <?php $i++; endwhile; ?>
  <li class="container-fluid gpa__pagination_wrapper">
      <ul class="row">
      <li class="col-6 pl-5 text-left gpa__next_pagination"><?php next_posts_link(); ?></li>
      <li class="col-6 pr-5 text-right gpa__previous_pagination"><?php previous_posts_link(); ?></li>
      </ul>
  </li>
      
          <?php endif; ?>

          </ul>

			</div>
            </section>
        </div>

    </div>


</div>


<?php get_footer();