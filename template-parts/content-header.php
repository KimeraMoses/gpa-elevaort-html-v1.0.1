

<header >

  <div class="container-fluid ">
    
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 gpa__logo_col">
        <section class="gpa__logo_section text-center">
          <div class="gpa__logo_wrapper text-center">
              <h1><?php if( the_custom_logo()): 
              the_custom_logo();?>
          
              <?php endif;?></h1>
          </div>
        </section>

      </div> <!--**end gpa__logo column**-->
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gpa__campus_food_wrapper">
       <?php get_template_part('/template-parts/campus','food');?>
      </div> 

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 gpa__register_user">
        <div class="">
            <a href="<?php echo home_url('/login');?>" id="login" >Login</a>
            <?php //if(is_loged_in()):?> 
            <!-- <a href="<?php //echo home_url('/login');?>" id="login" >Logout</a> -->
            <?php //else:?>
             <!-- <a href="<?php //echo home_url('/login');?>" id="login" >Login</a> -->
            <?php //endif;?>
        </div>
      </div>
   

      

      <!--***Home-page header Ends here***-->
    </div> <!--**gpa__header_row*-->
  </div> <!--**gpa__header_container*-->
        
  <div class="container-fluid main-menu-nav_bar" id="navbar">

    <?php get_template_part('/template-parts/navigation');?>

  </div>
</header>



  <div class="container-fluid gpa__body_wrapper">