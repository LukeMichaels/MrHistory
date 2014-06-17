<?php

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'less' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* get post date
/*-----------------------------------------------------------------------------------*/
function less_entry_date() {
 $date = sprintf( '<span><time class="entry-date" datetime="%2$s">%3$s</time></span>',
 esc_attr( get_the_time() ),
 esc_attr( get_the_date( 'c' ) ),
 esc_html( get_the_date() )
 );
 printf($date);
}

// returns estimated reading time in min assuming an average speed of 250 wpm 
function less_post_reading_time(){
	$content = get_post_field( 'post_content', $post->ID );
	$count = str_word_count( strip_tags( $content ) );
  	echo '&sdot; ' . ceil($count/250) . ' min read';
}

// returns post category linked to the category page
function less_post_category(){
	$category = get_the_category(); 
	printf('<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>');
}

// returns the name of the category on the category page
function less_current_category($cat){
	$this_category = get_category($cat);
	printf($this_category->category_nicename);
}

// add thumbnail support
add_theme_support('post-thumbnails'); 

/*-----------------------------------------------------------------------------------*/
/* Enque Styles and Scripts
/*-----------------------------------------------------------------------------------*/
function less_scripts()  {		
	// add theme scripts
	// uncomment if you plan on writing javascript in an external file
	wp_enqueue_script('medium-less', get_template_directory_uri() . '/js/theme.min.js');
}
function modify_jquery() {
      wp_deregister_script('jquery');
	  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js?ver=1.9.1');
      wp_enqueue_script('jquery');	  
}

add_action('init', 'modify_jquery');
add_action( 'wp_enqueue_scripts', 'less_scripts' );