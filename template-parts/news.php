


<div class="row">
<?php if (have_posts()) : while(have_posts()) : the_post();?>
<div class="col-4 gpa__news_area_wrapper">
<div class="row gpa__news_card">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 gpa__post_thumbnail">
        <?php if (has_post_thumbnail()):?>
            <!-- <div class="news_card_image-lg news_scene_img_container" data-overview-tooltip-initiated="true"> -->
                <img  class="img-fluid" src="<?php the_post_thumbnail_url();?>"  alt="" >

              
        <?php endif;?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
           <a href="<?php the_permalink();?>"><h5 class="news_story_healines"> <i><?php the_title();?> </i>  </h5></a><span><?php the_date();?> </span>
            
            <!-- <p class="detailed_news_story"> -->

            <?php the_excerpt();?>
            <!-- <a href="<?php //the_permalink();?>" class="btn btn-small gpa__btn btn-success">Read More..</a> -->
    </div>
    </div> 

</div>
<?php endwhile; endif;?>
</div>


<div class="col-4 gpa__news_area_wrapper">
  <div class="row  gpa__news_card">
  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 gpa__post_thumbnail">
        <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/revise2.png" alt="">
           
    </div>

  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
 <h3>The title</h3> 
  </div> 
  </div> 


</div>


