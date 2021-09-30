
<?php


add_filter( 'get_the_date', 'gpa__time_format', 10, 1 ); //override date display
add_filter( 'the_date', 'gpa__time_format', 10, 1 ); //override date display
add_filter( 'get_the_time', 'gpa__time_format', 10, 1 ); //override time display
add_filter( 'the_time', 'gpa__time_format', 10, 1 ); //override time display
 
/* Callback function for post time and date filter hooks */
function gpa__time_format( $orig_time ) {
	global $post;
	$orig_time = strtotime( $post->post_date ); 
	return human_time_diff( $orig_time, current_time( 'timestamp' ) ).' '.__( 'ago' );
}



add_action('pre_get_posts', 'ci_paging_request');
function ci_paging_request($wp)
{
	//We don't want to mess with the admin panel.
	if(is_admin()) return;

	$num = get_option('posts_per_page', 15);

	if( is_home() )
		$num = 3;

	if( is_archive() )
		$num = 18;

	if( is_category() or is_tag() )
		$num = 18;

	//if( is_category('blog') )
		//$num = -1; // -1 means No limit

	if( ! isset( $wp->query_vars['posts_per_page'] ) and is_main_query() )
	{
		$wp->query_vars['posts_per_page'] = $num;
	}
}

?>