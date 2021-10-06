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

        <!-- breadcrumb_section - start
        ================================================== -->
        <section class="breadcrumb_section text-uppercase" style="background-image: url(assets/images/breadcrumb/breadcrumb_bg_01.jpg);">
          <div class="container">
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Our Menu</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
              <li><a href="index_1.html"><i class="fas fa-home"></i> Home</a></li>
              <li>Our Menu</li>
            </ul>
          </div>
          <div class="breadcrumb_icon_wrap">
            <div class="container">

            </div>
          </div>
        </section>
        <!-- breadcrumb_section - end
        ================================================== -->

        <!-- recipe_menu_section - start
        ================================================== -->
        <section class="recipe_menu_section sec_ptb_120 bg_gray deco_wrap">
          <div class="container">
          <ul class="filters-button-group style_3 ul_li_center wow fadeInUp" data-wow-delay=".4s">
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
                      <a class="item_image" href="shop_details.html">
                        <img src="assets/images/menu/img_01.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details.html">Chocolate Cake</a>
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
                      <a class="item_image" href="shop_details.html">
                        <img src="assets/images/menu/img_02.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details.html">Tutti Frutti Cake</a>
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
                      <a class="item_image" href="shop_details.html">
                        <img src="assets/images/menu/img_03.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details.html">Coconut Macaroon</a>
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
                      <a class="item_image" href="shop_details.html">
                        <img src="assets/images/menu/img_04.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details.html">Jelly Cake</a>
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
                      <a class="item_image" href="shop_details.html">
                        <img src="assets/images/menu/img_05.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details.html">Bombay Coffee Cake</a>
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
                      <a class="item_image" href="shop_details.html">
                        <img src="assets/images/menu/img_08.png" alt="image_not_found">
                      </a>
                      <div class="item_content">
                        <h3 class="item_title text-uppercase">
                          <a href="shop_details.html">Double Choclate</a>
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

          <div class="deco_item shape_1">
            <img src="assets/images/menu/shape_01.png" alt="image_not_found">
          </div>
          <div class="deco_item shape_2">
            <img src="assets/images/menu/shape_02.png" alt="image_not_found">
          </div>
        </section>
        <!-- recipe_menu_section - end
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
                    <li><strong class="text-uppercase">Adress:</strong>Autobahn, Hyderabad</li>
                    <li><strong class="text-uppercase">Mail:</strong> Bilal123@gmail.com</li>
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
