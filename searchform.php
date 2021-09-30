
<div class="container gpa__search_wrapper">

<form action="<?php echo home_url('');?>" method="get" class="gpa__search_form row">
<div class="col-10">
  <input type="text" name="s" value="<?php the_search_query();?>" class="gpa__search_input_area" placeholder="Type to search.." required>
  </div>
  <div class="col-2 text-left gpa__search_btn_wrapper">
  <button  type="submit" class="gpa__search_submit_btn">
   <i class="gpa__icon_search fas fa-search"></i>
   </button>
   </div>
</form>
</div>
    