
<?php 

/**** VARIABLES HAVING ACF FIELD *******/
$useful_links = get_field('useful_links');
?>



<div class="gpa__must_checkout">

<div class="col-12"><h3>MUST CHECKOUTS</h3></div>
   <div class="row side-menu">

    <div class="gpa__sidebar_nav_item menu-item-01 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
        <a href="<?php echo $useful_links['link_to_universitycollege_time_table'];?>" target="_blank" > Time Tables</a>
    </div>
    <div class="gpa__sidebar_nav_item menu-item-02 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
        <a href="<?php echo $useful_links['link_to_universitycollege_notice_board'];?>" target="_blank">Notice Board</a>
    </div>
    <div class="gpa__sidebar_nav_item menu-item-03  col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
        <a href="<?php echo $useful_links['link_to_universitycollege_blog'];?>" target="_blank">Blog</a>
    </div>
</div>

</div >