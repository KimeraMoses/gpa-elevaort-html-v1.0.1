<?php get_header();



?>
<div class="gpa__trending_news_bullet row">

<div id="s-related-articles" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 gpa__trending_news_main">

    <div class="bk-related-posts gpa__trending_news_main_inner">
    <div class="gpa__news_cat_title_wrapper"><h5><?php echo single_cat_title();?></h5></div>

    <ul class="related-posts row clearfix">
	<?php if(have_posts()): $i = 1; while (have_posts() && $i < 3) : the_post(); ?>
    <?php //if (have_posts()) : while(have_posts()) : the_post();?>
    <li class="item row-type gpa__main_post col-md-4 col-sm-4">
        <?php if (has_post_thumbnail()):?>
          <div class="gpa__post_thumbnail_small_wrapper">
              <a href="<?php the_permalink();?>">
              <img width="360" height="240" class="gpa__post_thumbnail_small wp-post-image" src="<?php the_post_thumbnail_url();?>" sizes="(max-width: 360px) 100vw, 360px"></a>
          </div>
        <?php endif;?>
        <div class="post-c-wrap">
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
		
		
		<?php endif;?>



    
    </ul>

</div>


</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 gpa__news_sidebar_highlights">
  <div class="gpa__news_most_viewed_posts_wrapper">
  <div class="gpa__news_cat_title_wrapper gpa__news_sidebar_cat_title_wrapper"><h5>MOST VIEWED POSTS</h5></div>
  <?php 
  query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5');
  
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
                      <div class="gpa__news_sidebar_post_date gpa__post_date"><i class="fas fa-clock"> </i> <?php the_date();?> </div><span class="gpa__news_cat_separator"> || </span><?php the_category('<span class="gpa__news_cat_separator"> || </span> ');?>
                    </div>

                </div>
  </article>
  <?php endwhile; endif;
  wp_reset_query();
  ?>
</div>


</div>



</div>


<?php get_footer();?>