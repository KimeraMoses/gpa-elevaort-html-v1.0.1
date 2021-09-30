
<?php get_header();



?>











<div class="gpa__trending_news_bullet row">

<div id="s-related-articles" class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 gpa__trending_news_main">

    <div class="bk-related-posts gpa__trending_news_main_inner">
    <div class="gpa__news_cat_title_wrapper gpa__text_white"><h5>GPA ELEVATOR NEWS TEAM</h5></div>
    <div class="gpa__author_profile row mb-3">
     <div class="col-md-4">
     <div class="gpa__author ">

        <img width='360' height='240' alt="GPA Reporter" src="<?php echo esc_url( get_avatar_url( $user->ID ) );?>" srcset="https://secure.gravatar.com/avatar/3d0bcaa990e91e578ad67d90cee95265?s=160&amp;d=mm&amp;r=g 2x" class="avatar avatar-80 photo"  data-pin-no-hover="true">				
        
       </div>

     </div>
     <div class="col-md-8">
     <div class="gpa__news_cat_title_wrapper"><h6></h6></div>
     <p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><b><?php the_author(); ?></b> </a> is an author and a member of gpa elevator news team with a good record and has contributed a number of posts has may be viewed below.
      if you have any story that you would lke to feature on this platform, Please feel free to contact <?php the_author();?> at <span class="gpa__author_email"><?php the_author();?>.news@gpaelevator.com</span></p>
     </div>

    </div>

    <ul class="related-posts row clearfix">
      <div class="col-12 text-center m-2 gpa__author_posts_title"><h4>ALL POST FROM <span class="gpa__author_name"><?php the_author();?></span></h4></div>
    <?php if(have_posts()): $i = 1; while (have_posts() && $i < 10) : the_post(); ?>
    <?php //if (have_posts()) : while(have_posts()) : the_post();?>
    <li class="item row-type gpa__main_post col-md-3 col-sm-3">
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
              <?php echo excerpt(10);?>
              <a class="gpa__btn_more" href="<?php the_permalink();?>">More</a>
            </div>
            <div class="meta">
                <div class="post-date"><?php the_date();?><span class="gpa__news_cat_separator"> || </span><?php the_category(', ');?> </div>
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


</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 gpa__news_sidebar_highlights">
  <div class="gpa__news_most_viewed_posts_wrapper">
  <div class="gpa__news_cat_title_wrapper gpa__news_sidebar_cat_title_wrapper"><h5>MOST VIEWED POSTS</h5></div>
  <?php 
  query_posts('meta_key=post_views_count&orderby=meta_value_num&cat!=30&posts_per_page=10');
  
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
                      <div class="gpa__news_sidebar_post_date gpa__post_date"><i class="fas fa-clock"></i> <?php the_date();?></div><span class="gpa__news_cat_separator"> || </span><?php the_category(', ');?>
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