@extends('layouts.app')
@section('section')

		<!-- body_wrap - start -->
		<div class="body_wrap">

			<!-- backtotop - start -->
			<div class="backtotop">
				<a href="#" class="scroll">
					<i class="far fa-arrow-up"></i>
					<i class="far fa-arrow-up"></i>
				</a>
			</div>
			<!-- backtotop - end -->

			<!-- preloader - start -->
			<div id="preloader"></div>
			<!-- preloader - end -->

      <!-- header_section - start
      ================================================== -->
      @include('layouts.navbar')
			<!-- main body - start
			================================================== -->
			<main>

        <!-- cart_sidebar - start
        ================================================== -->
            @include("layouts.cart")
        <!-- cart_sidebar - end
        ================================================== -->

				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section text-uppercase" style="background-image: url(assets/images/breadcrumb/breadcrumb_bg_01.jpg);">
					<div class="container">
						<h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Shop Details</h1>
						<ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
							<li><a href="Home"><i class="fas fa-home"></i> Home</a></li>
							<li>Shop Details</li>
						</ul>
					</div>
					<div class="breadcrumb_icon_wrap">
						<div class="container">
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<!-- details_section - start
        ================================================== -->
        <section class="details_section shop_details sec_ptb_120 bg_default_gray">
          <div class="container">

          	<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
          		<div class="col-lg-6 col-md-7">
          			<div class="details_image_wrap wow fadeInUp" data-wow-delay=".1s">
          				<div class="details_image_carousel">
          					<div class="slider_item">
          						<img src="assets/images/shop/img_01.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_02.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_03.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_04.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_05.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_06.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_02.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_04.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_06.png" alt="image_not_found">
          					</div>
          				</div>

          				<div class="details_image_carousel_nav">
          					<div class="slider_item">
          						<img src="assets/images/shop/img_01.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_02.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_03.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_04.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_05.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_06.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_02.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_04.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_06.png" alt="image_not_found">
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="col-lg-6 col-md-7">
          			<div class="details_content wow fadeInUp" data-wow-delay=".2s">
          				<div class="details_flex_title">
          					<h2 class="details_title text-uppercase">Bombay Coffee Cake</h2>
          					<div class="details_review">
          						<ul class="rating_star ul_li">
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="far fa-star"></i></li>
          						</ul>
          						<span class="review_text">03 - Customar Review</span>
          					</div>
          				</div>
          				<p>
						  A cake, laden with pistachios and almonds and frosted with chocolate icing Size.          				</p>
          				<div class="details_price">
          					<strong class="price_text">RS300</strong>
          					<span class="in_stuck"><i class="fal fa-check"></i> In stock</span>
          				</div>

          				<ul class="btns_group ul_li">
          					<li>
          						<div class="quantity_input quantity_boxed">
          							<h4 class="quantity_title text-uppercase">Quantity</h4>
          							<form action="#">
          								<button type="button" class="input_number_decrement">–</button>
          								<input class="input_number" type="text" value="1">
          								<button type="button" class="input_number_increment">+</button>
          							</form>
          						</div>
          					</li>
          					<li><a class="btn btn_secondary text-uppercase" href="">Add To Cart</a></li>
          				</ul>
          				<div class="details_wishlist_btn">
          					<a href="#!"><i class="fas fa-heart mr-1"></i> Add to watch list</a>
          				</div>
          				<div class="details_share_links">
          					<h4 class="list_title"><i class="fas fa-share mr-1"></i> Share</h4>
          					<ul class="social_links social_icons ul_li">
          						<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#!"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#!"><i class="fab fa-behance"></i></a></li>
          					</ul>
          				</div>
          			</div>
          		</div>
          	</div>

          	<div class="product_description_wrap wow fadeInUp" data-wow-delay=".3s">
          		<ul class="tabs_nav ul_li nav" role="tablist">
          			<li>
          				<button class="active" data-bs-toggle="tab" data-bs-target="#product_description" type="button" role="tab" aria-selected="true">Product Details</button>
          			</li>
          			<li>
          				<button data-bs-toggle="tab" data-bs-target="#product_additional_info" type="button" role="tab" aria-selected="false">Additionnal Imformation</button>
          			</li>
          			<li>
          				<button data-bs-toggle="tab" data-bs-target="#product_review" type="button" role="tab" aria-selected="false">Review (3)</button>
          			</li>
          		</ul>
          		<div class="tab-content">
          			<div class="tab-pane fade show active" id="product_description" role="tabpanel">
          				<p class="mb-0">
						  A cake, laden with pistachios and almonds and frosted with chocolate icing Size.A cake, laden with pistachios and almonds and frosted with chocolate icing Size.A cake, laden with pistachios and almonds and frosted with chocolate icing Size.A cake, laden with pistachios and almonds and frosted with chocolate icing Size.          				</p>
          			</div>
          			<div class="tab-pane fade" id="product_additional_info" role="tabpanel">
          				<p class="mb-0">
          					Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proideny.mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  cupidaey.
          				</p>
          			</div>
          			<div class="tab-pane fade" id="product_review" role="tabpanel">
          				<p class="mb-0">
          					Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proideny.mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  cupidaey.
          				</p>
          			</div>
          		</div>
          	</div>

          	<div class="related_products">
          		<h4 class="area_title text-uppercase mb-0 wow fadeInUp" data-wow-delay=".1s">Related Product</h4>
          		<div class="row">
          			<div class="col-lg-4 col-md-6 col-sm-6">
          				<div class="shop_card wow fadeInUp" data-wow-delay=".2s">
          					<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          					<div class="share_btns">
          						<button type="button" class="share_btn">
          							<i class="fal fa-share-alt"></i>
          						</button>
          						<ul class="ul_li">
          							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          						</ul>
          					</div>
          					<a class="item_image" href="shop_details.html">
          						<img src="assets/images/shop/img_01.png" alt="image_not_found">
          					</a>
          					<div class="item_content">
          						<h3 class="item_title text-uppercase">
          							<a href="shop_details.html">Bombay Coffee Cake</a>
          						</h3>
          						<div class="btns_group">
          							<span class="item_price bg_default_brown">RS300</span>
          							<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          						</div>
          					</div>
          				</div>
          			</div>

          			<div class="col-lg-4 col-md-6 col-sm-6">
          				<div class="shop_card wow fadeInUp" data-wow-delay=".3s">
          					<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          					<div class="share_btns">
          						<button type="button" class="share_btn">
          							<i class="fal fa-share-alt"></i>
          						</button>
          						<ul class="ul_li">
          							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          						</ul>
          					</div>
          					<a class="item_image" href="shop_details.html">
          						<img src="assets/images/shop/img_02.png" alt="image_not_found">
          					</a>
          					<div class="item_content">
          						<h3 class="item_title text-uppercase">
          							<a href="shop_details.html">Cream Cake</a>
          						</h3>
          						<div class="btns_group">
          							<span class="item_price bg_default_brown">RS300</span>
          							<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          						</div>
          					</div>
          				</div>
          			</div>

          			<div class="col-lg-4 col-md-6 col-sm-6">
          				<div class="shop_card wow fadeInUp" data-wow-delay=".4s">
          					<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          					<div class="share_btns">
          						<button type="button" class="share_btn">
          							<i class="fal fa-share-alt"></i>
          						</button>
          						<ul class="ul_li">
          							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          						</ul>
          					</div>
          					<a class="item_image" href="shop_details.html">
          						<img src="assets/images/shop/img_03.png" alt="image_not_found">
          					</a>
          					<div class="item_content">
          						<h3 class="item_title text-uppercase">
          							<a href="shop_details.html">Jelly Cake</a>
          						</h3>
          						<div class="btns_group">
          							<span class="item_price bg_default_brown">RS350</span>
          							<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          						</div>
          					</div>
          				</div>
          			</div>
          		</div>
          	</div>

          </div>
        </section>
        <!-- details_section - end
        ================================================== -->

			</main>
			<!-- main body - end
			================================================== -->

			<!-- footer_section - start
			================================================== -->
		<footer class="footer_section text-white deco_wrap" style="background-image: url(assets/images/backgrounds/bg_05.png);">
        <div class="overlay"></div>
        <div class="footer_widget_area">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-6 col-sm-7">
                <div class="footer_subscribe_form text-center">
                  <form action="#">
                    <div class="form_item wow fadeInUp" data-wow-delay=".2s">
                      <!-- <input type="email" name="email" placeholder="Enter your email"> -->
                      <!-- <button class="btn btn_primary text-uppercase" type="submit">Subscribe Now</button> -->
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="row justify-content-lg-between">
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer_widget footer_about wow fadeInUp" data-wow-delay=".1s">
                  <div class="brand_logo">
                    <a class="brand_link" href="Home">
                      <img src="assets/images/logo/logo_white_1x.png" srcset="assets/images/logo/logo_white_2x.png 2x" alt="logo_not_found">
                    </a>
                  </div>
                  <p>
                  In 2020, We are taking a startup of the Bellicious Bakery whose main branch is in Hyderabad. Our  aim behind the online bakery is to save the time of our customers by providing them hassle-free online delivery.
                  </p>
                  <ul class="social_links social_icons ul_li">
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                    <!-- <li><a href="#!"><i class="fab fa-behance"></i></a></li> -->
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer_widget footer_contact wow fadeInUp" data-wow-delay=".2s">
                  <h3 class="footer_widget_title text-uppercase">Contact us</h3>
                  <ul class="ul_li_block">
                    <li><strong class="text-uppercase">Adress:</strong>Autobahn, Hyderabad<br>Shop no: 56, opposite shama tika</li>
                    <li><strong class="text-uppercase">Mail:</strong> Belliciousbakery@gmail.com</li>
                    <li><strong class="text-uppercase">Phone:</strong> +923125344478</li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer_widget footer_opening_time wow fadeInUp" data-wow-delay=".3s">
                  <h3 class="footer_widget_title text-uppercase">Opening Hours</h3>
                  <ul class="ul_li_block">
                    <li>
                      Monday
                      <span>8:00AM - 10:00PM</span>
                    </li>
                    <li>
                      Tuesday
                      <span>8:00AM - 10:00PM</span>
                    </li>
                    <li>
                      Wednesday
                      <span>10:00AM - 12:00PM</span>
                    </li>
                    <li>
                      Thursday
                      <span>10:00AM - 12:00PM</span>
                    </li>
                    <li>
                      Friday
                      <span>8:00AM - 7:00PM</span>
                    </li>
                    <li>
                      Saturday
                      <span>8:00AM - 10:00PM</span>
                    </li>
                    <li>
                      Sunday
                      <span>closed</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer_widget footer_recent_post wow fadeInUp" data-wow-delay=".4s">
                  <h3 class="footer_widget_title text-uppercase">Recent News</h3>

                  <div class="recent_post">
                    <a class="item_image" href="blog_details.html">
                      <img src="assets/images/recent_post/img_01.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h4 class="item_title">
                        <a href="blog_details.html">White Round Cake</a>
                      </h4>
                      <span class="post_date text-uppercase">September 3 - 2021</span>
                    </div>
                  </div>

                  <div class="recent_post">
                    <a class="item_image" href="blog_details.html">
                      <img src="assets/images/recent_post/img_02.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h4 class="item_title">
                        <a href="blog_details.html">Chocolate Mousse Cake</a>
                      </h4>
                      <span class="post_date text-uppercase">September 3 - 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
			<!-- footer_section - end
			================================================== -->

		</div>
		<!-- body_wrap - end -->
@endsection
