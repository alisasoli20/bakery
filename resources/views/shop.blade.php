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
						<h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Online Shop</h1>
						<ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
							<li><a href="Home"><i class="fas fa-home"></i> Home</a></li>
							<li>Our Shop</li>
						</ul>
					</div>
					<div class="breadcrumb_icon_wrap">
						<div class="container">
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<!-- shop_section - start
        ================================================== -->
        <section class="shop_section sec_ptb_120 bg_default_gray">
          <div class="container">
          	<ul class="filters-button-group ul_li_center wow fadeInUp" data-wow-delay=".1s">
          		<li><button class="button text-uppercase active" data-filter="*">all</button></li>
          		<li><button class="button text-uppercase" data-filter=".chocolate">chocolate</button></li>
          		<li><button class="button text-uppercase" data-filter=".coffee">coffee</button></li>
          		<li><button class="button text-uppercase" data-filter=".sandwiches">sandwiches</button></li>
          		<li><button class="button text-uppercase" data-filter=".sweets">sweets</button></li>
          		<li><button class="button text-uppercase" data-filter=".blacktea">black tea</button></li>
          		<li><button class="button text-uppercase" data-filter=".greantea">grean tea</button></li>
          	</ul>

          	<div class="shop_filter_bar">
          		<div class="row">
          			<div class="col-lg-6">
          				<form action="#">
          					<div class="pricing_range wow fadeInUp" data-wow-delay=".2s">
          						<h4 class="item_title text-uppercase">Price range</h4>
          						<div class="price-range-area">
          							<div id="slider-range" class="slider-range"></div>
          							<div class="price-text d-flex align-items-center">
          								<span>Price:</span>
          								<input type="text" id="amount" readonly>
          							</div>
          						</div>
          					</div>
          				</form>
          			</div>

          			<div class="col-lg-6">
          				<div class="shop_filter_tags wow fadeInUp" data-wow-delay=".1s">
          					<h4 class="item_title text-uppercase">Popular tag</h4>
          					<ul class="ul_li">
          						<li><a href="#!">New</a></li>
          						<li><a href="#!">Top</a></li>
          						<li><a href="#!">Sale</a></li>
          						<li><a href="#!">Coffee</a></li>
          						<li><a href="#!">Beans</a></li>
          					</ul>
          				</div>
          			</div>
          		</div>
          	</div>

          	<div class="shop_filter_grid grid wow fadeInUp" data-wow-delay=".3s">
          		<div class="element-item chocolate greantea " data-category="chocolate">
          			<div class="shop_card">
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
          						<a href="shop_details.html">Testy coffee stimy</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item coffee blacktea " data-category="coffee">
          			<div class="shop_card">
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
          						<a href="shop_details.html">americano pure grades</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item sandwiches sweets " data-category="sandwiches">
          			<div class="shop_card">
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
          						<a href="shop_details.html">indian Roasting pack</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item w-100">
          			<div class="shop_offer_banner text-white" style="background-image: url(assets/images/backgrounds/bg_10.jpg);">
          				<div class="item_content">
          					<h4 class="item_title text-white text-uppercase">Coffee Bean & Super Cup</h4>
          					<div class="discount_percentage">20%</div>
          					<p>
          						Offer Foy Only Sunday
          					</p>
          				</div>
          			</div>
          		</div>

          		<div class="element-item sweets sandwiches " data-category="sweets">
          			<div class="shop_card">
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
          					<img src="assets/images/shop/img_04.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">bangladeshi organic grades</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item blacktea coffee " data-category="blacktea">
          			<div class="shop_card">
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
          					<img src="assets/images/shop/img_05.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">arvica coffee pack</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item greantea chocolate " data-category="greantea">
          			<div class="shop_card">
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
          					<img src="assets/images/shop/img_06.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">americano pure grades</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>
          	</div>

          	<ul class="pagination_nav ul_li_center">
          		<li><a href="#!"><i class="fal fa-angle-double-left"></i></a></li>
          		<li class="active"><a href="#!">1</a></li>
          		<li><a href="#!">2</a></li>
          		<li><a href="#!">3</a></li>
          		<li><a href="#!"><i class="fal fa-angle-double-right"></i></a></li>
          	</ul>
          </div>
        </section>
        <!-- shop_section - end
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
                  <h2 class="form_title text-uppercase wow fadeInUp" data-wow-delay=".1s">Coffee Build your Fresh mind</h2>
                  <form action="#">
                    <div class="form_item wow fadeInUp" data-wow-delay=".2s">
                      <input type="email" name="email" placeholder="Enter your email">
                      <button class="btn btn_primary text-uppercase" type="submit">Subscribe Now</button>
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
                    Rorem ipsum dolorconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaminventore veritatis et.orem ipsum dolorconsectetur adipisicing elit, sed do eiusmod tempor incididunt aneye.
                  </p>

                  <ul class="social_links social_icons ul_li">
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#!"><i class="fab fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer_widget footer_contact wow fadeInUp" data-wow-delay=".2s">
                  <h3 class="footer_widget_title text-uppercase">Contact us</h3>
                  <ul class="ul_li_block">
                    <li><strong class="text-uppercase">Adress:</strong> 8638 Amarica Stranfod Mailbon Star</li>
                    <li><strong class="text-uppercase">Mail:</strong> Israfilsupol836@gmail.com</li>
                    <li><strong class="text-uppercase">Phone:</strong> +7464 0187 3535 645</li>
                    <li><strong class="text-uppercase">Fax id:</strong> +9 659459 49594</li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer_widget footer_opening_time wow fadeInUp" data-wow-delay=".3s">
                  <h3 class="footer_widget_title text-uppercase">Opening Hours</h3>
                  <ul class="ul_li_block">
                    <li>
                      Monday
                      <span>9:00 - 18:00</span>
                    </li>
                    <li>
                      tuesday
                      <span>10:00 - 18:00</span>
                    </li>
                    <li>
                      wednestday
                      <span>11:00 - 18:00</span>
                    </li>
                    <li>
                      Thusday
                      <span>12:00 - 18:00</span>
                    </li>
                    <li>
                      Friday
                      <span>14:00 - 18:00</span>
                    </li>
                    <li>
                      saterday
                      <span>16:00 - 18:00</span>
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
                      <img src="assets/images/recent_post/img_01.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h4 class="item_title">
                        <a href="blog_details.html">Best Smell of Americano Coffee Trins</a>
                      </h4>
                      <span class="post_date text-uppercase">December 30 - 2021</span>
                    </div>
                  </div>

                  <div class="recent_post">
                    <a class="item_image" href="blog_details.html">
                      <img src="assets/images/recent_post/img_02.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h4 class="item_title">
                        <a href="blog_details.html">Best Smell of Americano Coffee Trins</a>
                      </h4>
                      <span class="post_date text-uppercase">December 30 - 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="footer_bottom text-center">
            <p class="copyright_text mb-0 wow fadeInUp" data-wow-delay=".2s">Copyright@ 2021 Desing by <a class="btn_text" href="https://themeforest.net/user/xpressrow"><span>Xpressrow</span></a></p>
          </div>
        </div>
      </footer>
			<!-- footer_section - end
			================================================== -->

		</div>
@endsection
