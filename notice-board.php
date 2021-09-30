<?php
/**
* Template Name: Notice Board Template
 */


get_header(); ?>


<?php $notice_image = get_field('notice_image');?>

<div class="gpa__notice_board_wrapper">
    <div class="noticeboard-title  Noticebox">
    <h3>CEDAT Online  Notice Board </h3>
    </div>

    <div class="tab">
      <div class="row">
      <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" id="defaultOpen" onclick="openCity(event, 'main')">MAIN</button>
      <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" onclick="openCity(event, 'engineering')">ENGINEERING</button>
      <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" onclick="openCity(event, 'environment')">BUILT ENVIRONMENT</button>
      <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" onclick="openCity(event, 'Art')">INDUSTRIAL ART</button>
      </div>
    </div>
  
    <div id="main" class=" active gpa__notice_wrapper">
      <h4 class="gpa__notice_dept_title">CEDAT MAIN NOTICE BOARD</h4>


      <div class="row scrollable gpa__notice">
      <?php //if( have_rows('notice_board') ): ?>
      
            <?php //while( have_rows('notice_board') ): the_row(); 

              // vars
              //$notice_image = get_sub_field('notice_image');

              ?>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 gpa__notice_title_col">
              <div class="gpa__notice_title_wrapper">
                  <div class="row">
                  <div class="col-12 gpa__notice_title_container">
                    <h5>Notice Title</h5>
                  </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            
                    </p>
              </div>
                
            </div><!--**gpa__notice_title_col**-->
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 gpa__notice_detail_col">
              <div class="gpa__notice_deatail_wrapper">
                 <h5> Notice Detail</h5>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, esse modi? Repellat maiores sit voluptas reiciendis itaque quam atque nobis!</p>
              </div>
                
            </div><!--**gpa__notice_detail_col**-->
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 gpa__notice_img_col">
                <div class="gpa__notice_image_wrapper">
                  <h5>Notice Image</h5>
                  <!-- <div class="gpa__notice_img_container"> -->
                  <a href="<?php echo $notice_image; ?>"><img class="gpa__notice_img" src="<?php echo $notice_image; ?>" alt="" ></a>
                  <!-- </div> -->
                </div>
            
            </div><!--**gpa__notice_img_col**-->
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 gpa__notice_date_col">
                <div class="gpa__notice_date_wrapper">
                  <h5>post Date</h5>
                </div>
            </div> <!--**gpa__notice_date_col**-->
      </div>


            <?php //endwhile; ?>

      <?php //endif; ?>



    </div> <!--**gpa__notice_tab**-->

  
    <div id="engineering" class="tabcontent">
      <h3>SCHOOL OF ENGINEERING</h3>
      <div class="row scrollable">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          </div>
      </div>

    </div>
  
    <div id="environment" class="tabcontent">
      <h3>SCHOOL OF BUILT ENVIRONMENT</h3>

    </div>
    <div id="Art" class="tabcontent">
      <h3>MARGARET TROWELL SCHOOL OF INDUSTRIAL AND FINE ART</h3>
    </div>

</div>





<?php get_footer();?>