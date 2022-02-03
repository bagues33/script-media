<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * 
 *
 * @package Script-Media
 * @subpackage Script-Media
 * @since Script Media 1.0
 */

get_header();
?>

  <main id="main" data-aos="fade-up">

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
                <p class="p-2">
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


     <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <?php 
        if ( have_posts() ) : 
       ?>
      <div class="container" data-aos="fade-up">
           <?php 
            if ( is_home() && ! is_front_page() )  {
                ?>
                <header class="mb-5">
                    <h1 class="page-title screen-reader-text">
                      <?php single_post_title(); ?>
                    </h1>
                </header>
              <?php
            }
           ?>
        <div class="row">
          <div class="col-lg-8 entries">
            <?php 
              $index = 0;
              $no_of_columns = 3;
              //start the loop.
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' );
              endwhile;
           ?>
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <?php sm_pagination(); ?>
            </ul>
          </div>
         </div>
         <div class="col-lg-4">
          <?php get_sidebar(); ?>
         </div>
        </div>

      </div>
      <?php 
        else : 
          ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <?php get_template_part( 'template-parts/content-none' ); ?>
              </div>
              <div class="col-lg-4">
                <?php get_sidebar(); ?>
              </div>
            </div>
          </div>
            <?php
        endif;
         ?>
       
    </section><!-- End Blog Section -->
      
</main>
 <?php get_footer(); ?>