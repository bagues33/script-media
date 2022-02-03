<?php 
	
function get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [] ) {
	$custom_thumbnail = '';

	 if ( null === $post_id ) {
	 	$post_id = get_the_ID();
	 }

	 if ( has_post_thumbnail( $post_id ) ) {
	 	$default_attributes = [
	 		'loading' => 'lazy'
	 	];

	 	$attributes = array_merge( $additional_attributes, $default_attributes );

	 	$custom_thumbnail = wp_get_attachment_image(
	 		get_post_thumbnail_id( $post_id ),
	 		$size,
	 		false,
	 		$additional_attributes
	 	);
	 }

	 return $custom_thumbnail;
}

function the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [] ) {

	echo get_the_post_custom_thumbnail( $post_id, $size, $additional_attributes );

}

function sm_posted_on() {
	global $posted_on;

	$time_string = '<time class="entry-date published update" datetime="%1$s">%2$s</time>';

	// Post is modified ( when post published time is not equal to post modified time )
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published update" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_attr( get_the_date() ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_attr( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'sm' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on text-secondary">' . $posted_on . '</span>';
}

function sm_posted_by() {
	$byline = sprintf(
		esc_html_x( ' by %s', 'post author', 'sm' ),
		'<span class="author vcard"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="byline text-secondary">' . $byline . '</span>';
}


function sm_the_excerpt( $trim_character_count = 0 ) {
	$post_ID = get_the_ID();

	if ( empty( $post_ID ) ) {
		return null;
	}

	if ( has_excerpt() || 0 === $trim_character_count ) {
		the_excerpt();

		return;
	}

	$excerpt = wp_html_excerpt( get_the_excerpt( $post_ID ), $trim_character_count, '[...]' );


	echo $excerpt;
}

function sm_excerpt_more( $more = '' ) {

	if ( ! is_single() ) {
		$more = sprintf( '<a class="sm-read-more text-white mt-3 btn btn-info" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( 'Read more', 'sm' ) 
		);
	}

	return $more;
}

function sm_pagination() {

	$allowed_tags = [
		'span' => [
			'class' => []
		],
		'a' => [
			'class' => [],
			'href' => [],
		]
	];

	$args = [
		'before_page_number' => '<span class="text-primary btn mr-2 mb-2">',
		'after_page_number' => '</span>',
	];

	printf( '<nav class="sm-pagination clearfix">%s</nav>', wp_kses( paginate_links( $args ), $allowed_tags ) );
}

function sm_category() {

		$categories = get_categories( array(
	    'orderby' => 'name',
	    'order'   => 'ASC'
	) );
	 
	foreach( $categories as $category ) {
	    $category_link = sprintf( 
	        '<a href="%1$s" alt="%2$s">%3$s</a>',
	        esc_url( get_category_link( $category->term_id ) ),
	        esc_attr( sprintf( __( 'View all posts in %s', 'sm' ), $category->name ) ),
	        esc_html( $category->name )
	    );
	     
	    echo '<li>' . sprintf( esc_html__( '%s', 'sm' ), $category_link ) . '<span>' . sprintf( esc_html__( ' (%s)', 'sm' ), $category->count ) . '</span></li> ';
	} 
}

function sm_tags() {


	$tags = get_tags(array(
	  'hide_empty' => false,

	));


	foreach ($tags as $tag) {
	  echo '<a href="'. $tag->slug .'"><li>' . $tag->name . '</li></a>';
	}


}

// function recent_post() {
// 		$recent_args = array(
// 	    "posts_per_page" => 5,
// 	    "orderby"        => "date",
// 	    "order"          => "DESC",
// 	);      

// 	$recent_posts = new WP_Query( $recent_args );

// 		if ( $recent_posts -> have_posts() ) :
// 	    while ( $recent_posts -> have_posts() ) :

// 	    $recent_posts -> the_post();
	 
// 	     echo '<div class="post-item clearfix">';
// 	     echo '<img src="'. the_title() .'">';
// 	     echo '<h4><a href="'. the_permalink() .'">'. the_title() .'</a></h4>';
// 	     echo '</div>';
      
// 	    endwhile;
// 	endif;

// }

function recent_post() {

	$args = array( 'posts_per_page' => '5' );
	$recent_posts = new WP_Query($args);
	// add_image_size( 'thumbnail', 200, 9999 );
	while( $recent_posts->have_posts() ) :  
	    $recent_posts->the_post() ?>
	    <div class="post-item clearfix">
	    	<?php if ( has_post_thumbnail() ) : ?>
	            <?php the_post_thumbnail('') ?>
	        <?php endif ?>    
	        <h4><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h4>
	        <time><?php the_date(); ?></time>
	    </div>
	<?php endwhile; ?>
	<?php wp_reset_postdata();
 
}

function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
         'link_before' => false,
         'link_after' => false,
        'theme_location' => 'sm-topbar-menu',
        'fallback_cb'=> 'fall_back_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<li[^>]*>#',
        '#</li>$#'
       
    ), '', $menu);

    return $menu;
}



