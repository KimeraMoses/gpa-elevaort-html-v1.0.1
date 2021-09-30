<?php
/**
 * Gpaelevator's functions and definitions
 *
 * @package Gpaelevator
 * @since Gpaelevator 1.0
 */
 

if ( ! function_exists( 'gpa_elevator_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function gpa_elevator_setup() {
 

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

	add_theme_support( 'custom-header' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'html5', array( 
			'comment-list', 
			'comment-form', 
			'search-form', 
			'gallery', 
			'caption', 
			'style', 
			'script' 
			)
	 );

	 	
	add_theme_support( 'customize-selective-refresh-widgets' );


    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
		'top-menu' => __('Top Menu', 'gpa_elevator'),
        'main-menu' => __('Main Menu', 'gpa_elevator'),
        'footer-menu' => __('Footer Menu', 'gpa_elevator')
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // gpa_elevator_setup
add_action( 'after_setup_theme', 'gpa_elevator_setup' );

/*============================================
   * DEFINING STANDARD iMGAGE SIZES INTO THE SITE *
============================================ */
add_image_size('extra_small',86,77,true);
add_image_size('smallest',360,240,true);
add_image_size('medium',270,200,false);
// add_image_size('biggest',800,800,true);
 

/**
 * Enqueing theme Scripts.
 *
 * @since  2020
 */
function add_theme_scripts() {
	/* styles */
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fontawasome', get_template_directory_uri() . '/css/all.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'post', get_template_directory_uri() . '/main.css', array(), '1.1', 'all');
    wp_enqueue_style( 'msnb', get_template_directory_uri() . '/css/msnb_style.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'nav-menu', get_template_directory_uri() . '/css/nav-menu.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'navigation', get_template_directory_uri() . '/css/navigation.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/custom.css', array(), '1.1', 'all');
	

	/* js */
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(),1, true);
	wp_enqueue_script('gpa-popper', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
    wp_enqueue_script('gpa-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('fontawesome', get_template_directory_uri() . '/js/all.js', array(), '', true );

	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(),1, true);
   
	  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	  }
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/**
 * Widget areas in the sidebar and his markup.
 *
 * @since  2020
 */


function gpa__sidebars() {
    register_sidebar( array(
        'name'          => __( 'Gpa Elevator Right Sidebar', 'gpa_elevator' ),
        'id'            => 'gpa-sidebar-right',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Gpa Elevator Left Sidebar', 'gpa_elevator' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Gpa Elevator Footer 1', 'gpa_elevator' ),
        'id'            => 'gpa__footer_1',
        'before_widget' => '<aside id="%1$s" class="gpa__footer widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Gpa Elevator Footer 2', 'gpa_elevator' ),
        'id'            => 'gpa__footer_2',
        'before_widget' => '<ul><li id="%1$s" class="gpa__footer widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // register_sidebar( array(
    //     'name'          => __( 'Gpa Footer 2', 'gpa_elevator' ),
    //     'id'            => 'gpa__footer_2',
    //     'before_widget' => '<aside id="%1$s" class="gpa__footer widget %2$s">',
    //     'after_widget'  => '</aside>',
    //     'before_title'  => '<h4 class="widget-title">',
    //     'after_title'   => '</h4>',
    // ) );
    
    register_sidebar( array(
        'name'          => __( 'Gpa Elevator Footer 3', 'gpa_elevator' ),
        'id'            => 'gpa__footer_3',
        'before_widget' => '<aside id="%1$s" class="gpa__footer widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Gpa Elevator Footer 4', 'gpa_elevator' ),
        'id'            => 'gpa__footer_4',
        'before_widget' => '<aside id="%1$s" class="gpa__footer widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action('widgets_init','gpa__sidebars');


/**
 * Walker class for menus
 *
 * @since  2020
 */
class CSS_Menu_Walker extends Walker {

	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul>\n";
	}
	
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	
		global $wp_query;
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		
		/* Add active class */
		if (in_array('current-menu-item', $classes)) {
			$classes[] = 'active';
			unset($classes['current-menu-item']);
		}
		
		/* Check for children */
		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		if (!empty($children)) {
			$classes[] = 'has-sub';
		}
		
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><span>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</span></a>';
		$item_output .= $args->after;
		
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		$output .= "</li>\n";
	}
	
}

function excerpt( $limit ) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'[...]';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
    }
    function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'[...]';
    } else {
    $content = implode(" ",$content);
    }
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
    }

/*============================================
   * POST VIEWS*
============================================ */

//Set the Post Custom Field in the WP dashboard as Name/Value pair 
function gpa_PostViews($post_ID) {
 
    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count'; 
     
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
     
    //If the the Post Custom Field value is empty. 
    if($count == ''){
        $count = 0; // set the counter to zero.
         
        //Delete all custom fields with the specified key from the specified post. 
        delete_post_meta($post_ID, $count_key);
         
        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        return $count . ' View';
     
    //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);
         
        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
        return $count . ' View';
        }
        //In all other cases return (count) Views
        else {
        return $count . ' Views';
        }
    }
}

 
//Gets the  number of Post Views to be used later.
function get_PostViews($post_ID){
    $count_key = 'post_views_count';
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
 
    return $count;
}
 
//Function that Adds a 'Views' Column to your Posts tab in WordPress Dashboard.
function post_column_views($newcolumn){
    //Retrieves the translated string, if translation exists, and assign it to the 'default' array.
    $newcolumn['post_views'] = __('Views');
    return $newcolumn;
}
 
//Function that Populates the 'Views' Column with the number of views count.
function post_custom_column_views($column_name, $id){
     
    if($column_name === 'post_views'){
        // Display the Post View Count of the current post.
        // get_the_ID() - Returns the numeric ID of the current post.
        echo get_PostViews(get_the_ID());
    }
}
//Hooks a function to a specific filter action.
//applied to the list of columns to print on the manage posts screen.
add_filter('manage_posts_columns', 'post_column_views');
 
//Hooks a function to a specific action. 
//allows you to add custom columns to the list post/custom post type pages.
//'10' default: specify the function's priority.
//and '2' is the number of the functions' arguments.
add_action('manage_posts_custom_column', 'post_custom_column_views',10,2);

/*============================================
   * ELEMENTOR LOCATIONS*
============================================ */
function gpa_elevator_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_location(
		'showcase-area',
		[
			'label' => __( 'showcase Area', 'gpa elevator' ),
			'multiple' => true,
			'edit_in_content' => false,
		]
	);

}
add_action( 'elementor/theme/register_locations', 'gpa_elevator_register_elementor_locations' );


/*============================================
   * DEFINING NUMBER OF POSTS PER PAGE*
============================================ */

add_action('pre_get_posts', 'gpa_elevator_paging_request');
function gpa_elevator_paging_request($wp)
{
	//We don't want to mess with the admin panel.
	if(is_admin()) return;

	$num = get_option('posts_per_page', 15);

	if( is_home() )
		$num = 9;

	if( is_archive() )
		$num = 18;

	if( is_category() or is_tag() )
		$num = 18;

	if( is_category('notice-board') )
		$num = 6; // -1 means No limit

	if( ! isset( $wp->query_vars['posts_per_page'] ) and is_main_query() )
	{
		$wp->query_vars['posts_per_page'] = $num;
	}
}

/*============================================
   * SINGLE POST TEMPLATE BASED ON CATEGORY*
============================================ */
function get_custom_cat_template($single_template) {
   global $post;
   if ( in_category( 'notice-board' )) {
      $single_template = dirname( __FILE__ ) . '/single-notice-board.php';
   }
   return $single_template;
} 
add_filter( "single_template", "get_custom_cat_template" ) ;

/*============================================
   * LIMITING THE DISPLAYED TAGS*
============================================ */
// add_filter('term_links-post_tag','limit_to_five_tags');
// function limit_to_five_tags($terms) {
// return array_slice($terms,0,5,true);
// }

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'https://gpaelevator.com/wp-content/uploads/favicon.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}



/* Registering Elementor Location */

function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_location(
		'main-sidebar',
		[
			'label' => __( 'Main Sidebar', 'gpa_elevator' ),
			'multiple' => true,
			'edit_in_content' => false,
		]
	);

}
add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );



?>