<header id="wm-header" class="wm-header-two">
    @if (session('user_email_verification') ?? false)
        <div class="container">
            <div class="row">
                <div class="notification-bar" id="notificationBar">
                    <div class="notification-content">
                        <div class="col-md-10">
                            <p>please verify your email</p>
                        </div>
                        <div class="col-md-2">
                            <a id="hideNotification" style="font-size: 30px; color:beige;">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--// TopStrip \\-->
    <div class="wm-topstrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="wm-stripinfo">
                        <li><i class="wmicon-location"></i> 2925 Swick Hill Street, Charlotte, NC 28202</li>
                        <li><i class="wmicon-technology4"></i> +1 984-700-7129</li>
                        <li><i class="wmicon-time2"></i> Mon - fri: 7:00am - 6:00pm</li>
                    </ul>
                    <div class="wm-right-section">
                        <ul class="wm-login-section">
                            <li><a href="#" data-toggle="modal" data-target="#ModalLogin"><i class="fa fa-user"
                                        aria-hidden="true"> &nbsp;Login</i></a></li>

                        </ul>
                        <form class="wm-search-section">
                            <input type="text" value="Type your search"
                                onblur="if(this.value == '') { this.value ='Type your search'; }"
                                onfocus="if(this.value =='Type your search') { this.value = ''; }">
                            <input type="submit" value="">
                            <i class="wmicon-search wm-color-two"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// TopStrip \\-->

    <!--// MainHeader \\-->
    <div class="wm-main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href="index-two.html" class="wm-logo"><img src="images/logo-2.png"
                            alt=""></a></div>
                <div class="col-md-9">
                    <!--// Navigation \\-->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1" aria-expanded="true">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ route('/') }}">Home</a>
                                    <!-- <ul class="wm-dropdown-menu">
                                     <li><a href="index-2.html">Education Home V1</a></li> -->
                                    <!-- <li><a href="index-two.html">Education Home V2</a></li> -->
                                    <!-- <li><a href="index-three.html">Education Home V3</a></li>
                                    <li><a href="index-four.html">Education Home V4</a></li> -->
                                    <!-- </ul> -->
                                </li>
                                <li><a href="{{ route('course-list') }}">Classes</a>
                                    <!-- <ul class="wm-dropdown-menu">
                                    <li><a href="courses-grid.html">Courses Grid</a></li>
                                    <li><a href="courses-list.html">Courses List</a></li>
                                    <li><a href="courses-detail.html">Courses Detail</a></li>
                                </ul> -->
                                </li>
                                <li><a href="event-grid.html">event</a>
                                    <!-- <ul class="wm-dropdown-menu">
                                    <li><a href="event-grid.html">Event Grid</a></li>
                                    <li><a href="event-detail.html">Event Detail</a></li>
                                </ul> -->
                                </li>
                                <li><a href="#">Dashboard</a>
                                    <ul class="wm-dropdown-menu">
                                        <li><a href="dashboard-courses.html">Courses</a></li>
                                        <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                        <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                        <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                        <li><a href="student-dashboard-settings.html">Settings</a></li>
                                        <li><a href="student-dashboard-statement.html">Statement</a></li>
                                    </ul>
                                </li>
                                <li class="wm-megamenu-li"><a href="about-us.html">About Us</a>
                                    <!-- <ul class="wm-megamenu">
                                    <li class="row">
                                        <div class="col-md-2">
                                            <h4>Link 1</h4>
                                            <ul class="wm-megalist">
                                                <li><a href="404-page.html">404 Error Page</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                                <li><a href="faq-page.html">Faq Page</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>Link 2</h4>
                                            <ul class="wm-megalist">
                                                <li><a href="ourprofessors.html">Our Professors</a></li>
                                                <li><a href="our-professsors-detail.html">Our Professsors Detail</a></li>
                                                <li><a href="typography-elements.html">Typography Elements</a></li>
                                                <li><a href="courses-list.html">Courses List</a></li>
                                                <li><a href="courses-grid.html">Courses Grid</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>Link 3</h4>
                                            <ul class="wm-megalist">
                                                <li><a href="courses-detail.html">Courses Detail</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="wm-thumbnail">
                                                <img src="extra-images/megamenu-frame.jpg" alt="" />
                                            </a>
                                        </div>
                                    </li>
                                </ul> -->
                                </li>
                                <li><a href="shop-list.html">Shop</a>
                                    <!-- <ul class="wm-dropdown-menu">
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-single-product.html">Shop Detail</a></li>
                                </ul> -->
                                </li>
                                <li class="wm-megamenu-li"><a href="#">Contact</a>
                                    <ul class="wm-megamenu">
                                        <li class="row">
                                            <div class="col-md-2">
                                                <h4>Links 1</h4>
                                                <ul class="wm-megalist">
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                    <li><a href="404-page.html">404 Error Page</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <h4>Artists text</h4>
                                                <div class="wm-mega-text">
                                                    <p>Your work is going to fill a large part of your life, and
                                                        the only way to be truly satisfied is to do what you
                                                        believe is great work. And the only way to do great work
                                                        is to love.</p>
                                                    <p>If you haven't found it yet, keep looking. Don't settle.
                                                        As with all matters of the heart, you'll know when you
                                                        find it.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <h4>sub category widget</h4>
                                                <a href="#" class="wm-thumbnail">
                                                    <img src="extra-images/mega-menuadd.jpg" alt="" />
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <!--// Navigation \\-->
                    {{-- <a href="#" class="wm-enroll-btn wm-color-two"><i class="wmicon-tool3"></i> Enroll
                        Today</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!--// MainHeader \\-->

</header>
