

<?php $news_source = get_field('news_source');?>

     <div class="container-fluid" id="news">
       <h1><i>News Trending Around Your Campus</i></h1>
     </div>

     <div class="container-fluid" id="vert">
      
      <div id="carouselExampleControls " class="row carousel vert slide" data-ride="carousel" data-interval="10000">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 updates"><b>TRENDING:</b> </div>
          <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 container carousel-inner">
              <div class="carousel-item active"><i class="fas fa-caret-right"></i>
                  <a  href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. </a>
              </div>
              <div class="carousel-item"><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                  <a  href="#">Makerere Graduates student in various fields</a>
              </div>
              <div class="carousel-item " ><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                <a  href="#">Makerere Graduates student in various fields</a>
              </div>
              <div class="carousel-item " ><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                <a  href="#">Makerere Graduates student in various fields</a>
              </div>
              <div class="carousel-item " ><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                <a  href="#">Makerere Graduates student in various fields</a>
              </div>
          </div>
      </div>
    </div>





     <div class="row news_area" >

        <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg- col-xl-4 ">
            <div class="news_card"> 
            <?php if (has_post_thumbnail()):?>
                <div class="news_card_image-lg news_scene_img_container" data-overview-tooltip-initiated="true">
                    <img  class="scene_img_lg img-fluid" src="<?php the_post_thumbnail_url();?>"  alt="" >
                  
                    <div class="news_card_image-rounded university_logo-rounded">
                    <img class="image_rounded card_img_sm " src="<?php echo $news_source['university_logo'];?>" alt="muk-logo">
                    </div>
                  </div><!--News featured image Ends-->
            <?php endif;?>
                <h2 class="university_name_having_news_trending"> <a href="muk.html#news"><?php echo $news_source['university_name_with_news'];?></a></h2>
                <div class="date_posted_anthor"><i>Posted on <?php the_date();?>  by <a href="#id=2323232"><?php the_author();?></a></i></div>
              
                <div class="news_article_area container">
                  <h5 class="news_story_healines"> <i><h3><?php the_title();?></h3></i> </h5>
                    <!-- <p class="detailed_news_story"> -->

                      <?php the_excerpt();?>
                      <a href="<?php the_permalink();?>" class="btn gpa__btn btn-success">Read More..</a>
                    <!-- </p> -->
          
                </div><!--News Artical Ends-->

            </div> <!--News Card container Ends-->
     
          </div><!--News container Ends-->
          <?php endwhile; endif;?>
     </div>