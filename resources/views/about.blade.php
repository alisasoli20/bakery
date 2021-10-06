
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
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">About us</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
              <li><a href="index_1.html"><i class="fas fa-home"></i> Home</a></li>
              <li>About Us</li>
            </ul>
          </div>
          <div class="breadcrumb_icon_wrap">
            <div class="container">
            </div>
          </div>
        </section>
        <!-- breadcrumb_section - end
        ================================================== -->

        <!-- about_section - start
        ================================================== -->
        <section class="about_section sec_ptb_120">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 col-md-6 order-last">
                <div class="about_image2 wow fadeInUp" data-wow-delay=".1s">
                  <img src="assets/images/about/img_04.jpg" alt="image_not_found">
                  <div class="leaf_image">
                    <img src="assets/images/decorations/leaf_02.png" alt="image_not_found">
                  </div>
                </div>
              </div>

              <div class="col-lg-5 col-md-5">
                <div class="about_content">
                  <div class="section_title text-uppercase">
                    <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-birthday-cake"></i> about us</h2>
                    <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">
                      <u>THERE IS ALL ABOUT BELLICIOUS BAKERY</u>
                    </h3>
                  </div>
                  <ul class="about_info ul_li_block">
                    <li class="wow fadeInUp" data-wow-delay=".4s">
                      <h4 class="text-uppercase"> WHAT WE DO?</h4>
                      <p class="mb-0">
                      In 2020, We are taking a startup of the Bellicious Bakery whose main branch is in Hyderabad. Our aim behind the online bakery is to save the time of our customers by providing them hassle-free online delivery.
                      </p>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">
                      <h4 class="text-uppercase">OUR AIMS</h4>
                      <p class="mb-0">
                      Bellicious Bakery offers a homestyle bakery experience. Our vision is to provide quick delivery of bakery products to our customers, with our main focus is to deliver satisfying baked products.
                      </p>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">
                      <h4 class="text-uppercase">Our Mission</h4>
                      <p class="mb-0">
                      Bellicious Bakery's mission is to offer simple and delicious baked items that are easily accessible to clients. Our ingredients are fresh and high quality; each bakery item is carefully made with the finest quality, and all-natural ingredients are used.
                      </p>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">
                      <h4 class="text-uppercase">FOR MORE INFORMATION</h4>
                      <p class="mb-0">
                      We'd love to hear from you! info@belliciousbakeryonline.com or call us at +923125344478
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
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
        <!-- about_section - end
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
