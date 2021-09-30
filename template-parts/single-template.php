<?php get_header();?>


<div class="" style="transform: none;">

    <div class="" style="transform: none;">

            
        <div class="gpa__single_main" style="transform: none;">
                <div class="gpa__container" style="transform: none;">
                    <div class="gpa__single_content" style="transform: none;">

                        <div class="container" style="transform: none;">


         <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <div class="gpa__post_header">

                <h1 class="gpa__single_post_title"><?php the_title();?></h1>

    
                <div class="gpa__post_meta_wrapper">
                    <div class="gpa__post_meta">

                        <div class="gpa__post_author">
                        <img alt="<?php the_author();?>" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" height="80" width="80" data-pin-no-hover="true">				<span class="meta_text">by</span>
                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author();?></a>			
                        </div>
        
                        <div class="jeg_meta_date">
                         <?php the_date();?><?php if(function_exists('gpa_PostViews')) { gpa_PostViews(get_the_ID()); }?>
                        </div>

                    </div>
                </div>
            </div>


        <div class="row" style="transform: none;">
            <div class="jeg_main_content col-md-8 gpa__single_col" style="transform: none;">

                <div class="jeg_inner_content" style="transform: none;">
                <?php if (has_post_thumbnail()):?>
                    <div class="jeg_featured featured_image gpa__post_featured_image">
                        <a href="<? the_post_thumbnail_url();?>">
                        <div class="thumbnail-container gpa__single_post_thumnail_wrapper" style="padding-bottom:62.533%">
                            <img width="750" height="469" src="<?php the_post_thumbnail_url();?>" class=" wp-post-image" alt="">
                        </div>
                        </a>
                    </div>
                <?php endif;?>
             
                </div> <!--end inner content-->


         
            </div><!--end col-md-8-->

            <!-- <div class="col-md-4"> -->

               <!--Google ads -->

            <!-- </div> end col-md-4 -->

            <!-- <div class="row"> -->
                <div class="col-md-8 gpa__single_main_content_wrapper gpa__single_col">
                    
                <div class="gpa__single_post_content">
                        <?php the_content();?>
                </div>
                <?php endwhile; endif;?>
                <div class="row">
                    <div class="col-md-6 gpa__post_detail mb-2 gpa__post_cat_list_wrapper">
                        <?php the_category(' ');?>
                    </div> 
                    
                    <div class="col-md-6 gpa__post_cat_tag">
                <?php if(the_tags()):?><span class="tags-links">Tagged:<?php the_tags('');?></span> <?php endif;?>
                    </div>
                    
                </div> 

                <div class="gpa__single_related_posts">
                    <h4 class="gpa__single_related_posts_heading">You May Also Like...</h4>
            <div class="bk-related-posts gpa__trending_news_main_inner">
                <ul class="related-posts row clearfix">
                    
                <?php //if(have_posts()): $i = 1; while (have_posts() && $i < 10) : the_post(); 
                
                query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=2');?>
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <li class="item row-type gpa__main_post col-md-6 col-sm-6">
                    <?php if (has_post_thumbnail()):?>
                    <div class="gpa__post_thumbnail_small_wrapper">
                        <a href="<?php the_permalink();?>">
                        <img width='360' height='240' class="gpa__post_thumbnail_small wp-post-image" src="<?php the_post_thumbnail_url('smallest');?>" alt="Post thumbnail" srcset="<?php the_post_thumbnail_url('smallest');?>  100w" sizes="(max-width: 360px) 100vw, 360px"></a>
                        
                    </div>
                    <?php endif;?>
                    <div class="post-c-wrap">
                        <h4 class="gpa__post_title"><b>
                            <a href="<?php the_permalink();?>"><?php the_title();?></a></b>
                        </h4>
                        <div class="gpa__post_excerpt">
                        <?php echo excerpt(10);?><br/>
                        <a class="gpa__btn_more" href="<?php the_permalink();?>">More</a>
                        </div>
                        <div class="meta">
                            <div class="post-date"><i class="fas fa-clock"></i> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?><span class="gpa__news_cat_separator"> || </span><?php the_category('<span class="gpa__news_cat_separator"> || </span> ');?> </div>
                        </div>
                    </div>
                </li>
                <?php endwhile; endif; 
                wp_reset_query();
                ?>
                    </ul>

             </div>

            <!--***POST NAVIGATION****-->
             <div class="row gpa__notice_navigation">
                <?php 
            $post_id = $post->ID; // current post id
            $cat = get_the_category();
            $current_cat_id = $cat[0]->cat_ID; // current category Id 

            $args = array('category'=>$current_cat_id,'orderby'=>'post_date','order'=> 'DESC');
            $posts = get_posts($args);
            // get ids of posts retrieved from get_posts
            $ids = array();
            foreach ($posts as $thepost) {
                $ids[] = $thepost->ID;
            }
            // get and echo previous and next post in the same category
            $thisindex = array_search($post->ID, $ids);
            $previd = $ids[$thisindex-1];
            $nextid = $ids[$thisindex+1];
            ?>
                <div class="col-md-6" >
                    <?php if (!empty($previd)){ ?>
                    <div class="gpa__previous_post_wrapper gpa__post_nav_col" >
                
                <a  href="<?php echo get_permalink($previd) ?>" class="gpa__notice_lable gpa__notice_lable_previous">
                    Previous Post
                </a>	
                <a rel="prev" href="<?php echo get_permalink($previd) ?>"> <?php echo get_the_title($previd); echo $current_cat_id ;?> </a>
                            
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-6 ">
                            <?php if (!empty($nextid)){
                                    ?>
                    <div class="gpa__next_post_wrapper gpa__post_nav_col">
                        
                    <a  href="<?php echo get_permalink($nextid) ?>" class="gpa__notice_lable gpa__notice_lable_next">
                              Next Post
                            </a>
                            <a rel="next" href="<?php echo get_permalink($nextid) ?>"><?php echo get_the_title( $nextid ); ?></a>
                                    
                        
                    </div>
                    
                    <?php } ?>
                </div>
                              
            </div> <!--post nav-->




                </div>
                </div> <!--end col-md-8-->

                <div class="col-md-4 gpa__single_col">
                    <div class="gpa__news_most_viewed_posts_wrapper">
                        <div class="gpa__news_cat_title_wrapper gpa__news_sidebar_cat_title_wrapper"><h5>RECENT POSTS</h5></div>
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
                                            <div class="gpa__news_sidebar_post_date gpa__post_date"><i class="fas fa-clock"></i> <?php the_date();?></div><span class="gpa__news_cat_separator"> || </span><?php the_category(', ');?>
                                          </div>
                      
                                      </div>
                        </article>
                        <?php endwhile; endif;
                        wp_reset_query();
                        ?>
                      </div>

                </div><!--md-4-->

<!-- 
            </div> -->



            

        </div>

            </div>
        </div>
        </div>
        </div>
    </div>
</div>


<?php get_footer();?>