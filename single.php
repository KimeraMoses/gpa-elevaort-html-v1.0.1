
<?php        
if(has_term('notice-board', 'category', $post)) {      
   get_template_part('single-notice-board', 'notice-board');
} else {
   // use default template file single-template.php
   get_template_part('/template-parts/single','template');
}
?>