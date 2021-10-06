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

                        <ul class="header_btns_group ul_li_right">
                            <li>
                                <button type="button" class="main_search_btn" data-bs-toggle="collapse" data-bs-target="#main_search_collapse" aria-expanded="false" aria-controls="main_search_collapse">
                                    <!-- <i class="fal fa-search"></i> -->
                                </button>
                            </li>
                            <li>
                                <button type="button" class="cart_btn">

                                    <i class="fal fa-shopping-bag badge-wrapper">
                                        <span class='badge badge-danger' id="total_badge">{{ $total_products }}</span>
                                    </i>
                                    <!-- <small class="cart_counter">2</small> -->
                                </button>
                            </li>

                            @if(session()->has('user'))
                                <li >

                                    <a style="background: #C7A17A!important" class="btn btn-secondary text-uppercase">Dashboard</a>
                                </li>
                                <li class="nav-item dropdown" style="background:#C7A17A!important;width:11em;height:50px;border-radius:5px;">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <!-- <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg"> -->
                  </span>
                                            <div class="media-body  ml-2  d-none d-lg-block">
                                                <span class="p-md-2"  style="font-weight:400;text-transform:uppercase;color:white;font-size:18px;">{{Session::get('user')['name']}}<i class="fas fa-arrow-down pl-3"></i> </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu  dropdown-menu-right ">
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome!</h6>
                                        </div>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-single-02"></i>
                                            <span>My profile</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-settings-gear-65"></i>
                                            <span>Settings</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-calendar-grid-58"></i>
                                            <span>Activity</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-support-16"></i>
                                            <span>Support</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#!" class="dropdown-item">
                                            <!-- <a class="btn" href="admin_logout" role="button">logout</a> -->
                                            <span > <a class="btn" style="color:black;" href="logout" role="button"> Logout </a> </span>
                                        </a>
                                    </div>
                                </li>
                            <!-- <li>
                    <select class="form-select" style="height:50px;width:10em;color:black;border:2px solid #C7A17A" aria-label="Default select example">
                        <option selected style="font-weight:bold;"> {{Session::get('user')['name']}} </option>
                        <option value="">Profile</option>
                        <option value="">Setting</option>
                        <option value="">  <a href="{{ url('logout') }}"> logout </a> </option>
                      </select>
</li> -->
                            @else
                                <li>
                                    <a class="btn btn_primary text-uppercase" href="login">Login</a>
                                </li>
                            @endif
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
