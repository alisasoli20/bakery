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
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">About Me</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
              <li><a href="Home"><i class="fas fa-home"></i> Home</a></li>
              <li>About Me</li>
            </ul>
          </div>
          <div class="breadcrumb_icon_wrap">
            <div class="container">
            </div>
          </div>
        </section>
        <!-- breadcrumb_section - end
        ================================================== -->

        <!-- admin_section - start
        ================================================== -->
        <section class="admin_section sec_ptb_120">
          <div class="container">
            <div class="row justify-content-lg-between justify-content-md-between justify-content-sm-center">
              <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="admin_image wow fadeInUp" data-wow-delay=".1s">
                  <img src="assets/images/about/img_06.jpeg" alt="image_not_found">
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="admin_content">
                  <h2 class="admin_name text-uppercase wow fadeInUp" data-wow-delay=".2s">Bilal Ahmed</h2>
                  <p class="wow fadeInUp" data-wow-delay=".3s">
                  Hi, I'm Bilal ahmed and, I have four years of experience in the front-end development of the website.
                  </p>
                  <div class="admin_info_wrap wow fadeInUp" data-wow-delay=".3s">
                    <ul class="info_list ul_li_block">
                      <li><strong>Personal Info:</strong> Front-end Developer</li>
                      <li><strong>Experience:</strong> 4 Years of Experience</li>
                      <li><strong>Email:</strong> Bilal123@gmail.com</li>
                      <li><strong>Phone:</strong> +923125344478</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <br><br><br>

            <div class="row justify-content-lg-between justify-content-md-between justify-content-sm-center">
              <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="admin_image wow fadeInUp" data-wow-delay=".1s">
                  <img src="assets/images/about/img_05.jpg" alt="image_not_found">
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="admin_content">
                  <h2 class="admin_name text-uppercase wow fadeInUp" data-wow-delay=".2s">Nimra Arain</h2>
                  <p class="wow fadeInUp" data-wow-delay=".3s">
                  Hi, I'm Nimra Arain and, I have Three years of experience in the back-end development of the website.
                  </p>
                  <div class="admin_info_wrap wow fadeInUp" data-wow-delay=".3s">
                    <ul class="info_list ul_li_block">
                      <li><strong>Personal Info:</strong> Back-end Developer</li>
                      <li><strong>Experience:</strong> 3 Years of Experience</li>
                      <li><strong>Email:</strong> Nimra123@gmail.com</li>
                      <li><strong>Phone:</strong> +923225356810</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


              <br><br><br>

              <div class="row justify-content-lg-between justify-content-md-between justify-content-sm-center">
                  <div class="col-lg-5 col-md-6 col-sm-8">
                      <div class="admin_image wow fadeInUp" data-wow-delay=".1s">
                          <img src="assets/images/testimonial/img_04.jpeg" alt="image_not_found">
                      </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-8">
                      <div class="admin_content">
                          <h2 class="admin_name text-uppercase wow fadeInUp" data-wow-delay=".2s">Ali Sasoli</h2>
                          <p class="wow fadeInUp" data-wow-delay=".3s">
                              Hi, I'm Ali Sasoli and, I have Two years of experience in the back-end development of the website.
                          </p>
                          <div class="admin_info_wrap wow fadeInUp" data-wow-delay=".3s">
                              <ul class="info_list ul_li_block">
                                  <li><strong>Personal Info:</strong> Back-end Developer</li>
                                  <li><strong>Experience:</strong> 2 Years of Experience</li>
                                  <li><strong>Email:</strong> alisasoli20@gmail.com</li>
                                  <li><strong>Phone:</strong> +923493235873</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>






          </div>




          <div class="sec_ptb_80 pb-0">
            <div class="container">
              <div class="contact_form wow fadeInUp" data-wow-delay=".1s">
                <h3 class="form_title text-center text-uppercase">Contact Me</h3>
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
          </div>
        </section>
        <!-- admin_section - end
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
@endsection
