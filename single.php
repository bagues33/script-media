<?php 

/**
 * Single post templates
 * 
 * @package Script Media
 */

get_header();
 ?>


     <!-- ======= Promo Section ======= -->
    <section id="promo" class="promo position-relative">
      <div class="container-fluid" data-aos="zoom-in">

        <div class="promo-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="promo-item mx-5">
                <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="promo-img" alt=""> -->
                <h1>Saul Goodman</h1>
                <h4>Ceo &amp; Founder</h4>
                <p class="p-md-2">
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <button class="btn btn-warning mt-3">Beli Sekarang!</button>
                <div class="price-ribbon">
                  <a href="#"><span class="kecil">Starting At </span><span class="besar">$29.99</span><span class="kecil">/mo</span></a>
                </div>
              </div>
            </div><!-- End promo item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Promo Section -->

    <section id="blog" class="blog">
        <main id="main" class="site-main mt-5" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <?php
                        if ( have_posts() ) :
                            ?>
                            <div class="post-wrap">
                            <?php
                            if ( is_home() && ! is_front_page() ) {
                                ?>
                                <header class="mb-5">
                                    <h1 class="page-title screen-reader-text">
                                        <?php single_post_title(); ?>
                                    </h1>
                                </header>
                                <?php
                            }

                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content' );

                            endwhile;
                            ?>

                        <?php

                        else :

                            get_template_part( 'template-parts/content-none' );

                            ?>

                            </div>
                        <?php
                        endif;

                        sm_pagination();

                        // For Single Post loadmore button, uncomment this code and comment next and prev link code below.
//                       echo do_shortcode( '[single_post_listings]' )
                        ?>
                        <?php
                        // Next and previous link for page navigation.
                         ?>
                         <div class="row my-3 prev-next d-flex justify-content-between">
                            <div class="col-md-6 prev-link py-4"><?php previous_post_link(); ?></div>
                            <div class="col-md-6 next-link py-4 text-end"><?php next_post_link(); ?></div>
                         </div>
                    </div>  
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </main>
    </section>

 <?php get_footer(); ?>