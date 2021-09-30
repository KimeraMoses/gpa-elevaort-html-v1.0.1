
<?php


/**
* Template Name: TimeTable Template
 */
get_header();



?>

<!-- Begin Page Content -->


  <!-- Content Row -->
  <div class="row">

   <?php  include('includes/navbar.php'); ?>


       <!-- Content Wrapper -->
       <div id="content-wrapper" class="container d-flex flex-column">

<!-- Main Content -->
        <div id=" content">
        <?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="ab")
			{
			include('ab.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2></h2>
		Welcome 
		Welcome user Welcome user Welcome user Welcome user Welcome user Welcome user user 
				Welcome 
		Welcome user Welcome user Welcome user Welcome user Welcome user Welcome user user";
		}
		?>
          </div>
        </div>

  </div>

  <!-- Content Row -->






  <?php

get_footer();
?>