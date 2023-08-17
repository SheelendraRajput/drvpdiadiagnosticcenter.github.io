﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Pathology Lab - Service Details</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="../../css2?family=Saira:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="../../css2-1?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/timePicker.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.php"><img src="assets/images/logo-7.png"
                                alt=""></a></figure>
                    <div class="close-search pull-right"><i class="fa-solid fa-xmark"></i></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required="">
                                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header header-style-one">
            <div class="logo-box">
                <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
            </div>
            <!-- <div class="btn-box">
                <a href="index.php" class="header-btn"><i class="flaticon-calendar"></i>Appointment</a>
            </div> -->
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner">
                        <ul class="info-list clearfix">
                            <li>
                                <div class="icon-box"><i class="flaticon-map"></i></div>
                                24 Global Str, San Fransisco, SF 94112.
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-clock"></i></div>
                                24 Global Str, San Fransisco, SF 94112.
                            </li>
                        </ul>
                        <div class="top-right">
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><span class="fa-brands fa-instagram"></span></a></li>
                                <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                            <!-- <div class="language">
                                <span>Fr</span>
                                <ul class="language-list clearfix">
                                    <li><a href="index.php">English</a></li>
                                    <li><a href="index.php">Spanish</a></li>
                                    <li><a href="index.php">Turky</a></li>
                                    <li><a href="index.php">Chiness</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="about.php">About Us</a></li>

                                        <li class="current dropdown"><a href="services.php">Services</a>
                                            <ul>
                                                <li><a href="service-details.php">Biochemistry Tests</a></li>
                                                <li><a href="service-details-2.php">Microbiology Test</a></li>
                                                <li><a href="service-details-3.php">Histopatology</a></li>
                                                <li><a href="service-details-4.php">Hormonal Assay</a></li>
                                                <li><a href="service-details-5.php">Clinical Pathology</a></li>
                                                <li><a href="service-details-6.php">Cytopathology</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class="dropdown"><a href="index.php">Research</a>
                                            <ul>
                                                <li><a href="research.php">Research Style 01</a></li>
                                                <li><a href="research-2.php">Research Style 02</a></li>
                                                <li><a href="research-3.php">Research Style 03</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content">
                            <li class="support-box">
                                <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                <a href="tel:80045678901">[800] 45 6789 01</a>
                            </li>
                            <li class="user-box">
                                <a href="index.php"><i class="flaticon-add-user"></i></a>
                            </li>
                            <li class="search-box-outer search-toggler">
                                <i class="flaticon-magnifying-glass"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <ul class="menu-right-content">
                            <li class="support-box">
                                <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                <a href="tel:80045678901">[800] 45 6789 01</a>
                            </li>
                            <li class="user-box">
                                <a href="index.php"><i class="flaticon-add-user"></i></a>
                            </li>
                            <li class="search-box-outer search-toggler">
                                <i class="flaticon-magnifying-glass"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><h1 class="text-white text-center">DR.VPMDC </h1></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Biochemistry Test</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Services</li>
                        <li>Biochemistry Test</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-details -->
        <section class="service-details sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <div class="sidebar-widget category-widget">
                                <h3>Our Services</h3>
                                <ul class="category-list clearfix">
                                    <li><a href="service-details.php" class="current">Biochemistry Tests</a></li>
                                    <li><a href="service-details-2.php">Microbiology Test</a></li>
                                    <li><a href="service-details-3.php">Histopatology</a></li>
                                    <li><a href="service-details-4.php">Hormonal Assay</a></li>
                                    <li><a href="service-details-5.php">Clinical Pathology</a></li>
                                    <li><a href="service-details-6.php">Cytopathology</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget download-widget">
                                <ul class="download-list clearfix">
                                    <li>
                                        <div class="icon"><i class="flaticon-pdf"></i></div>
                                        <h5>Service Details</h5>
                                        <span>450 Kb</span>
                                        <a href="service-details.php"><i class="flaticon-down-arrow-1"></i></a>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="flaticon-pdf"></i></div>
                                        <h5>Product Models</h5>
                                        <span>2.6 Mb</span>
                                        <a href="service-details.php"><i class="flaticon-down-arrow-1"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget sidebar-banner">
                                <div class="inner-box">
                                    <div class="shape">
                                        <div class="shape-1"
                                            style="background-image: url(assets/images/shape/shape-31.png);"></div>
                                        <div class="shape-2"
                                            style="background-image: url(assets/images/shape/shape-32.png);"></div>
                                    </div>
                                    <figure class="logo"><a href="index.php"><img src="assets/images/logo-8.png"
                                                alt=""></a></figure>
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/resource/sidebar-1.jpg" alt="">
                                        </figure>
                                        <div class="icon-box"><i class="flaticon-estimation"></i></div>
                                    </div>
                                    <h3>Let Us Know <br>What You Need In Testing</h3>
                                    <p>Business it will frequently occur.</p>
                                    <a href="contact.php" class="theme-btn light">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-one">
                                <h2>Tests for Identifying Parameters of Health vs Illness</h2>
                                <figure class="image-box"><img src="assets/images/service/service-10.jpg" alt="">
                                </figure>
                                <div class="text">
                                    <p>Desires to obtain pain of itself because it is pain but because occasionally
                                        circumstances occur in which toil and pain can procure him some great pleasure
                                        to take a trivial example which of us ever undertakeslaborious physical
                                        exercise, except to obtain some advantage from it but who has any right to find
                                        fault with a man who chooses to enjoy a pleasures.</p>
                                </div>
                            </div>
                            <div class="content-two">
                                <div class="row align-items-center clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <div class="text">
                                                <h2>Capabilities</h2>
                                                <p>Occasionally circumstances occur in which toil to take a trivial
                                                    example.</p>
                                            </div>
                                            <div class="inner-box">
                                                <div class="single-item">
                                                    <h3>Automated Process</h3>
                                                    <p>Itself because it is pain but because occasionally circumstanc
                                                        great pleasure to take example which of us ever.</p>
                                                </div>
                                                <div class="single-item">
                                                    <h3>Blood Fractionation</h3>
                                                    <p>Duis nunc eros, mattis at dui ac, convallis semper risus
                                                        adipiscing.ultrices tellus, in man who chooses to enjoy.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <div class="image-inner">
                                            <figure class="image-box"><img src="assets/images/service/service-11.jpg"
                                                    alt=""></figure>
                                            <ul class="list-item clearfix">
                                                <li>Lab products for your experiments</li>
                                                <li>Because we think be your boundaes</li>
                                                <li>Where science meets innovation</li>
                                                <li>Exceptional Care Exceptional People</li>
                                                <li>Inspiring Better Health</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-three">
                                <div class="text">
                                    <h2>Our Procedures</h2>
                                    <p>Rationally encounter consequences that are extremely painful. Nor again is there
                                        anyone who loves or pursues or desires to obtain pain of itself.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-33.png);"></div>
                                            <div class="icon"><i class="flaticon-blood-sample"></i></div>
                                            <span>01</span>
                                        </div>
                                        <h4>Blood Sample <br>Collection</h4>
                                        <div class="overlay-content">
                                            <p>Our power of choice is untrammeled and when nothing prevents our being
                                                able to do what best every pleasure is to be welcomed and every pain
                                                avoided.</p>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-33.png);"></div>
                                            <div class="icon"><i class="flaticon-microscope"></i></div>
                                            <span>02</span>
                                        </div>
                                        <h4>Processing the <br>Sample</h4>
                                        <div class="overlay-content">
                                            <p>Our power of choice is untrammeled and when nothing prevents our being
                                                able to do what best every pleasure is to be welcomed and every pain
                                                avoided.</p>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box">
                                            <div class="icon"><i class="flaticon-clipboard"></i></div>
                                            <span>03</span>
                                        </div>
                                        <h4>Accurate Test <br>Results</h4>
                                        <div class="overlay-content">
                                            <p>Our power of choice is untrammeled and when nothing prevents our being
                                                able to do what best every pleasure is to be welcomed and every pain
                                                avoided.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-four">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-34.png);">
                                </div>
                                <div class="text">
                                    <h2>Screening Plans</h2>
                                    <p>Extremely painful nor again is there anyone who loves or desires,</p>
                                </div>
                                <div class="inner-box">
                                    <div class="list-inner clearfix">
                                        <ul class="list-style-one clearfix">
                                            <li>Complete Blood Count</li>
                                            <li>Blood Sugar-Fasting</li>
                                            <li>Post Prandial</li>
                                            <li>Liver Function test</li>
                                        </ul>
                                        <ul class="list-style-one clearfix">
                                            <li>Electrolytes</li>
                                            <li>Bone Health</li>
                                            <li>Heart/Cardiac Markers</li>
                                        </ul>
                                    </div>
                                    <div class="btn-box">
                                        <a href="service-details.php" class="theme-btn light">Pricing & Contact<i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-five">
                                <div class="title-text">
                                    <h2>Recent Cases</h2>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 project-block">
                                        <div class="project-block-one">
                                            <div class="inner-box">
                                                <div class="static-content">
                                                    <figure class="image-box"><img
                                                            src="assets/images/project/project-1.jpg" alt=""></figure>
                                                    <div class="lower-content">
                                                        <span class="category">Microbiology</span>
                                                        <h3><a href="index.php">Laboratory Medicine and Patient Care</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="image-box">
                                                        <figure class="image"><img
                                                                src="assets/images/project/project-4.jpg" alt="">
                                                        </figure>
                                                        <div class="view-btn"><a
                                                                href="assets/images/project/project-1.jpg"
                                                                class="lightbox-image" data-fancybox="gallery"><i
                                                                    class="flaticon-zoom-in"></i></a></div>
                                                        <div class="link-btn"><a href="index.php"><i
                                                                    class="flaticon-right-arrow"></i></a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <span class="category">Microbiology</span>
                                                        <h3><a href="index.php">Laboratory Medicine and Patient Care</a>
                                                        </h3>
                                                        <p>Able to claims of duty or the obligations pleasures have to
                                                            repudiated...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 project-block">
                                        <div class="project-block-one">
                                            <div class="inner-box">
                                                <div class="static-content">
                                                    <figure class="image-box"><img
                                                            src="assets/images/project/project-2.jpg" alt=""></figure>
                                                    <div class="lower-content">
                                                        <span class="category">Serology</span>
                                                        <h3><a href="index.php">Clinical Trial Design Best Practices</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="image-box">
                                                        <figure class="image"><img
                                                                src="assets/images/project/project-5.jpg" alt="">
                                                        </figure>
                                                        <div class="view-btn"><a
                                                                href="assets/images/project/project-2.jpg"
                                                                class="lightbox-image" data-fancybox="gallery"><i
                                                                    class="flaticon-zoom-in"></i></a></div>
                                                        <div class="link-btn"><a href="index.php"><i
                                                                    class="flaticon-right-arrow"></i></a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <span class="category">Serology</span>
                                                        <h3><a href="index.php">Clinical Trial Design Best Practices</a>
                                                        </h3>
                                                        <p>Able to claims of duty or the obligations pleasures have to
                                                            repudiated...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>Who We Are</h3>
                                </div>
                                <div class="text">
                                    <p>Obligations of business it will frequently occur that pleasures have to
                                        repudiated annoyances accept therefore always holds principle of selection.</p>
                                </div>
                                <div class="lower-box">
                                    <div class="icon-box"><i class="flaticon-atom-1"></i></div>
                                    <h5>Laboratory Accreditation by ISO/IEC 17025</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Laboratory</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.php">History</a></li>
                                        <li><a href="index.php">Services</a></li>
                                        <li><a href="index.php">Our Team</a></li>
                                        <li><a href="index.php">Blogs & News</a></li>
                                        <li><a href="index.php">Research</a></li>
                                        <li><a href="index.php">Lab Brochure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Patients</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.php">Book a Test</a></li>
                                        <li><a href="index.php">Discounts</a></li>
                                        <li><a href="index.php">Nearest Lab</a></li>
                                        <li><a href="index.php">Packages</a></li>
                                        <li><a href="index.php">Home Collection</a></li>
                                        <li><a href="index.php">Programs</a></li>
                                        <li><a href="index.php">FAQ's</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.php">Appointment</a></li>
                                        <li><a href="index.php">Corporate Office</a></li>
                                        <li><a href="index.php">General Enquiry</a></li>
                                        <li><a href="index.php">Career</a></li>
                                        <li><a href="index.php">Book Your Test</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Popular Post</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img
                                                    src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <span class="post-date">16 July, 2022</span>
                                        <h5><a href="blog-details.php">All you Need to Know about this Liver Disease</a>
                                        </h5>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img
                                                    src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                        <span class="post-date">11 August, 2022</span>
                                        <h5><a href="blog-details.php">Ensure Your Product Quality with a Biogenix
                                                Lab</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="copyright">
                        <p>&copy; 2022 <a href="index.php">Biogenix.</a> All Rights Reserved.</p>
                    </div>
                    <ul class="download-list">
                        <li>
                            <h6>Download Your Report</h6>
                        </li>
                        <li><a href="index.php"><i class="flaticon-play-store"></i></a></li>
                        <li><a href="index.php"><i class="flaticon-apple"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-up-arrow"></i>
        </button>

    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/timePicker.js"></script>
    <script src="assets/js/bxslider.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>