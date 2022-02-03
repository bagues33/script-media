<?php
/**
 * Blocks
 *
 * @package Script Media
 */

namespace SM_THEME\Inc;

use SM_THEME\Inc\Traits\Singleton;

class Pricing {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		
		/**
		 * Actions.
		 */
		add_shortcode('promoPricing', [ $this, 'promo_section_pricing'] );
		add_shortcode('hargaPricing', [ $this, 'harga_section_pricing'] );
		add_shortcode('faqPricing', [ $this, 'faq_section_pricing'] );
	}

	/**
	 * Add a block category
	 *
	 * @param array $categories Block categories.
	 *
	 * @return array
	 */
	public function promo_section_pricing($atts, $content = null) {
			extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = '<section id="promo" class="promo position-relative">
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
			    </section>';

		  return $html;
	}

	public function harga_section_pricing($atts, $content = null) {
			extract( shortcode_atts( array(
		'url' => '#'
		), $atts ) );

		
		$html = ' <section class="inner-page">
		       <!-- ======= Deskripsi Product ======= -->
		      <h1 class="text-center mb-5">Deskripsi Harga Product</h1>
		      <div class="container">
		        <div class="container product-desktop">
		          <!-- Shared Hosting -->
		            <div class="card shadow mb-5">
		                <div class="card-body p-5">
		                    <h4 class="mb-4">Shared Hosting</h4>
		                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                        <li class="nav-item" role="presentation">
		                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                        </li>
		                        <li class="nav-item" role="presentation">
		                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                        </li>
		                      </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		                        <table class="table table-borderless">
		                        <tbody>
		                          <tr>
		                            <th scope="col">Model</th>
		                            <th scope="col">Storage</th>
		                            <th scope="col">Transfer</th>
		                            <th scope="col">SSH</th>
		                            <th scope="col">CloudFlare</th>
		                            <th scope="col">CDN</th>
		                            <th scope="col">Price / Month</th>
		                          </tr>
		                          <tr>
		                            <td>Mark</td>
		                            <td>Otto</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                          <tr>
		                            <td>Jacob</td>
		                            <td>Thornton</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                        </tbody>
		                      </table>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		                        <table class="table table-borderless">
		                        <tbody>
		                          <tr>
		                            <th scope="col">Model</th>
		                            <th scope="col">Storage</th>
		                            <th scope="col">Transfer</th>
		                            <th scope="col">SSH</th>
		                            <th scope="col">CloudFlare</th>
		                            <th scope="col">CDN</th>
		                            <th scope="col">Price / Month</th>
		                          </tr>
		                          <tr>
		                            <td>Mark</td>
		                            <td>Otto</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                          <tr>
		                            <td>Jacob</td>
		                            <td>Thornton</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                        </tbody>
		                      </table>
		                      </div>
		                     
		                    </div>
		                     
		                </div>
		            </div>
		            <!-- Cloud Server -->
		            <div class="card shadow mb-5">
		                <div class="card-body p-5">
		                    <h4 class="mb-4">Cloud Server</h4>
		                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                        <li class="nav-item" role="presentation">
		                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                        </li>
		                        <li class="nav-item" role="presentation">
		                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                        </li>
		                      </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab">
		                        <table class="table table-borderless">
		                        <tbody>
		                          <tr>
		                            <th scope="col">Model</th>
		                            <th scope="col">Storage</th>
		                            <th scope="col">Transfer</th>
		                            <th scope="col">SSH</th>
		                            <th scope="col">CloudFlare</th>
		                            <th scope="col">CDN</th>
		                            <th scope="col">Price / Month</th>
		                          </tr>
		                          <tr>
		                            <td>Mark</td>
		                            <td>Otto</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                          <tr>
		                            <td>Jacob</td>
		                            <td>Thornton</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                        </tbody>
		                      </table>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">
		                        <table class="table table-borderless">
		                          <tbody>
		                            <tr>
		                              <th scope="col">Model</th>
		                              <th scope="col">Storage</th>
		                              <th scope="col">Transfer</th>
		                              <th scope="col">SSH</th>
		                              <th scope="col">CloudFlare</th>
		                              <th scope="col">CDN</th>
		                              <th scope="col">Price / Month</th>
		                            </tr>
		                            <tr>
		                              <td>Mark</td>
		                              <td>Otto</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                            </tr>
		                            <tr>
		                              <td>Jacob</td>
		                              <td>Thornton</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                            </tr>
		                          </tbody>
		                        </table>
		                      </div>
		                    </div>
		                </div>
		              </div>
		              <!-- VPS -->
		              <div class="card shadow mb-5">
		                <div class="card-body p-5">
		                  <h4 class="mb-4">VPS</h4>
		                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                        <li class="nav-item" role="presentation">
		                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home2" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                        </li>
		                        <li class="nav-item" role="presentation">
		                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                        </li>
		                      </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
		                        <table class="table table-borderless">
		                        <tbody>
		                          <tr>
		                            <th scope="col">Model</th>
		                            <th scope="col">Storage</th>
		                            <th scope="col">Transfer</th>
		                            <th scope="col">SSH</th>
		                            <th scope="col">CloudFlare</th>
		                            <th scope="col">CDN</th>
		                            <th scope="col">Price / Month</th>
		                          </tr>
		                          <tr>
		                            <td>Mark</td>
		                            <td>Otto</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                          <tr>
		                            <td>Jacob</td>
		                            <td>Thornton</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                        </tbody>
		                      </table>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
		                        <table class="table table-borderless">
		                          <tbody>
		                            <tr>
		                              <th scope="col">Model</th>
		                              <th scope="col">Storage</th>
		                              <th scope="col">Transfer</th>
		                              <th scope="col">SSH</th>
		                              <th scope="col">CloudFlare</th>
		                              <th scope="col">CDN</th>
		                              <th scope="col">Price / Month</th>
		                            </tr>
		                            <tr>
		                              <td>Mark</td>
		                              <td>Otto</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                            </tr>
		                            <tr>
		                              <td>Jacob</td>
		                              <td>Thornton</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                            </tr>
		                          </tbody>
		                        </table>
		                      </div>
		                    </div>
		                </div>
		              </div>
		              <!-- VDS -->
		            <div class="card shadow mb-5">
		                <div class="card-body p-5">
		                    <h4 class="mb-4">VDS</h4>
		                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home3" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                      </li>
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile3" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                      </li>
		                    </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
		                        <table class="table table-borderless">
		                        <tbody>
		                          <tr>
		                            <th scope="col">Model</th>
		                            <th scope="col">Storage</th>
		                            <th scope="col">Transfer</th>
		                            <th scope="col">SSH</th>
		                            <th scope="col">CloudFlare</th>
		                            <th scope="col">CDN</th>
		                            <th scope="col">Price / Month</th>
		                          </tr>
		                          <tr>
		                            <td>Mark</td>
		                            <td>Otto</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td>@mdo</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                          <tr>
		                            <td>Jacob</td>
		                            <td>Thornton</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td>@fat</td>
		                            <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                          </tr>
		                        </tbody>
		                      </table>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab">
		                        <table class="table table-borderless">
		                          <tbody>
		                            <tr>
		                              <th scope="col">Model</th>
		                              <th scope="col">Storage</th>
		                              <th scope="col">Transfer</th>
		                              <th scope="col">SSH</th>
		                              <th scope="col">CloudFlare</th>
		                              <th scope="col">CDN</th>
		                              <th scope="col">Price / Month</th>
		                            </tr>
		                            <tr>
		                              <td>Mark</td>
		                              <td>Otto</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td>@mdo</td>
		                              <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                            </tr>
		                            <tr>
		                              <td>Jacob</td>
		                              <td>Thornton</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td>@fat</td>
		                              <td scope="col" class="align-middle"><button type="button" class="btn btn-warning">Select</button></td>
		                            </tr>
		                          </tbody>
		                        </table>
		                      </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		          
		            <!-- Product versi Mobile -->
		            <div class="container product-mobile m-0 p-0">
		              <!-- Shared Hosting-->
		                <div class="card shadow mb-5">
		                  <div class="card-body p-sm-5">
		                    <h4 class="mb-4">Shared Hosting</h4>
		                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home4" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                      </li>
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                      </li>
		                    </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home4" role="tabpanel" aria-labelledby="pills-home-tab">  
		                        <div class="price-details-slider swiper">
		                          <div class="swiper-wrapper align-items-center">

		                            <div class="swiper-slide">
		                              <div class="row">
		                                <div class="col-6">
		                                  <ul class="list-group">
		                                    <li class="list-group-item border-0">Model</li>
		                                    <li class="list-group-item border-0">Storage</li>
		                                    <li class="list-group-item border-0">Transfer</li>
		                                    <li class="list-group-item border-0">SSL</li>
		                                    <li class="list-group-item border-0">Cloudflare</li>
		                                    <li class="list-group-item border-0">CDN</li>
		                                    <li class="list-group-item border-0">Price/month</li>
		                                  </ul>
		                                </div>
		                                <div class="col-6">
		                                  <ul class="list-group">
		                                    <li class="list-group-item border-0">An item</li>
		                                    <li class="list-group-item border-0">A second item</li>
		                                    <li class="list-group-item border-0">A third item</li>
		                                    <li class="list-group-item border-0">A fourth item</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                  </ul>
		                                </div>
		                                 <div class="col-6 mx-auto text-center mt-4">
		                                  <button type="button" class="btn btn-warning">Select</button>
		                                </div>
		                              </div>
		                            </div>

		                            <div class="swiper-slide">
		                              <div class="row">
		                                <div class="col-6">
		                                  <ul class="list-group">
		                                    <li class="list-group-item border-0">Model</li>
		                                    <li class="list-group-item border-0">Storage</li>
		                                    <li class="list-group-item border-0">Transfer</li>
		                                    <li class="list-group-item border-0">SSL</li>
		                                    <li class="list-group-item border-0">Cloudflare</li>
		                                    <li class="list-group-item border-0">CDN</li>
		                                    <li class="list-group-item border-0">Price/month</li>
		                                  </ul>
		                                </div>
		                                <div class="col-6">
		                                  <ul class="list-group">
		                                    <li class="list-group-item border-0">An item</li>
		                                    <li class="list-group-item border-0">A second item</li>
		                                    <li class="list-group-item border-0">A third item</li>
		                                    <li class="list-group-item border-0">A fourth item</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                  </ul>
		                                </div>
		                                 <div class="col-6 mx-auto text-center mt-4">
		                                  <button type="button" class="btn btn-warning">Select</button>
		                                </div>
		                              </div>
		                            </div>

		                            <div class="swiper-slide">
		                              <div class="row">
		                                <div class="col-6">
		                                  <ul class="list-group">
		                                    <li class="list-group-item border-0">Model</li>
		                                    <li class="list-group-item border-0">Storage</li>
		                                    <li class="list-group-item border-0">Transfer</li>
		                                    <li class="list-group-item border-0">SSL</li>
		                                    <li class="list-group-item border-0">Cloudflare</li>
		                                    <li class="list-group-item border-0">CDN</li>
		                                    <li class="list-group-item border-0">Price/month</li>
		                                  </ul>
		                                </div>
		                                <div class="col-6">
		                                  <ul class="list-group">
		                                    <li class="list-group-item border-0">An item</li>
		                                    <li class="list-group-item border-0">A second item</li>
		                                    <li class="list-group-item border-0">A third item</li>
		                                    <li class="list-group-item border-0">A fourth item</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                    <li class="list-group-item border-0">And a fifth one</li>
		                                  </ul>
		                                </div>
		                                 <div class="col-6 mx-auto text-center mt-4">
		                                  <button type="button" class="btn btn-warning">Select</button>
		                                </div>
		                              </div>
		                            </div>

		                          </div>
		                          <div class="swiper-pagination"></div>
		                        </div>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile4" role="tabpanel" aria-labelledby="pills-profile-tab">
		                       <div class="row">
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">Model</li>
		                              <li class="list-group-item border-0">Storage</li>
		                              <li class="list-group-item border-0">Transfer</li>
		                              <li class="list-group-item border-0">SSL</li>
		                              <li class="list-group-item border-0">Cloudflare</li>
		                              <li class="list-group-item border-0">CDN</li>
		                              <li class="list-group-item border-0">Price/month</li>
		                            </ul>
		                          </div>
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">An item</li>
		                              <li class="list-group-item border-0">A second item</li>
		                              <li class="list-group-item border-0">A third item</li>
		                              <li class="list-group-item border-0">A fourth item</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                            </ul>
		                          </div>
		                           <div class="col-6 mx-auto text-center mt-4">
		                            <button type="button" class="btn btn-warning">Select</button>
		                          </div>
		                        </div>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <!-- Cloud Server -->
		                    <div class="card shadow mb-5">
		                  <div class="card-body p-sm-5">
		                    <h4 class="mb-4">Cloud Server</h4>
		                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home5" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                      </li>
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile5" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                      </li>
		                    </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home5" role="tabpanel" aria-labelledby="pills-home-tab">  
		                        <div class="row">
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">Model</li>
		                              <li class="list-group-item border-0">Storage</li>
		                              <li class="list-group-item border-0">Transfer</li>
		                              <li class="list-group-item border-0">SSL</li>
		                              <li class="list-group-item border-0">Cloudflare</li>
		                              <li class="list-group-item border-0">CDN</li>
		                              <li class="list-group-item border-0">Price/month</li>
		                            </ul>
		                          </div>
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">An item</li>
		                              <li class="list-group-item border-0">A second item</li>
		                              <li class="list-group-item border-0">A third item</li>
		                              <li class="list-group-item border-0">A fourth item</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                            </ul>
		                          </div>
		                           <div class="col-6 mx-auto text-center mt-4">
		                            <button type="button" class="btn btn-warning">Select</button>
		                          </div>
		                        </div>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile5" role="tabpanel" aria-labelledby="pills-profile-tab">
		                       <div class="row">
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">Model</li>
		                              <li class="list-group-item border-0">Storage</li>
		                              <li class="list-group-item border-0">Transfer</li>
		                              <li class="list-group-item border-0">SSL</li>
		                              <li class="list-group-item border-0">Cloudflare</li>
		                              <li class="list-group-item border-0">CDN</li>
		                              <li class="list-group-item border-0">Price/month</li>
		                            </ul>
		                          </div>
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">An item</li>
		                              <li class="list-group-item border-0">A second item</li>
		                              <li class="list-group-item border-0">A third item</li>
		                              <li class="list-group-item border-0">A fourth item</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                            </ul>
		                          </div>
		                           <div class="col-6 mx-auto text-center mt-4">
		                            <button type="button" class="btn btn-warning">Select</button>
		                          </div>
		                        </div>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <!-- VPS -->
		                    <div class="card shadow mb-5">
		                  <div class="card-body p-sm-5">
		                    <h4 class="mb-4">VPS</h4>
		                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home6" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                      </li>
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile6" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                      </li>
		                    </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home6" role="tabpanel" aria-labelledby="pills-home-tab">  
		                        <div class="row">
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">Model</li>
		                              <li class="list-group-item border-0">Storage</li>
		                              <li class="list-group-item border-0">Transfer</li>
		                              <li class="list-group-item border-0">SSL</li>
		                              <li class="list-group-item border-0">Cloudflare</li>
		                              <li class="list-group-item border-0">CDN</li>
		                              <li class="list-group-item border-0">Price/month</li>
		                            </ul>
		                          </div>
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">An item</li>
		                              <li class="list-group-item border-0">A second item</li>
		                              <li class="list-group-item border-0">A third item</li>
		                              <li class="list-group-item border-0">A fourth item</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                            </ul>
		                          </div>
		                          <div class="col-6 mx-auto text-center mt-4">
		                            <button type="button" class="btn btn-warning">Select</button>
		                          </div>
		                        </div>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile6" role="tabpanel" aria-labelledby="pills-profile-tab">
		                       <div class="row">
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">Model</li>
		                              <li class="list-group-item border-0">Storage</li>
		                              <li class="list-group-item border-0">Transfer</li>
		                              <li class="list-group-item border-0">SSL</li>
		                              <li class="list-group-item border-0">Cloudflare</li>
		                              <li class="list-group-item border-0">CDN</li>
		                              <li class="list-group-item border-0">Price/month</li>
		                            </ul>
		                          </div>
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">An item</li>
		                              <li class="list-group-item border-0">A second item</li>
		                              <li class="list-group-item border-0">A third item</li>
		                              <li class="list-group-item border-0">A fourth item</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                            </ul>
		                          </div>
		                           <div class="col-6 mx-auto text-center mt-4">
		                            <button type="button" class="btn btn-warning">Select</button>
		                          </div>
		                        </div>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <!-- VDS -->
		                    <div class="card shadow mb-5">
		                  <div class="card-body p-sm-5">
		                    <h4 class="mb-4">VDS</h4>
		                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home7" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
		                      </li>
		                      <li class="nav-item" role="presentation">
		                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile7" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
		                      </li>
		                    </ul>
		                    <div class="tab-content" id="pills-tabContent">
		                      <div class="tab-pane fade show active" id="pills-home7" role="tabpanel" aria-labelledby="pills-home-tab">  
		                        <div class="row">
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">Model</li>
		                              <li class="list-group-item border-0">Storage</li>
		                              <li class="list-group-item border-0">Transfer</li>
		                              <li class="list-group-item border-0">SSL</li>
		                              <li class="list-group-item border-0">Cloudflare</li>
		                              <li class="list-group-item border-0">CDN</li>
		                              <li class="list-group-item border-0">Price/month</li>
		                            </ul>
		                          </div>
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">An item</li>
		                              <li class="list-group-item border-0">A second item</li>
		                              <li class="list-group-item border-0">A third item</li>
		                              <li class="list-group-item border-0">A fourth item</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                            </ul>
		                          </div>
		                          <div class="col-6 mx-auto text-center mt-4">
		                            <button type="button" class="btn btn-warning">Select</button>
		                          </div>
		                        </div>
		                      </div>
		                      <div class="tab-pane fade" id="pills-profile7" role="tabpanel" aria-labelledby="pills-profile-tab">
		                       <div class="row">
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">Model</li>
		                              <li class="list-group-item border-0">Storage</li>
		                              <li class="list-group-item border-0">Transfer</li>
		                              <li class="list-group-item border-0">SSL</li>
		                              <li class="list-group-item border-0">Cloudflare</li>
		                              <li class="list-group-item border-0">CDN</li>
		                              <li class="list-group-item border-0">Price/month</li>
		                            </ul>
		                          </div>
		                          <div class="col-6">
		                            <ul class="list-group">
		                              <li class="list-group-item border-0">An item</li>
		                              <li class="list-group-item border-0">A second item</li>
		                              <li class="list-group-item border-0">A third item</li>
		                              <li class="list-group-item border-0">A fourth item</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                              <li class="list-group-item border-0">And a fifth one</li>
		                            </ul>
		                          </div>
		                           <div class="col-6 mx-auto text-center mt-4">
		                            <button type="button" class="btn btn-warning">Select</button>
		                          </div>
		                        </div>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		            </div>
		            <!-- End Deskripsi Product -->
		      </div>
		      
		    </section>';

		  return $html;
	}

	

	public function faq_section_pricing($atts, $content = null) {
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
