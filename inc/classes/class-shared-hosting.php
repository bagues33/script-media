<?php
/**
 * Blocks
 *
 * @package Script Media
 */

namespace SM_THEME\Inc;

use SM_THEME\Inc\Traits\Singleton;

class Shared_Hosting {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_shortcode('promoSH', [ $this, 'promo_section_sh'] );
		add_shortcode('priceSH', [ $this, 'price_section_sh'] );
		add_shortcode('faqSH', [ $this, 'faq_section_sh'] );
	}

	/**
	 * Add a block category
	 *
	 * @param array $categories Block categories.
	 *
	 * @return array
	 */

		public function promo_section_sh($atts, $content = null) {
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

	public function price_section_sh($atts, $content = null) {
		extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '
			<section id="price" class="inner-page price">
			      <div class="container">
			        <div class="row">
			          <div class="col-8 mx-auto">
			              <h1 class="text-center">Shared Hosting</h1>
			              <p class="text-center mx-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			              cillum dolore eu fugiat nulla pariatur.</p>
			          </div>
			        </div>

			         <ul class="nav nav-pills mb-3 d-flex justify-content-center mt-4" id="pills-tab" role="tablist">
					  <li class="nav-item" role="presentation">
					    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">IIX</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">USA</button>
					  </li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

						  <!-- awal iix -->

						   <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
					          <div class="col-lg-12 m-0 p-0">
					            <ul id="price-flters1">
					              <!-- <li data-filter="*" class="filter-active">All</li> -->
					              <li data-filter=".filter-un" id="click">Unlimited</li>
					              <li data-filter=".filter-en">Enterprise</li>
					            </ul>
					          </div>
			        		</div>

						  <div class="row price-container1">

				            <div class="col-lg-3 col-md-6 price-item1 filter-un">
				              <div class="box">
				              <span class="advanced">Advanced</span>
				                <h3>IIX Unlimited Business</h3>
				                <h4>Rp25.000<span> / month</span></h4>
				                <ul>
				                  <li>Unlimited Website</li>
				                  <li>Unlimited Space & Bandwidth</li>
				                  <li>Unlimited Mail</li>
				                  <li>Unlimited FTP</li>
				                  <li>Unlimited Subdomain</li>
				                  <li>Unlimited Domain addons</li>
				                  <li>Unlimited MYSQL</li>
				                </ul>
				                <div class="btn-wrap">
				                  <a href="#" class="btn-buy">Buy Now</a>
				                </div>
				              </div>
				          	</div>            
				    
				            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 price-item1 filter-un">
				              <div class="box featured">
				                <h3>IIX Unlimited Personal</h3>
				                <h4>Rp166.666<span> / month</span></h4>
				                <ul>
				                  <li>Unlimited Space & Bandwidth</li>
				                  <li>Unlimited Mail</li>
				                  <li>Unlimited FTP</li>
				                  <li>Unlimited MYSQL</li>
				                  <li>1 Subdomain</li>
				                </ul>
				                <div class="btn-wrap">
				                  <a href="#" class="btn-buy">Buy Now</a>
				                </div>
				              </div>
				            </div>
				          <div class="row mb-5">
				            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				              <div class="box">
				                <h3>Hostingi_IIX-100</h3>
				                <h4>Rp10.000<span> / month</span></h4>
				                <ul>
				                  <li>IIX - 100 Plan Features</li>
				                  <li>100 MB Space</li>
				                  <li>2 GB Bandwidth</li>
				                  <li>Unlimited Mail</li>
				                  <li>2 FTP</li>
				                  <li>Unlimited Subdomain</li>
				                  <li>Unlimited MYSQL</li>
				                </ul>
				                <div class="btn-wrap">
				                  <a href="#" class="btn-buy">Buy Now</a>
				                </div>
				              </div>
				          </div>

				          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hostingi_IIX-250</h3>
				              <h4>Rp20.000<span> / month</span></h4>
				              <ul>
				                <li>IIX - 250 Plan Features</li>
				                <li>250 MB Space</li>
				                <li>3 GB Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>Unlimited Subdomain</li>
				                <li>2 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>

				          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hostingi_IIX-500</h3>
				              <h4>Rp30.000<span> / month</span></h4>
				              <ul>
				                <li>IIX - 500 Plan Features</li>
				                <li>500 MB Space</li>
				                <li>4 GB Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>2 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>

				          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hostingi_IIX-1000</h3>
				              <h4>Rp40.000<span> / month</span></h4>
				              <ul>
				                <li>IIX - 1000 Plan Features</li>
				                <li>1000 MB Space</li>
				                <li>10G Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>22 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>

				     	</div>
				     	<div class="row mb-5">
				          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hostingi_IIX-1500</h3>
				              <h4>Rp40.000<span> / month</span></h4>
				              <ul>
				                <li>IIX - 1500 Plan Features</li>
				                <li>1500 Mb Space</li>
				                <li>70G Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>25 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				                <li>ada Fantastico</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>

				           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hostingi_IIX-2000</h3>
				              <h4>Rp50.000<span> / month</span></h4>
				              <ul>
				                <li>IIX - 2000 Plan Features</li>
				                <li>2000 MB Space</li>
				                <li>10G Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>2 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>

				          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hostingi_IIX-2500</h3>
				              <h4>Rp50.000<span> / month</span></h4>
				              <ul>
				                <li>IIX - 2500 Plan Features</li>
				                <li>2500 MB Space</li>
				                <li>10 GB Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>2 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>

				           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hostingi_IIX-3000</h3>
				              <h4>Rp65.000<span> / month</span></h4>
				              <ul>
				                <li>IIX - 3000 Plan Features</li>
				                <li>3000 MB Space</li>
				                <li>10 GB Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>2 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>
				         </div>
				          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item1 filter-en">
				            <div class="box">
				              <h3>Hosting IIX 10 GB</h3>
				              <h4>Rp110.000<span> / month</span></h4>
				              <ul>
				                <li>S-10 Plan Features</li>
				                <li>10 GB Space</li>
				                <li>Unlimited Bandwidth</li>
				                <li>Unlimited Mail</li>
				                <li>Unlimited FTP</li>
				                <li>1 Domain addons</li>
				                <li>Unlimited MYSQL</li>
				              </ul>
				              <div class="btn-wrap">
				                <a href="#" class="btn-buy">Buy Now</a>
				              </div>
				            </div>
				          </div>


					 	</div>
					 	<!-- akhir iix -->

					  </div>

				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  	
					  	<!-- Awal USA -->

			        <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
			          <div class="col-lg-12 m-0 p-0">
			            <ul id="price-flters">
			              <!-- <li data-filter="*" class="filter-active">All</li> -->
			              <li data-filter=".filter-unlimited" id="click1">Unlimited</li>
			              <li data-filter=".filter-profesional">Profesional</li>
			              <li data-filter=".filter-enterprise">Enterprise</li>
			            </ul>
			          </div>
			        </div>
			          
			        <div class="row price-container">

			            <div class="col-lg-3 col-md-6 price-item filter-unlimited">
			              <div class="box">
			                <h3>Personal</h3>
			                <h4>Rp100.000<span> / month</span></h4>
			                <ul>
			                  <li>One-click Wordpress Installs</li>
			                  <li>Cpanel</li>
			                  <li>Free Private SSL</li>
			                  <li>Unlimited Space & Bandwidth</li>
			                  <li>Unlimited POP3 Email Accounts</li>
			                  <li>Unlimited FTP Accounts</li>
			                  <li>1 Subdomain</li>
			                </ul>
			                <div class="btn-wrap">
			                  <a href="#" class="btn-buy">Buy Now</a>
			                </div>
			              </div>
			          	</div>            
			    
			            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 price-item filter-unlimited">
			              <div class="box featured">
			                <h3>Business</h3>
			                <h4>Rp250.000<span> / month</span></h4>
			                <ul>
			                  <li>One-click Wordpress Installs</li>
			                  <li>Cpanel</li>
			                  <li>Free Private SSL</li>
			                  <li>Unlimited Website</li>
			                  <li>Unlimited Space & Bandwidth</li>
			                  <li>Unlimited POP3 Email Accounts</li>
			                  <li>Unlimited FTP Accounts</li>
			                  <li>Unlimited Subdomain</li>
			                  <li>Unlimited Addon/ Parked Domains</li>
			                </ul>
			                <div class="btn-wrap">
			                  <a href="#" class="btn-buy">Buy Now</a>
			                </div>
			              </div>
			            </div>

			            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-unlimited">
			              <div class="box">
			              <span class="advanced">Advanced</span>
			                <h3>Corporate</h3>
			                <h4>Rp300.000<span> / month</span></h4>
			                <ul>
			                  <li>Website Unlimited</li>
			                  <li>Space Unlimited</li>
			                  <li>Bandwidth Unlimited</li>
			                  <li>Free Dedicated IP 1</li>
			                  <li>Free Private SSL 1</li>
			                  <li>Webmail Account Unlimited</li>
			                  <li>FTP Accounts Unlimited</li>
			                  <li>Addon /Parked Domains Unlimited</li>
			                  <li>Sub Domains Unlimited</li>
			                  <li>MySQL / PostgreSQL Unlimited</li>
			                  <li>Dedicated IP 1</li>
			                  <li>osCommerce Yes</li>
			                  <li>ZenCart Yes</li>
			                  <li>Cube Cart Yes</li>
			                </ul>
			                <div class="btn-wrap">
			                  <a href="#" class="btn-buy">Buy Now</a>
			                </div>
			              </div>
			          </div>

			          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-profesional">
			            <div class="box">
			              <h3>Profesional P-100</h3>
			              <h4>Rp10.000<span> / month</span></h4>
			              <ul>
			                <li>P-100 Plan Features</li>
			                <li>100 Mb Space</li>
			                <li>2 GB Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>20 FTP</li>
			                <li>Unlimited Subdomain</li>
			                <li>Unlimited MYSQL</li>
			                <li>ada Fantastico</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-profesional">
			            <div class="box">
			              <h3>Profesional P-250</h3>
			              <h4>Rp20.000<span> / month</span></h4>
			              <ul>
			                <li>P-250 Plan Features</li>
			                <li>250 MB Space</li>
			                <li>3 GB Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>Unlimited Domain addons</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-profesional">
			            <div class="box">
			              <h3>Profesional P-500</h3>
			              <h4>Rp30.000<span> / month</span></h4>
			              <ul>
			                <li>P-500 Plan Features</li>
			                <li>500 Mb Space</li>
			                <li>4 GB Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>2 Domain addons</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-profesional">
			            <div class="box">
			              <h3>Profesional P-1000</h3>
			              <h4>Rp40.000<span> / month</span></h4>
			              <ul>
			                <li>P-1000 Plan Features</li>
			                <li>1000 MB Space</li>
			                <li>10 GB Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-enterprise">
			            <div class="box">
			              <h3>Enterprise E-2000</h3>
			              <h4>Rp50.000<span> / month</span></h4>
			              <ul>
			                <li>E-2000 Plan Features</li>
			                <li>2000 MB Space</li>
			                <li>10 GB Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>Unlimited Domain addons</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-enterprise">
			            <div class="box">
			              <h3>Enterprise E-2500</h3>
			              <h4>Rp60.000<span> / month</span></h4>
			              <ul>
			                <li>E-2500 Plan Features</li>
			                <li>2500 MB Space</li>
			                <li>10 GB Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>2 Domain addons</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-enterprise">
			            <div class="box">
			              <h3>Enterprise E-3000</h3>
			              <h4>Rp60.000<span> / month</span></h4>
			              <ul>
			                <li>P-3000 Plan Features</li>
			                <li>3000 MB Space</li>
			                <li>10 GB Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>Unlimited Domain addons</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			           <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-enterprise">
			            <div class="box">
			              <h3>Enterprise E-4000</h3>
			              <h4>Rp70.000<span> / month</span></h4>
			              <ul>
			                <li>E-4000 Plan Features</li>
			                <li>4000 MB Space</li>
			                <li>Unlimited Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-enterprise">
			            <div class="box">
			              <h3>Enterprise E-10G</h3>
			              <h4>Rp60.000<span> / month</span></h4>
			              <ul>
			                <li>S-10 Plan Features</li>
			                <li>10 GB Space</li>
			                <li>Unlimited Bandwidth</li>
			                <li>Unlimited Mail</li>
			                <li>Unlimited FTP</li>
			                <li>Unlimited Domain addons</li>
			                <li>Unlimited MYSQL</li>
			              </ul>
			              <div class="btn-wrap">
			                <a href="#" class="btn-buy">Buy Now</a>
			              </div>
			            </div>
			          </div>

			          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-iix">
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

					  	<!-- Akhir USA -->

				</div>
					</div>

			      </div>
			    </section>';

		  return $html;
	}

	public function faq_section_sh($atts, $content = null) {
		extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = ' <section id="faq" class="faq section-bg">
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
