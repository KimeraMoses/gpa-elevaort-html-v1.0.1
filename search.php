
<?php get_header();


?>
<div class="container-fluid">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 gpa__search_results_wrapper">

        <?php if (have_posts()) : ?>
        <div class="gpa__search_result_header">
            <h4>Search Results for '<?php echo the_search_query();?>'... </h4>
        </div>
        <?php while(have_posts()) : the_post();?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="gpa__search_card_wrapper row"> 
                <?php if (has_post_thumbnail()):?>
                     <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 gpa__search_result_thumbnail_wrapper">
                    
                        <img  class="gpa__search_result_thumbnail img-fluid" src="<?php the_post_thumbnail_url();?>"  alt="" >
                     </div>
                <?php endif;?>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 gpa__search_result_content">
                        <h5 class="gpa__search_result_title"> <a href="<?php the_permalink();?>"> <i><?php the_title();?></i></a> </h5>
                    
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" class="btn gpa__btn_read_more btn-success">Read More..</a>
                    </div>
            </div><!--search card Ends-->

          </div><!--search col Ends-->
        <?php endwhile; ?>
        <?php else :?>
            <div class="container gpa__search_results_missing">
                <div class="gpa__search_results_missing_inner">
                <div class="gpa__search_result_missing_header">
                    <h3>There are no Search Results for <i class="gpa__search_query">'<?php echo the_search_query();?>' </i> found!!</h3>
                </div>
                    <div class="gpa__search_result_missing_wrapper"> 

                    <h4>Please <strong>Double check</strong> your spelling and try Searching again....<br/></h4>

                    <div class="gpa__search_contacts">

                    </div>
                
                    </div>

                </div>
            </div>
        <?php endif;?>
    </div> <!--**Search Results Wrapper End**-->
    
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5" id="gpa__university_sidebar">
    <?php get_sidebar();?>

    </div> <!--**Search Sidebar End**-->
</div><!--**page row End**-->
        </div> <!--**page container End**-->
<?php get_footer();?>
