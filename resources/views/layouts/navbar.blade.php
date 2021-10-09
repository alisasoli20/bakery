<header class="header_section style_2">
    <div class="content_wrap">
        <div class="container maxw_1560">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-6 col-6">
                    <div class="brand_logo">
                        <a class="brand_link" href="{{ url("/") }}">
                            <img src="assets/images/logo/logo_white_1x.png" srcset="assets/images/logo/logo_white_2x.png 2x" alt="logo_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-10 col-md-6 col-6">
                    <nav class="main_menu navbar navbar-expand-lg">
                        <button class="mobile_menu_btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fal fa-bars"></i></span>
                        </button>
                        <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                            <ul class="main_menu_list ul_li">
                                <li class="active dropdown">
                                    <a class="nav-link" href="Home" id="home_submenu" role="button">
                                        Home
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="about_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="about_submenu">
                                        <li><a href="aboutus">About Us</a></li>
                                        <li><a href="aboutme">About Me</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="nav-link" href="menu" id="services_submenu" role="button">
                                        Menu
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="shop_details" id="portfolio_submenu" role="button">
                                        shop
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="contact">Contact us</a>
                                </li>
                            </ul>
                        </div>

                        <ul class="header_btns_group ul_li_right" style="margin-right: 40px">
                            @if(session()->has('user'))

                            <li>
                                <button type="button" class="main_search_btn" data-bs-toggle="collapse" data-bs-target="#main_search_collapse" aria-expanded="false" aria-controls="main_search_collapse">
                                    <!-- <i class="fal fa-search"></i> -->
                                </button>
                            </li>
                                <li class="nav-item dropdown " >
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbar-list-4">
                                        <ul class="navbar-nav">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Dashboard</a>
                                                    <a class="dropdown-item" href="{{ route("profile") }}">Edit Profile</a>
                                                    <a class="dropdown-item" href="logout">Log Out</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <a class="btn btn_primary text-uppercase" href="login">Login</a>
                                </li>
                            @endif




                                <li>
                                    <button type="button" class="cart_btn">

                                        <i class="fal fa-shopping-bag badge-wrapper">
                                            <span class='badge badge-danger' id="total_badge"></span>
                                        </i>
                                        <!-- <small class="cart_counter">2</small> -->
                                    </button>
                                </li>


                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <!-- collapse search - start -->
    <div class="main_search_collapse collapse" id="main_search_collapse">
        <div class="main_search_form card">
            <div class="container maxw_1560">
                <form action="#">
                    <div class="form_item">
                        <input type="search" name="search" placeholder="Search here...">
                        <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- collapse search - end -->
</header>
