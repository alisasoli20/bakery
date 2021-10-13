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
        <main  style="margin-top: 150px">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                                <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                                <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                                <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                                <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                                <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                            <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                            <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
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
@endsection
