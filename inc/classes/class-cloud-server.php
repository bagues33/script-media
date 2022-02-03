<?php
/**
 * Blocks
 *
 * @package Script Media
 */

namespace SM_THEME\Inc;

use SM_THEME\Inc\Traits\Singleton;

class Cloud_Server {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_shortcode('promoCS', [ $this, 'promo_section_cs'] );
		add_shortcode('priceCS', [ $this, 'price_section_cs'] );
		add_shortcode('faqCS', [ $this, 'faq_section_cs'] );
	}

	/**
	 * Add a block category
	 *
	 * @param array $categories Block categories.
	 *
	 * @return array
	 */
	
	public function promo_section_cs($atts, $content = null) {
			extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = ' <section id="promo" class="promo position-relative">
			      <div class="container-fluid text-center" data-aos="zoom-in">
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
			              </div>
			              <div class="price-ribbon">
			                <a href="#"><span class="kecil">Starting At </span><span class="besar">$29.99</span><span class="kecil">/mo</span></a>
			              </div>
			            </div><!-- End promo item -->

			          </div>
			          <div class="swiper-pagination"></div>
			        </div>

			      </div>
			    </section>';

		  return $html;
	}

	public function price_section_cs($atts, $content = null) {
			extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '<section id="price" class="inner-page price">
			      <div class="container">
			        <div class="row">
			          <div class="col-8 mx-auto">
			              <h1 class="text-center">Cloud Server</h1>
			              <p class="text-center mx-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			              cillum dolore eu fugiat nulla pariatur.</p>
			          </div>
			        </div>
			          
			        <div class="row mt-5 price-container">

			            <div class="col-lg-3 col-md-6 price-item filter-usa" data-aos="fade-up" data-aos-delay="100">
			              <div class="box">
			                <h3>Free</h3>
			                <h4><sup>$</sup>0<span> / month</span></h4>
			                <ul>
			                  <li>Aida dere</li>
			                  <li>Nec feugiat nisl</li>
			                  <li>Nulla at volutpat dola</li>
			                  <li class="na">Pharetra massa</li>
			                  <li class="na">Massa ultricies mi</li>
			                </ul>
			                <div class="btn-wrap">
			                  <a href="#" class="btn-buy">Buy Now</a>
			                </div>
			              </div>
			          	</div>            

			            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 price-item filter-usa" data-aos="fade-up" data-aos-delay="200">
			              <div class="box featured">
			                <h3>Business</h3>
			                <h4><sup>$</sup>19<span> / month</span></h4>
			                <ul>
			                  <li>Aida dere</li>
			                  <li>Nec feugiat nisl</li>
			                  <li>Nulla at volutpat dola</li>
			                  <li>Pharetra massa</li>
			                  <li class="na">Massa ultricies mi</li>
			                </ul>
			                <div class="btn-wrap">
			                  <a href="#" class="btn-buy">Buy Now</a>
			                </div>
			              </div>
			            </div>

			            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-usa" data-aos="fade-up" data-aos-delay="300">
			              <div class="box">
			                <h3>Developer</h3>
			                <h4><sup>$</sup>29<span> / month</span></h4>
			                <ul>
			                  <li>Aida dere</li>
			                  <li>Nec feugiat nisl</li>
			                  <li>Nulla at volutpat dola</li>
			                  <li>Pharetra massa</li>
			                  <li>Massa ultricies mi</li>
			                </ul>
			                <div class="btn-wrap">
			                  <a href="#" class="btn-buy">Buy Now</a>
			                </div>
			              </div>
			          </div>

			          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-usa" data-aos="fade-up" data-aos-delay="300">
			            <div class="box">
			              <span class="advanced">Advanced</span>
			              <h3>Ultimate</h3>
			              <h4><sup>$</sup>49<span> / month</span></h4>
			              <ul>
			                <li>Aida dere</li>
			                <li>Nec feugiat nisl</li>
			                <li>Nulla at volutpat dola</li>
			                <li>Pharetra massa</li>
			                <li>Massa ultricies mi</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			         

			        </div>
			      </div>
			    </section>';

		  return $html;
	}

	public function faq_section_cs($atts, $content = null) {
			extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '<section id="faq" class="faq section-bg">
			      <div class="container">

			        <div class="section-title">
			          <h2>F.A.Q</h2>
			          <h3>Frequently Asked <span>Questions</span></h3>
			          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
			        </div>

			        <div class="row justify-content-center">
			          <div class="col-xl-10">
			            <ul class="faq-list">

			              <li>
			                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
			                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
			                  <p>
			                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
			                  </p>
			                </div>
			              </li>

			              <li>
			                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
			                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
			                  <p>
			                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
			                  </p>
			                </div>
			              </li>

			              <li>
			                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
			                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
			                  <p>
			                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
			                  </p>
			                </div>
			              </li>

			              <li>
			                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
			                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
			                  <p>
			                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
			                  </p>
			                </div>
			              </li>

			              <li>
			                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
			                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
			                  <p>
			                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
			                  </p>
			                </div>
			              </li>

			              <li>
			                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
			                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
			                  <p>
			                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
			                  </p>
			                </div>
			              </li>

			            </ul>
			          </div>
			        </div>

			      </div>
			    </section>';

		  return $html;
	}



}
