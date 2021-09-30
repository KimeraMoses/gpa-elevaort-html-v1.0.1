
<div class="container-fluid gpa__discussion_wrapper">
      <div class="u-center-text">
        <h3 class="gpa__discussion_section_title">
          GET HELP FROM INDIVIDUAL STUDENTS
        </h3>
      </div>
      <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 gpa__student_card_wrapper" id="gpa__special_card_wrapper">
            <div class="gpa__card_advert">
              <div class="gpa__card_special_inside text-center">
            <h2 class="text-center" ><b>Need to discuss for others?</b></h2>
            <hr class="gpa__discussion_rule">
            <div class="gpa__special_card_content">
           <p >If you are well conversant with any topic(s) in this course unit
           and that you are capable of discussing it to other students please contact Moses to be added in this section<br>
           You can also contact him if you have got link(s) to any resourcefull materials like Youtube videos,websites and much more.
         <br>contact him on 0778451024/0759130054<br>Email: 
         <a href="#" class="gpa__discussion_email"> kimeramoses001@gmail.com </a><br>
         OR
         <a href="#" class="gpa__discussion_email"> info@gpaelevator.com </a>
        </p>
        </div>
      </div>
        </div>
      </div>



<?php if( have_rows('students_data') ): ?>
	
	<?php while( have_rows('students_data') ): the_row(); 

		// vars
		$students_profile_picture = get_sub_field('students_profile_picture');
		$students_name = get_sub_field('students_name');
		$students_topic_of_expertise = get_sub_field('students_topic_of_expertise');
		$students_phone_numbers = get_sub_field('students_phone_numbers');
		$students_email = get_sub_field('students_email');
		$students_university = get_sub_field('students_university');
		$collegefaculty = get_sub_field('collegefaculty');
		$students_course = get_sub_field('students_course');
		$students_year_of_study = get_sub_field('students_year_of_study');
		$todays_date = get_sub_field('todays_date');
        
		?>
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 gpa__student_card_wrapper" id="gpa__student_card_wrapper">
          <div class="gpa__student_card">
            <div class="gpa__student_card_side gpa__student_card_side_front">
              <div class="gpa__student_card_profile_img">
                <img src="<?php echo $students_profile_picture;?>" id="gpa__student_card_profile_img" alt="<?php echo $students_name;?>">
              </div>
            <h3><b> <?php echo $students_name;?></b></h3>
            <hr>
             <h5><b>Topic of Expertise:</b> <i><?php echo $students_topic_of_expertise;?></i></h5>
             <h5><b>Contact On</b></h5>
             <div class="container gpa__card_content_student_contact_wrapper">
             <ul class="gpa__card_content_student_contact">
             <li>Phone Number(s): <?php echo $students_phone_numbers;?></li>
             <li> Email: <a href="#"><?php echo $students_email;?></a> </li>
             <li class="gpa__card_content_date_posted">Added on : <i> <?php echo $todays_date;?></i></li>
            </ul>
            </div>
            </div>
            <div class="gpa__student_card_side gpa__card_side_back">
    
              <h1>About Student</h1>
              <hr>
              <ul>
              <li><b>Name:</b> <?php echo $students_name;?> <br></li>
                <li><b>University:</b> <?php echo $students_university;?> <br><li>
                <li><b>College/Faculty:</b> <?php echo $collegefaculty;?><br><li>
                <li><b>Course:</b> <?php echo $students_course;?> <br></li>
                <li><b>Year:</b> <?php echo $students_year_of_study;?><br></li>
                <li><b>Prefered days:</b>
                 
                  <?php if( have_rows('students_prefered_days_and_time') ): ?>
                    <ul id="prefered_days">
                    <?php while( have_rows('students_prefered_days_and_time') ): the_row(); 

                        // vars
                        $prefered_day = get_sub_field('prefered_day');
                        $prefered_time = get_sub_field('prefered_time');

                        ?>

                        <li> <?php echo $prefered_day;?>-<?php echo $prefered_time;?> </li>
                    <?php endwhile; ?>

                    </ul>
                <?php endif; ?>

                </li>
              </ul>
            </div>
          </div>
        </div>
    


	<?php endwhile; ?>

<?php endif; ?>

 

    
      


      </div>
    </div>