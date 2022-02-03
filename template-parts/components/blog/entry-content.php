<?php 
/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * @package Script Media
 */
 ?>

<div class="entry-content">
    <?php
    if ( is_single() ) {
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. */
                    __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sm' ),
                    [
                        'span' => [
                            'class' => [],
                        ],
                    ] 
                ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            )
        );

        wp_link_pages(
            [
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sm' ),
                'after'  => '</div>',
            ]
        );

    } else {
        ?>
        
            <p>
              <?php sm_the_excerpt( 200 ); ?>
            </p>
            <div class="read-more">
              <?php echo sm_excerpt_more(); ?>
            </div>
        <?php
        
    }

    ?>
</div>