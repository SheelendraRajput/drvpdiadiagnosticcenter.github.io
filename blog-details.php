﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Pathology Lab - HTML 5 Template Preview</title>

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

                                        <li class="dropdown"><a href="services.php">Services</a>
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
                                        </li>  -->
                                        <li class="current"><a href="blog-2.php">Gallery</a></li>
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
        <section class="page-title blog-details">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Ensure Your Product Quality with <br>a Biogenix Lab</h1>
                    <div class="post-discription">
                        <ul class="post-info clearfix">
                            <li class="category"><a href="blog-details.php">Laboratory</a></li>
                            <li>11 August, 2022</li>
                            <li><a href="blog-details.php">By Admin</a></li>
                        </ul>
                        <div class="right-info">
                            <ul class="social-links clearfix">
                                <li><a href="index.php"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="index.php"><i class="fa-brands fa-square-twitter"></i></a></li>
                                <li><a href="index.php"><i class="fa-solid fa-basketball"></i></a></li>
                            </ul>
                            <div class="comments-box clearfix">
                                <a href="blog-details.php"><i class="fa-regular fa-comment-dots"></i>3</a>
                                <a href="blog-details.php"><i class="fa-regular fa-eye"></i>26</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-details sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="content-one">
                                <figure class="image-box"><img src="assets/images/news/news-35.jpg" alt=""></figure>
                                <div class="text">
                                    <p>Blinded by desire that they cannot foresee those who fail in their duty cases are
                                        perfectly simple and easy to distinguish. In a free hour must explain to you how
                                        all this mistaken idea of denouncing pleasure and praising pain was born and I
                                        will give you a complete account of the system, and expound the actual teachings
                                        of the great explorer of the truth, the master-builder of human happiness. No
                                        one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                        because those who do not know how to pursue pleasure rationally encounter
                                        consequences that are extremely painful. Nor again is there anyone who loves or
                                        pursues or desires to obtain pain of itself, because it is pain, but because
                                        occasionally circumstances.</p>
                                </div>
                            </div>
                            <div class="content-two">
                                <h2>BioTech Research & Development</h2>
                                <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising
                                    pain was born and I will give you a complete account of the system, and expound the
                                    actual teachings of the great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure itself, because it is
                                    pleasure, but because those who do not know how to pursue pleasure rationally
                                    encounter consequences that are extremely painful.</p>
                                <p>Perfectly simple and easy to distinguish a free hour must explain to you how all this
                                    mistaken idea of denouncing pleasure and praising pain was born and I will give you
                                    a complete account of the system, and expound the actual teachings.</p>
                                <blockquote>
                                    <div class="icon-box"><i class="flaticon-quote-2"></i></div>
                                    <h3>Lab products with quality beyond your imagination For the best experiments,
                                        only.</h3>
                                    <span class="designation">Silvester Scott</span>
                                </blockquote>
                            </div>
                            <div class="content-three">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <figure class="image-box"><img src="assets/images/news/news-36.jpg" alt="">
                                            </figure>
                                            <div class="text">
                                                <h4>Comprehensive Test</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <figure class="image-box"><img src="assets/images/news/news-37.jpg" alt="">
                                            </figure>
                                            <div class="text">
                                                <h4>Follows Safety Protocol</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-four">
                                <h2>Excellence is Our Specialty</h2>
                                <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I
                                    will give you a complete account of the system, and expound the actual teachings.
                                </p>
                                <h4>Lab products that can make you feel satisfied</h4>
                                <ul class="list-item clearfix">
                                    <li>Lab products for your experiments</li>
                                    <li>Because we think beyond your boundaries</li>
                                    <li>Where science meets innovation</li>
                                </ul>
                            </div>
                            <div class="post-tags">
                                <ul class="tags-list clearfix">
                                    <li>
                                        <h4>Tags:</h4>
                                    </li>
                                    <li><a href="blog-details.php">Digital</a></li>
                                    <li><a href="blog-details.php">Equipment</a></li>
                                    <li><a href="blog-details.php">Food</a></li>
                                </ul>
                            </div>
                            <div class="post-nav-btn">
                                <div class="inner-box">
                                    <div class="single-btn prev-btn">
                                        <figure class="image-box"><img src="assets/images/news/nav-btn-1.jpg" alt="">
                                        </figure>
                                        <a href="blog-details.php"><i class="flaticon-left-arrow"></i>Prev Post</a>
                                        <h5>All you Need to Know about <br>this Liver Disease</h5>
                                    </div>
                                    <div class="single-btn next-btn">
                                        <figure class="image-box"><img src="assets/images/news/nav-btn-2.jpg" alt="">
                                        </figure>
                                        <a href="blog-details.php"><i class="flaticon-right-arrow"></i>Next Post</a>
                                        <h5>Ensure Your Product Quality <br>with a Biogenix Lab</h5>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="blog.php"><span>Back to Blog Post</span></a>
                                </div>
                            </div>
                            <div class="author-box">
                                <h2>About Author</h2>
                                <div class="inner-box">
                                    <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt="">
                                    </figure>
                                    <h6>Post By</h6>
                                    <h3>Paul Anderson</h3>
                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of
                                        itself because occasionally.</p>
                                    <ul class="social-links clearfix">
                                        <li><a href="blog-details.php"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="blog-details.php"><i class="fa-brands fa-square-twitter"></i></a>
                                        </li>
                                        <li><a href="blog-details.php"><i class="fa-solid fa-basketball"></i></a></li>
                                        <li><a href="blog-details.php"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comments-box">
                                <h2>Comments</h2>
                                <div class="comment-inner">
                                    <div class="comment">
                                        <figure class="comment-thumb"><img src="assets/images/news/comment-1.jpg"
                                                alt=""></figure>
                                        <div class="comment-info">
                                            <h4>Isaac Herman</h4>
                                            <span class="comment-date">June 14, 2022 [11.00am]</span>
                                        </div>
                                        <p>How all this mistaken idea of denouncing pleasure and praising pain was born
                                            and I will give you a complete account of the system.</p>
                                        <a href="blog-details.php" class="reply-btn">Reply</a>
                                    </div>
                                    <div class="comment replay-comment">
                                        <figure class="comment-thumb"><img src="assets/images/news/comment-2.jpg"
                                                alt=""></figure>
                                        <div class="comment-info">
                                            <h4>William Cobus</h4>
                                            <span class="comment-date">June 14, 2022 [11.20am]</span>
                                        </div>
                                        <p>Undertakes laborious physical exercise, except to obtain some advantage from
                                            it but who has any right to find fault.</p>
                                        <a href="blog-details.php" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-form-area">
                                <div class="text">
                                    <h2>Add Your Comments</h2>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <div class="form-inner">
                                    <form action="blog-details.php" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <label>Comments</label>
                                                <textarea name="message"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Name*</label>
                                                <input type="text" name="name" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Email*</label>
                                                <input type="email" name="email" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control material-checkbox">
                                                        <input type="checkbox" class="material-control-input">
                                                        <span class="material-control-indicator"></span>
                                                        <span class="description">Save my name, email, and website in
                                                            this browser for the next time I comment.</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                <button type="submit" class="theme-btn">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-inner">
                                    <form action="blog-4.php" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Enter Keyword..."
                                                required="">
                                            <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.php">Chemicals<i
                                                    class="flaticon-right-arrow"></i><span>05</span></a></li>
                                        <li><a href="blog-details.php">Equipments<i
                                                    class="flaticon-right-arrow"></i><span>02</span></a></li>
                                        <li><a href="blog-details.php">Laboratory<i
                                                    class="flaticon-right-arrow"></i><span>14</span></a></li>
                                        <li><a href="blog-details.php">Laboratory<i
                                                    class="flaticon-right-arrow"></i><span>03</span></a></li>
                                        <li><a href="blog-details.php">Technology<i
                                                    class="flaticon-right-arrow"></i><span>09</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Popular Post</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img
                                                    src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <span class="post-date">16 July, 2022</span>
                                        <h5><a href="blog-details.php">All you Need to <br>Know about this Liver
                                                Disease</a></h5>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img
                                                    src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <span class="post-date">11 August, 2022</span>
                                        <h5><a href="blog-details.php">Ensure Your Product Quality with a Biogenix
                                                Lab</a></h5>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img
                                                    src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <span class="post-date">21 July, 2022</span>
                                        <h5><a href="blog-details.php">In the Pursuit of <br>Quality a Laboratory
                                                Perspective</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h3>Popular Tags</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.php">Agriculture</a></li>
                                        <li><a href="blog-details.php">Burners</a></li>
                                        <li><a href="blog-details.php">Clamp</a></li>
                                        <li><a href="blog-details.php">Digital</a></li>
                                        <li><a href="blog-details.php">Equipment</a></li>
                                        <li><a href="blog-details.php">Food</a></li>
                                        <li><a href="blog-details.php">Health</a></li>
                                        <li><a href="blog-details.php">Hormone</a></li>
                                        <li><a href="blog-details.php">Research</a></li>
                                        <li><a href="blog-details.php">Residue</a></li>
                                        <li><a href="blog-details.php">Pathology</a></li>
                                        <li><a href="blog-details.php">Pharmaceutical</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="subscribe-widget centred">
                                <div class="inner-box"
                                    style="background-image: url(assets/images/resource/sidebar-2.jpg);">
                                    <div class="icon-box"><i class="flaticon-newsletter"></i></div>
                                    <h3>Subscribe Us</h3>
                                    <p>Subscribe us to get latest news & articles in your inbox.</p>
                                    <div class="form-inner">
                                        <form action="contact.php" method="post">
                                            <div class="form-group">
                                                <i class="fa-sharp fa-solid fa-envelope-open"></i>
                                                <input type="email" name="email" placeholder="Email Address..."
                                                    required="">
                                                <button type="submit">Subscribe Us</button>
                                            </div>
                                        </form>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Terms & Conditions.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->


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