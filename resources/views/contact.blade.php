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
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Contact Us</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
              <li><a href="Home"><i class="fas fa-home"></i> Home</a></li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="breadcrumb_icon_wrap">
            <div class="container">
            </div>
          </div>
        </section>
        <!-- breadcrumb_section - end
        ================================================== -->

        <!-- contact_section - start
        ================================================== -->
        <section class="contact_section sec_ptb_120 bg_default_gray">
          <div class="container">
            <div class="contact_form bg_white wow fadeInUp" data-wow-delay=".1s">
              <div class="main_contact_info_wrap">
                <div class="contact_info_item">
                  <div class="item_icon"><i class="fal fa-envelope"></i></div>
                  <div class="item_content">
                    <h3 class="item_title text-uppercase">Email Adress</h3>
                    <p> Belliciousbakery@gmail.com</p>
                  </div>
                </div>
                <div class="contact_info_item">
                  <div class="item_icon"><i class="fal fa-map-marker-alt"></i></div>
                  <div class="item_content">
                    <h3 class="item_title text-uppercase">Our Location</h3>
                    <p>Autobahn Road, Hyderabad</p>
                    <p>Shop no: 56, opposite shama tika</p>
                  </div>
                </div>
                <div class="contact_info_item">
                  <div class="item_icon"><i class="fal fa-phone"></i></div>
                  <div class="item_content">
                    <h3 class="item_title text-uppercase">Phone Number</h3>
                    <p>+923125344478</p>
                    <p>+923225356810</p>
                  </div>
                </div>
              </div>
              <form action="{{ route("contact") }}" method="POST">
                @csrf
                @if(session()->has('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
                @if(session()->has('error'))
                  <div class="alert alert-error">
                    {{ session('error') }}
                  </div>
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $error)
                      <div class="alert alert-warning">
                        {{ $error }}
                      </div>
                    @endforeach

                @endif
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form_item">
                      <input type="text" name="name" placeholder="Your name:" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form_item">
                      <input type="email" name="email" placeholder="Your Mail:" required>
                    </div>
                  </div>
                </div>
                <div class="form_item">
                  <input type="text" name="subject" placeholder="Enter Your Subject:" required>
                </div>
                <div class="form_item">
                  <textarea name="message" placeholder="Your Massage:" required></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn_primary text-uppercase">Send massage</button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- contact_section - end
        ================================================== -->

        <!-- google map - start
        ================================================== -->
        <div class="map_section">
          <div id="mapBox" class="wow fadeInUp" data-wow-delay=".1s" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
          </div>
        </div>
        <!-- google map - end
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
