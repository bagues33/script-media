<?php
/**
 * Blocks
 *
 * @package Script Media
 */

namespace SM_THEME\Inc;

use SM_THEME\Inc\Traits\Singleton;

class Home {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_shortcode('heroHome', [ $this, 'hero_section_home'] );
		add_shortcode('serviceHome', [ $this, 'service_section'] );
		add_shortcode('priceHome', [ $this, 'price_section'] );
		add_shortcode('domainHome', [ $this, 'domain_section'] );
		add_shortcode('contactHome', [ $this, 'contact_section'] );
	}
	

	// -----------------Hero Section Home--------------------------

	public function hero_section_home($atts, $content = null) {
		extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = ' <section id="hero" class="d-flex align-items-start">
		    	<div class="container text-center d-flex flex-wrap justify-content-center align-items-center" data-aos="zoom-out" data-aos-delay="100">;
		      <h1>Deskripsi Product Terbaru</h1>
		      <section id="icon-boxes" class="icon-boxes">
		      <div class="container">

		        <div class="row mt-5">
		          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
		            <div class="icon-box">
		              <div class="icon"><i class="bx bxl-dribbble"></i></div>
		              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
		              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
		              <hr>
		              <div class="flex">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		              </div>
		              <div class="position-absolute top-100 start-50 translate-middle">
		                <div class="btn-wrap">
		                  <a href="#" class="btn-buy">Save</a>
		                </div>
		              </div>
		            </div>
		          </div>

		          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
		            <div class="icon-box">
		              <div class="icon"><i class="bx bx-file"></i></div>
		              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
		              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
		              <hr>
		              <div class="flex">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		              </div>
		              <div class="position-absolute top-100 start-50 translate-middle">
		                <div class="btn-wrap">
		                  <a href="#" class="btn-buy">Save</a>
		                </div>
		              </div>
		            </div>
		          </div>

		          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
		            <div class="icon-box">
		              <div class="icon"><i class="bx bx-tachometer"></i></div>
		              <h4 class="title"><a href="">Magni Dolores</a></h4>
		              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		               <hr>
		              <div class="flex">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		              </div>
		              <div class="position-absolute top-100 start-50 translate-middle">
		                <div class="btn-wrap">
		                  <a href="#" class="btn-buy">Save</a>
		                </div>
		              </div>
		            </div>
		          </div>

		          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
		            <div class="icon-box">
		              <div class="icon"><i class="bx bx-layer"></i></div>
		              <h4 class="title"><a href="">Nemo Enim</a></h4>
		              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
		              <hr>
		              <div class="flex">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		              </div>
		              <div class="position-absolute top-100 start-50 translate-middle">
		                <div class="btn-wrap">
		                  <a href="#" class="btn-buy">Save</a>
		                </div>
		              </div>
		            </div>
		          </div>

		        </div>

		      </div>
		    </section>
		    </div>
		  </section>';

		  return $html;
	}



	// -----------------Service Section Home--------------------------

	public function service_section($atts, $content = null) {
		extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Check our <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section>';

		  return $html;
	}

	// -----------------Price Section Home--------------------------


	public function price_section($atts, $content = null) {
		extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '<section id="price" class="price">
		      <div class="container">

		        <div class="section-title">
		          <h2>Service</h2>
		          <h3>Check our <span>Service</span></h3>
		          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
		        </div>

		        <div class="row" data-aos="fade-up" data-aos-delay="100">
		          <div class="col-lg-12 d-flex justify-content-center">
		            <ul id="price-flters">
		              <!-- <li data-filter="*" class="filter-active">All</li> -->
		              <li data-filter=".filter-sh" id="click">Shared Hosting</li>
		              <li data-filter=".filter-cs">Cloud Server</li>
		              <li data-filter=".filter-vps">VPS</li>
		              <li data-filter=".filter-vds">VDS</li>
		            </ul>
		          </div>
		        </div>

		        <div class="row price-container">
		            <div class="col-lg-3 col-md-6 price-item filter-sh" data-aos="fade-up" data-aos-delay="100">
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

		            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 price-item filter-sh" data-aos="fade-up" data-aos-delay="200">
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
		          
		            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-sh" data-aos="fade-up" data-aos-delay="300">
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
		 
		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-sh" data-aos="fade-up" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-cs" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-cs" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-cs" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-cs" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vps" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vps" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vps" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vps" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vds" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vds" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vds" data-aos-delay="300">
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

		          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 price-item filter-vds" data-aos-delay="300">
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

	// -----------------domain Section Home--------------------------

	public function domain_section($atts, $content = null) {
		extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '<section id="domain" class="domain section-bg">
			    <div class="container mt-4">
			    <div class="row d-flex justify-content-center">
			        <div class="col-md-12">
			            <div class="card p-4">
			                <h3 class="heading text-center">Or Choose a Domain</h3>
			                <!-- <div class="d-flex justify-content-center">
			                    <div class="search"> <input type="text" class="search-input" placeholder="Search..." name=""> <a href="#" class="search-icon"> <i class="bx bx-search"></i> </a> </div>
			                </div> -->
			                <div class="col-md-12 mt-5">
			                  <div class="input-group"> <input type="search" class="form-control"> <span class="input-group-addon"><input type="submit" value="Search" class="btn btn-primary"></span> </div>
			                </div>
			                <div class="row mt-4 g-1 px-4 mb-5 justify-content-center">
			                    <div class="col-md-2  col-4 col-sm-4 my-sm-3 mx-3 my-3">
			                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://pngimage.net/com-png-1-2/" width="50">
			                            <div class="text-center mg-text"> <span class="mg-text">Account</span> </div>
			                        </div>
			                    </div>
			                    <div class="col-md-2 col-4 col-sm-4 my-sm-3 mx-3 my-3">
			                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/ueLEPGq.png" width="50">
			                            <div class="text-center mg-text"> <span class="mg-text">Payments</span> </div>
			                        </div>
			                    </div>
			                    <div class="col-md-2 col-4 col-sm-4 my-sm-3 mx-3 my-3">
			                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/tmqv0Eq.png" width="50">
			                            <div class="text-center mg-text"> <span class="mg-text">Delivery</span> </div>
			                        </div>
			                    </div>
			                    <div class="col-md-2 col-4 col-sm-4 my-sm-3 mx-3 my-3">
			                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/D0Sm15i.png" width="50">
			                            <div class="text-center mg-text"> <span class="mg-text">Product</span> </div>
			                        </div>
			                    </div>
			                    <div class="col-md-2 col-4 col-sm-4 my-sm-3 mx-3 my-3">
			                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/Z7BJ8Po.png" width="50">
			                            <div class="text-center mg-text"> <span class="mg-text">Return</span> </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    </div>
			  </section>';

		  return $html;
	}

	// -----------------Contact Section Home--------------------------

	public function contact_section($atts, $content = null) {
		extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '<section id="contact" class="contact">
		      <div class="container">

		        <div class="section-title">
		          <h2>Contact</h2>
		          <h3><span>Contact Us</span></h3>
		          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
		        </div>

		        <div class="row" data-aos-delay="200">
		          <div class="col-lg-6">
		            <div class="info-box mb-4">
		              <i class="bx bx-map"></i>
		              <h3>Our Address</h3>
		              <p>A108 Adam Street, New York, NY 535022</p>
		            </div>
		          </div>

		          <div class="col-lg-3 col-md-6">
		            <div class="info-box  mb-4">
		              <i class="bx bx-envelope"></i>
		              <h3>Email Us</h3>
		              <p>contact@example.com</p>
		            </div>
		          </div>

		          <div class="col-lg-3 col-md-6">
		            <div class="info-box  mb-4">
		              <i class="bx bx-phone-call"></i>
		              <h3>Call Us</h3>
		              <p>+1 5589 55488 55</p>
		            </div>
		          </div>

		        </div>

		        <div class="row" data-aos-delay="200">

		          <div class="col-lg-6">
		            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
		          </div>

		          <div class="col-lg-6">
		            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
		              <div class="row">
		                <div class="col form-group">
		                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
		                </div>
		                <div class="col form-group">
		                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
		                </div>
		              </div>
		              <div class="form-group">
		                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
		              </div>
		              <div class="form-group">
		                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
		              </div>
		              <div class="my-3">
		                <div class="loading">Loading</div>
		                <div class="error-message"></div>
		                <div class="sent-message">Your message has been sent. Thank you!</div>
		              </div>
		              <div class="text-center"><button type="submit">Send Message</button></div>
		            </form>
		          </div>

		        </div>

		      </div>
		    </section>';

		  return $html;
	}

}
