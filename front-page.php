<?php 

/**
 * Front page templates
 * 
 * @package Script Media
 */

get_header();
 ?>

  <section id="page">
        <main id="main" class="site-main" role="main">
            <div class="container-fluid">
                <div class="col-lg-12">
                <?php
                    $post = get_post();
                    $title = apply_filters('the_title', $post->post_title);
                    // echo $title;
                    $content = apply_filters('the_content', $post->post_content);
                    echo $content;
                 ?>
                </div>
            </div>
        </main>
    </section>

 <?php get_footer(); ?>