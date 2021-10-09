@extends("layouts.app")
@section("section")
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
        @include("layouts.navbar")
      <!-- main body - start
      ================================================== -->
      <main>

        <!-- cart_sidebar - start
        ================================================== -->
        @include("layouts.cart")
        <!-- cart_sidebar - end
        ================================================== -->

        <!-- slider_section - start
        ================================================== -->
        <section class="slider_section slider_dark" style="background-image: url(assets/images/backgrounds/bg_09.png);">
          <div class="main_slider pb-0 wow fadeInUp" data-wow-delay=".1s">
            <div class="slider_item text-white" style="background-image: url(assets/images/slider/img_05.jpg);">
              <div class="container">
                <div class="row justify-content-lg-start justify-content-md-center">
                  <div class="col-lg-6 col-md-8">
                    <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp" data-delay=".2s">
                      Time to discover Bellicious Bakery
                    </h3>
                    <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                      <li><a class="btn btn_primary text-uppercase" href="menu">testy Cake</a></li>
                      <li><a class="btn btn_border border_white text-uppercase" href="shop_details">Learn more</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="shape_image">
                <img src="assets/images/slider/shape_01.png" alt="image_not_found">
              </div>
            </div>

            <div class="slider_item text-white" style="background-image: url(assets/images/slider/img_04.jpg);">
              <div class="container">
                <div class="row justify-content-lg-start justify-content-md-center">
                  <div class="col-lg-6 col-md-8">
                    <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp" data-delay=".2s">
                      Time to discover Bellicious Bakery
                    </h3>
                    <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                      <li><a class="btn btn_primary text-uppercase" href="menu">testy Cake</a></li>
                      <li><a class="btn btn_border border_white text-uppercase" href="shop_details">Learn more</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="shape_image">
                <img src="assets/images/slider/shape_01.png" alt="image_not_found">
              </div>
            </div>

            <div class="slider_item text-white" style="background-image: url(assets/images/slider/img_02.jpg);">
              <div class="container">
                <div class="row justify-content-lg-start justify-content-md-center">
                  <div class="col-lg-6 col-md-8">
                    <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp" data-delay=".2s">
                      Time to discover Bellicious Bakery
                    </h3>
                    <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                      <li><a class="btn btn_primary text-uppercase" href="menu">testy Cake</a></li>
                      <li><a class="btn btn_border border_white text-uppercase" href="shop_details">Learn more</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="shape_image">
                <img src="assets/images/slider/shape_01.png" alt="image_not_found">
              </div>
            </div>
          </div>
          <div class="carousel_nav">
            <button class="main_left_arrow" type="button"><i class="fal fa-arrow-up"></i></button>
            <button class="main_right_arrow" type="button"><i class="fal fa-arrow-down"></i></button>
          </div>
          <div class="slider_social_wrap">
            <div class="container maxw_1560">
              <div class="row align-items-center justify-content-lg-between">
              </div>
            </div>
          </div>
        </section>
        <!-- slider_section - end
        ================================================== -->

        <!-- feature_primary_section - start
        ================================================== -->
        <section class="feature_primary_section">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".1s">
                  <div class="item_icon">
                    <span class="item_serial">1</span>
                    <img src="assets/images/feature/icon_01.png" alt="icon_not_found">
                  </div>
                  <h3 class="item_title text-uppercase">awesomae aroma</h3>
                  <p class="mb-0">
                    The coffee is brewed by first roasting the green coffee beans
                  </p>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".2s">
                  <div class="item_icon">
                    <span class="item_serial">2</span>
                    <img src="assets/images/feature/icon_02.png" alt="icon_not_found">
                  </div>
                  <h3 class="item_title text-uppercase">high quality</h3>
                  <p class="mb-0">
                    The coffee is brewed by first roasting the green coffee beans
                  </p>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".3s">
                  <div class="item_icon">
                    <span class="item_serial">3</span>
                    <img src="assets/images/feature/icon_03.png" alt="icon_not_found">
                  </div>
                  <h3 class="item_title text-uppercase">pure grades</h3>
                  <p class="mb-0">
                    The coffee is brewed by first roasting the green coffee beans
                  </p>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".4s">
                  <div class="item_icon">
                    <span class="item_serial">4</span>
                    <img src="assets/images/feature/icon_04.png" alt="icon_not_found">
                  </div>
                  <h3 class="item_title text-uppercase">proper roasting</h3>
                  <p class="mb-0">
                    The coffee is brewed by first roasting the green coffee beans
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- feature_primary_section - end
        ================================================== -->

        <!-- about_section - start
        ================================================== -->
        <section class="about_section sec_ptb_120">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 col-md-6 order-last">
                <div class="about_image1 wow fadeInRight" data-wow-delay=".1s">
                  <img src="assets/images/about/img_04.jpg" alt="image_not_found">
                  <!-- <div class="year_content_wrap text-uppercase" style="background-image: url(assets/images/about/bg_01.png);">
                    <div class="content_wrap">
                      <span>27 <small>+ years of</small></span>
                      <strong>experience</strong>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="about_content">
                  <div class="section_title text-uppercase">
                    <h2 class="small_title"><i class="fas fa-birthday-cake"></i> about us</h2>
                    <h3 class="big_title wow fadeInUp" data-wow-delay=".1s">
                      There is all about Bellicious Bakery
                    </h3>
                  </div>
                  <ul class="about_info ul_li_block">
                    <li class="wow fadeInUp" data-wow-delay=".3s">
                      <h4 class="text-uppercase"><i class="far fa-square-full"></i> What we do?</h4>
                      <p class="mb-0">
                      In 2020, We are taking a startup of the Bellicious Bakery whose main branch is in Hyderabad. Our  aim behind the online bakery is to save the time of our customers by providing them hassle-free online delivery.
                      </p>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".4s">
                      <h4 class="text-uppercase"><i class="far fa-square-full"></i> Our Aims</h4>
                      <p class="mb-0">
                      Bellicious Bakery offers a homestyle bakery experience. Our vision is to provide quick delivery of bakery products to our customers, with our main focus is to deliver satisfying baked products.
                      </p>
                    </li>
                  </ul>
                  <ul class="btns_group ul_li wow fadeInUp" data-wow-delay=".5s">
                    <li>
                      <a class="btn btn_primary text-uppercase" href="aboutus">Learn more</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- about_section - end
        ================================================== -->

        <!-- recipe_menu_section - start
        ================================================== -->
        <section class="recipe_menu_section sec_ptb_120 deco_wrap text-white" style="background-image: url(assets/images/backgrounds/bg_08.png);">
            <div class="container">
              <div class="section_title text-uppercase text-center">
                <h2 class="small_title text-white wow fadeInUp" data-wow-delay=".2s"><i class="fas fa-birthday-cake"></i> Our Menu</h2>
              </div>

              <ul class="filters-button-group style_2 ul_li_center wow fadeInUp" data-wow-delay=".4s">
                <li><button class="button text-uppercase active" data-filter="*">all</button></li>
                <li><button class="button text-uppercase" data-filter=".chocolate">chocolate</button></li>
                <li><button class="button text-uppercase" data-filter=".coffee">coffee</button></li>
                <li><button class="button text-uppercase" data-filter=".sandwiches">dry cakes</button></li>
                <li><button class="button text-uppercase" data-filter=".sweets">sweets</button></li>
                <li><button class="button text-uppercase" data-filter=".blacktea">sandwiches and chicken bread</button></li>
                <li><button class="button text-uppercase" data-filter=".greantea">bread and rusks</button></li>
              </ul>

              <div class="recipe_item_grid grid wow fadeInUp" data-wow-delay=".5s">
                <div class="element-item chocolate greantea " data-category="chocolate">
                  <div class="recipe_item style_2">
                    <div class="content_col">
                      <a class="item_image" href="shop_details">
                        <img src="assets/images/menu/img_01.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details">Chocolate Cake</a>
                        </h3>
                        <p class="mb-0">
                        A cake, laden with pistachios and almonds and frosted with chocolate icing Size.
                        </p>
                      </div>
                    </div>
                    <div class="content_col">
                      <strong class="item_price">
                        <sub>RS</sub>300
                      </strong>
                    </div>
                  </div>
                </div>

                <div class="element-item coffee blacktea " data-category="coffee">
                  <div class="recipe_item style_2">
                    <div class="content_col">
                      <a class="item_image" href="shop_details">
                        <img src="assets/images/menu/img_02.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details">Tutti Frutti Cake</a>
                        </h3>
                        <p class="mb-0">
                        A cake, laden with pistachios and almonds and frosted with chocolate icing Size.
                        </p>
                      </div>
                    </div>
                    <div class="content_col">
                      <strong class="item_price">
                        <sub>RS</sub>350
                      </strong>
                    </div>
                  </div>
                </div>

                <div class="element-item sandwiches sweets " data-category="sandwiches">
                  <div class="recipe_item style_2">
                    <div class="content_col">
                      <a class="item_image" href="shop_details">
                        <img src="assets/images/menu/img_03.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details">Coconut Macaroon</a>
                        </h3>
                        <p class="mb-0">
                        A cake, laden with pistachios and almonds and frosted with chocolate icing Size.
                        </p>
                      </div>
                    </div>
                    <div class="content_col">
                      <strong class="item_price">
                        <sub>RS</sub>350
                      </strong>
                    </div>
                  </div>
                </div>

                <div class="element-item sweets sandwiches " data-category="sweets">
                  <div class="recipe_item style_2">
                    <div class="content_col">
                      <a class="item_image" href="shop_details">
                        <img src="assets/images/menu/img_04.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details">Jelly Cake</a>
                        </h3>
                        <p class="mb-0">
                        A cake, laden with pistachios and almonds and frosted with chocolate icing Size.
                        </p>
                      </div>
                    </div>
                    <div class="content_col">
                      <strong class="item_price">
                        <sub>RS</sub>350
                      </strong>
                    </div>
                  </div>
                </div>

                <div class="element-item blacktea coffee " data-category="blacktea">
                  <div class="recipe_item style_2">
                    <div class="content_col">
                      <a class="item_image" href="shop_details">
                        <img src="assets/images/menu/img_05.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details">Bombay Coffee Cake</a>
                        </h3>
                        <p class="mb-0">
                        A cake, laden with pistachios and almonds and frosted with chocolate icing Size.
                        </p>
                      </div>
                    </div>
                    <div class="content_col">
                      <strong class="item_price">
                        <sub>RS</sub>300
                      </strong>
                    </div>
                  </div>
                </div>

                <div class="element-item greantea chocolate " data-category="greantea">
                  <div class="recipe_item style_2">
                    <div class="content_col">
                      <a class="item_image" href="shop_details">
                        <img src="assets/images/menu/img_08.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details">Double Choclate</a>
                        </h3>
                        <p class="mb-0">
                        A cake, laden with pistachios and almonds and frosted with chocolate icing Size.
                        </p>
                      </div>
                    </div>
                    <div class="content_col">
                      <strong class="item_price">
                        <sub>RS</sub>400
                      </strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="deco_big_text text-uppercase text-center wow fadeInUp" data-wow-delay=".1s">
              Bellicious
            </div>
            <div class="scratch scratch_top">
              <img src="assets/images/decorations/scratch_02.png" alt="image_not_found">
            </div>
            <div class="scratch scratch_bottom">
              <img src="assets/images/decorations/scratch_01.png" alt="image_not_found">
            </div>
          </section>
        <!-- recipe_menu_section - end
        ================================================== -->

        <!-- shop_section - start
        ================================================== -->
        <section class="shop_section sec_ptb_120 bg_gray">
            <div class="container">
              <div class="section_title text-uppercase">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-8">
                    <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-birthday-cake"></i> special online shop</h2>
                    <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">
                      Our popular product
                    </h3>
                  </div>

                  <div class="col-lg-6 col-md-4">
                    <div class="abtn_wrap text-lg-end text-md-end wow fadeInUp" data-wow-delay=".3s">
                      <a class="btn btn_border border_black" href="shop.html">See all product</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center">
                @foreach($products as $product)

                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="shop_card wow fadeInUp" data-wow-delay=".1s">
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
                    <a class="item_image" href="shop_details">
                      <img src="{{ asset('images/'.$product->product_image) }}" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h3 class="item_title text-uppercase">
                        <a href="shop_details">{{ $product->product_name }}</a>
                      </h3>
                      <div class="btns_group">
                        <span class="item_price bg_default_brown">RS.{{ $product->product_price }}</span>
                        <button class="btn btn_border border_black text-uppercase" onclick="addToCart({{ $product->id }}, 1)">Add To Cart</button>
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach


              </div>
            </div>
          </section>
          <!-- shop_section - end
          ================================================== -->

        <!-- testimonial_section - start
        ================================================== -->
        <section class="testimonial_section sec_ptb_120 deco_wrap" style="background-image: url(assets/images/backgrounds/bg_02.png);">
          <div class="container">
            <div class="testimonial_slider wow fadeInUp" data-wow-delay=".2s">
              <div class="testimonial_item_1 slider_item">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="item_image">
                      <img src="assets/images/testimonial/img_03.jpeg" alt="image_not_found">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="item_content">
                      <div class="section_title text-uppercase">
                        <h3 class="small_title"><i class="fas fa-birthday-cake"></i> Client Testimonial</h3>
                        <h4 class="big_title">
                          Our client say something about Bellicious
                        </h4>
                      </div>
                      <p>
                      I've got ordered a Bombay Coffee cake ,the quality was superb and it was too delicious.
                      </p>
                      <div class="testimonial_admin text-uppercase">
                        <h5 class="admin_name">Ateeb Adil</h5>
                        <ul class="rating_star ul_li">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="far fa-star"></i></li>
                        </ul>
                        <!-- <span class="admin_title">Founder & CO</span> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="testimonial_item_1 slider_item">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="item_image">
                      <img src="assets/images/testimonial/img_04.jpeg" alt="image_not_found">
                      <!-- <div class="quote_icon">
                        <img src="assets/images/testimonial/icon_01.png" alt="image_not_found">
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="item_content">
                      <div class="section_title text-uppercase">
                        <h3 class="small_title"><i class="fas fa-birthday-cake"></i> Client Testimonial</h3>
                        <h4 class="big_title">
                          Our client say something about Bellicious
                        </h4>
                      </div>
                      <p>
                      I ordered cake for my birthday, and I can must say now it was extremely good in taste and in look too, Including me & my family all guests loved the cake so so much.
                      </p>
                      <div class="testimonial_admin text-uppercase">
                        <h5 class="admin_name">Ali Sasoli</h5>
                        <ul class="rating_star ul_li">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="far fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="testimonial_item_1 slider_item">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="item_image">
                      <img src="assets/images/testimonial/img_05.jpeg" alt="image_not_found">
                      <!-- <div class="quote_icon">
                        <img src="assets/images/testimonial/icon_01.png" alt="image_not_found">
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="item_content">
                      <div class="section_title text-uppercase">
                        <h3 class="small_title"><i class="fas fa-birthday-cake"></i> Client Testimonial</h3>
                        <h4 class="big_title">
                          Our client say something about cafenod
                        </h4>
                      </div>
                      <p>
                         Everything is awesome. presentation, designing and carving. perfect hygienic environment. I will strongly recommend Bellicious Bakery.
                      </p>
                      <div class="testimonial_admin text-uppercase">
                        <h5 class="admin_name">Faaiz Ahmed</h5>
                        <ul class="rating_star ul_li">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="far fa-star"></i></li>
                        </ul>
                        <!-- <span class="admin_title">Founder & CO</span> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
                    <a class="brand_link" href="index_1.html">
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
