<?php 
/**
 * Template for post entry header
 * 
 * @package Script Media
 */

$the_post_id = get_the_ID();
$hide_title = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = ! empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';

$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
 ?>

<!--   <div class="entry-img">
    <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="" class="img-fluid">
    </div>
 -->

<!--   <h2 class="entry-title">
        <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
      </h2>
 -->
 <header class="entry-header">
 	<?php 
 		//featured image
 		if ( $has_post_thumbnail ) {
 			?>
 			<div class="entry-img">
 				<a href="<?php echo esc_url( get_permalink() ); ?>">
 					<?php 
 						the_post_custom_thumbnail(
 							$the_post_id,
 							'featured-thumbnail',
 							[
 								'size'  => '(max-width: 1280px) 1280px, 900px',
 								'class' => 'attachment-featured-large size-featured-image img-fluid'
 							]
 						)
 					 ?>
 				</a>
 			</div>
 		<?php
 		}



        //title
        if ( is_single() || is_page() ) {
            printf(
                '<h1 class="entry-title %1$s">%2$s</h1>',
                esc_attr( $heading_class ),
                wp_kses_post( get_the_title() )
            );
        } else {
            printf(
                '<h2 class="entry-title"><a href="%1$s">%2$s</a></h2>',
                esc_url( get_the_permalink() ),
                wp_kses_post( get_the_title() )
            );
        }
 	 ?>
 </header>