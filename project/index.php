<?php

if (isset($_POST['consultation'])) {
	$to = "arshilarab786@gmail.com";
	$subject = "Test mail";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$message ="Name is " . $name . "Email is " . $email . " Phone is " . $phone . " Message is " . $message . " ";

	$headers = 'From: info@buzzcloudmedia.com' . "\r\n" .
		'Reply-To: no-reply@buzzcloudmedia.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $header);
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themedox.com/demo/xolio/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 10:46:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Buzzcloud</title>
    <meta name="description" content="Xolio - Creative Agency Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="#">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KZ5MXLT');</script>
    <!-- End Google Tag Manager -->
    <script type='text/javascript'>
        window.smartlook || (function (d) {
            var o = smartlook = function () { o.api.push(arguments) }, h = d.getElementsByTagName('head')[0];
            var c = d.createElement('script'); o.api = new Array(); c.async = true; c.type = 'text/javascript';
            c.charset = 'utf-8'; c.src = 'https://web-sdk.smartlook.com/recorder.js'; h.appendChild(c);
        })(document);
        smartlook('init', '138886dd8cb35817d4d5fda2ba0c34f04a1d4536', { region: 'eu' });
    </script>
</head>

<style>
    .scroll-top {
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: fixed;
        bottom: -10%;
        right: 30px;
        font-size: var(--tg-body-font-size);
        border-radius: 6px;
        z-index: 99;
        color: var(--tg-white);
        text-align: center;
        cursor: pointer;
        background: #f3b837;
        transition: 1s ease;
        border: none;
    }

    .navbar-wrap>ul>li.active>a,
    .navbar-wrap>ul>li:hover>a {
        color: #f3b837;
    }

    .header-action .header-btn .btn {
        color: var(--tg-white);
        font-size: 16px;
        padding: 19px 33px;
        font-weight: 500;
        background: #f3b837;
    }

    .header-contact-wrap .lats-chat a:hover {
        color: #f3b837;
    }

    .banner-content .sub-title strong {
        font-weight: 500;
        color: #f3b837;
    }

    .btn {
        user-select: none;
        background: #f3b837;
        border: medium none;
        border-radius: 20px;
        color: var(--tg-white);
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 0;
        line-height: 1;
        margin-bottom: 0px;
        padding: 28px 55px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        transition: all 700ms ease 0s;
        vertical-align: middle;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .our-best-project .content .btn {
        background: #f3b837;
        padding: 17px 43px;
        border-radius: 15px;
    }

    .btn span {
        background: var(--tg-secondary-color);
        border-radius: 50%;
        display: block;
        height: 0;
        position: absolute;
        transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transition: width 0.6s ease 0s, height 0.6s ease 0s;
        -moz-transition: width 0.6s ease 0s, height 0.6s ease 0s;
        -webkit-transition: width 0.6s ease 0s, height 0.6s ease 0s;
        -ms-transition: width 0.6s ease 0s, height 0.6s ease 0s;
        -o-transition: width 0.6s ease 0s, height 0.6s ease 0s;
        width: 0;
        z-index: -1;
    }

    a:hover,
    .portfolio-cat a:hover,
    .footer -menu li a:hover {
        color: #f3b837;
        text-decoration: none;
    }

    .section-title .sub-title {
        font-size: 20px;
        font-weight: 500;
        display: block;
        color: #f3b837;
        margin-bottom: 20px;
    }

    .testimonial-active-two .slick-dots li.slick-active button,
    .testimonial-active .slick-dots li.slick-active button {
        width: 16px;
        height: 16px;
        border-color: #f3b837;
    }

    a,
    button {
        color: #f3b837;
        outline: medium none;
        text-decoration: none;
    }

    .blog-meta .list-wrap li a:hover {
        color: #f3b837;
    }

    .newsletter-form .btn {
        padding: 28px 39px;
        min-width: 160px;
        background: #f3b837;
        margin-left: 24px;
    }

    .fw-link .list-wrap li a:hover {
        color: #f3b837;
    }

    .footer-about .list-wrap li a:hover {
        color: #f3b837;
        ;
    }
</style>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ5MXLT" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/img/logo/Buzzcloud-Logo.png" alt="Preloader"
                        style="width: 90px;"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Custom-cursor -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>
    <!-- Custom-cursor-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <?php 
    require_once 'elements/header.php';
    ?>



    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section class="banner-area banner-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-img wow fadeInLeft" data-wow-delay=".4s">
                            <img src="assets/img/banner/banner_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s">Amazing <strong>Starts</strong>
                                Here</span>
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s">Grow Your Business Using Our Services
                            </h2>
                            <a href="contact.php" class="btn wow fadeInUp" data-wow-delay=".6s">Contact Us
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape-wrap">
                <img src="assets/img/banner/banner_shape01.png" alt="">
                <img src="assets/img/banner/banner_shape02.png" alt="" class="animationFramesOne">
                <img src="assets/img/banner/banner_shape03.png" alt="" class="contactSwimmer">
                <img src="assets/img/banner/banner_shape04.png" alt="" class="rotateme">
                <img src="assets/img/banner/banner_shape05.png" alt="" class="animation1">
                <img src="assets/img/banner/banner_shape06.png" alt="" class="ribbonRotate">
                <img src="assets/img/banner/banner_shape07.png" alt="" class="float-bob-x">
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- services-area -->
        <section class="services-area pt-35 pb-95">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon01.png" alt="">
                            </div>
                            <div class="services-content">
                                <h4 class="title"><a href="services-details.php">Performance Marketing & Google Add</a>
                                </h4>
                                <p>Refers to the process of designing user interfaces and experiences for digital
                                    products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".4s">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon02.png" alt="">
                            </div>
                            <div class="services-content">
                                <h4 class="title"><a href="services-details.html">SEO Services</a></h4>
                                <p> Digital marketing is promoting products and services using electronic media.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".6s">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon03.png" alt="">
                            </div>
                            <div class="services-content">
                                <h4 class="title"><a href="services-details.html">Social Media Markenting</a></h4>
                                <p>Website design refers to the process of creating and designing the visual layout</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".8s">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon04.png" alt="">
                            </div>
                            <div class="services-content">
                                <h4 class="title"><a href="services-details.html">Web & App Development</a></h4>
                                <p>Branding design refers to the process of creating and designing the visual elements
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- about-area -->
        <section class="about-area">
            <div class="container custom-container">
                <div class="about-inner">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-46 order-0 order-lg-2">
                            <div class="about-img text-end">
                                <img src="assets/img/images/about_img.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-54">
                            <div class="about-content">
                                <div class="section-title mb-25">
                                    <span class="sub-title">About Company</span>
                                    <h2 class="title">A Full Service Digital Marketing and Branding Agency</h2>
                                </div>
                                <p>Welcome to our digital marketing agency, where creativity meets strategy and
                                    data-driven solutions lead to unparalleled success for our clients in the digital
                                    landscape. <br><br> We are a team of passionate marketers, designers, developers,
                                    and analysts who understand the ever-evolving nature of digital marketing and the
                                    importance of staying ahead of the curve.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- team-area -->
        <section class="team-area pt-130 pb-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <video style="width: 550px; height: 350px;" autoplay>
                            <source src="assets/img/buzzcloud-media.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-content">
                            <div class="section-title mb-25">
                                <span class="sub-title">Our Team</span>
                                <h2 class="title">An Essential Aspect of Creativity is Not Being Afraid to Fail</h2>
                            </div>
                            <p>Creativity involves taking risks, experimenting with new ideas, and exploring uncharted
                                territories. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-shape-wrap">
                <img src="assets/img/images/team_shape01.png" alt="" class="ribbonRotate">
                <img src="assets/img/images/team_shape02.png" alt="" class="float-bob-x">
            </div>
        </section>
        <!-- team-area-end -->

        <!-- project-area -->
        <section class="project-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="project-content">
                            <div class="section-title white-title mb-30">
                                <span class="sub-title">Our Complete Craft</span>
                                <h2 class="title">Some of Our Work in Craft Digital Agency</h2>
                            </div>
                            <p>Buzzcloud is an walking-talking time bomb of creativity & Strategy. We explode with value
                                creation at any given point according to your customised needs, be it in the middle of
                                our sleep or in the middle of yawn-worthy chemistry lecture. Explore now….</p>
                            <div class="content-bottom">
                                <a href="about-me.html" class="btn">View All Project <span></span></a>
                                <div class="project-nav">
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="project-item-wrap">
                            <div class="swiper-container project-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="project-item">
                                            <a href="project-details.html"><img
                                                    src="assets/img/project/project_img01.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-item">
                                            <a href="project-details.html"><img
                                                    src="assets/img/project/project_img02.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-item">
                                            <a href="project-details.html"><img
                                                    src="assets/img/project/project_img03.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-item">
                                            <a href="project-details.html" class="popup-image"><img
                                                    src="assets/img/project/project_img02.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-shape-wrap">
                <img src="assets/img/project/project_shape01.png" alt="" class="shape-one ribbonRotate">
                <img src="assets/img/project/project_shape02.png" alt="" class="shape-two ribbonRotate">
            </div>
        </section>
        <!-- project-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area pt-110 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Testimonials</span>
                            <h2 class="title">Shat Our Customer Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item-wrap">
                    <div class="row testimonial-active">
                        <div class="col-lg-3">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and “</p>
                                </div>
                                <div class="testimonial-info">
                                    <div class="thumb">
                                        <img src="assets/img/images/testimonial_avatar01.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Davis Levin</h4>
                                        <p>CEO Kawasaki Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and “</p>
                                </div>
                                <div class="testimonial-info">
                                    <div class="thumb">
                                        <img src="assets/img/images/testimonial_avatar02.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Davis Levin</h4>
                                        <p>CEO Kawasaki Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and “</p>
                                </div>
                                <div class="testimonial-info">
                                    <div class="thumb">
                                        <img src="assets/img/images/testimonial_avatar03.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Davis Levin</h4>
                                        <p>CEO Kawasaki Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and “</p>
                                </div>
                                <div class="testimonial-info">
                                    <div class="thumb">
                                        <img src="assets/img/images/testimonial_avatar04.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Davis Levin</h4>
                                        <p>CEO Kawasaki Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and “</p>
                                </div>
                                <div class="testimonial-info">
                                    <div class="thumb">
                                        <img src="assets/img/images/testimonial_avatar02.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Davis Levin</h4>
                                        <p>CEO Kawasaki Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and “</p>
                                </div>
                                <div class="testimonial-info">
                                    <div class="thumb">
                                        <img src="assets/img/images/testimonial_avatar03.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Davis Levin</h4>
                                        <p>CEO Kawasaki Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- consultation-area -->
        <section class="consultation-area pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="consultation-content">
                            <div class="section-title mb-25">
                                <img src="assets/img/icon/consultation_icon01.png" alt="">
                                <span class="sub-title">95% Accuracy</span>
                                <h2 class="title">Thank you for your interest in our digital marketing services!</h2>
                            </div>
                            <p> We are thrilled to learn more about your business and how we can help you achieve your
                                goals in the digital landscape.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="consultation-form-wrap">
                            <h4 class="title">Free Consultation</h4>
                            <form action="#">
                                <div class="form-grp">
                                    <input id="name" name="name" type="text" placeholder="Name">
                                </div>
                                <div class="form-grp">
                                    <input id="email" name="email" type="email" placeholder="Email Address">
                                </div>
                                <div class="form-grp">
                                    <input id="phone" name="phone" type="text" placeholder="Phone Number">
                                </div>
                                <div class="form-grp">
                                    <select id="shortBy" name="subject" class="form-select"
                                        aria-label="Default select example">
                                        <option value="">Subject</option>
                                        <option>Subject One</option>
                                        <option>Subject Two</option>
                                        <option>Subject Three</option>
                                        <option>Subject Four</option>
                                    </select>
                                </div>
                                <button class="btn" type="submit" name="consultation">Consultation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="consultation-shape-wrap">
                <img src="assets/img/images/consultation_shape01.png" alt="" class="shape-one ribbonRotate">
                <img src="assets/img/images/consultation_shape02.png" alt="" class="shape-two float-bob-x">
            </div>
        </section>
        <!-- consultation-area-end -->

        <!-- blog-area -->
        <section class="blog-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">My Blog</span>
                            <h2 class="title">News & Updates</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_img01.jpg" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="blog.html" class="tag">Branding</a>
                                <h2 class="title"><a href="blog-details.html">How To Create JavaScript Vanilla Gantt
                                        Chart: Adding</a></h2>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li class="avatar-img">
                                            <a href="blog.html"><img src="assets/img/blog/blog_avatar01.png" alt=""></a>
                                        </li>
                                        <li>By <a href="blog.html">Ataur</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_img02.jpg" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="blog.html" class="tag">Branding</a>
                                <h2 class="title"><a href="blog-details.html">How To Create JavaScript Vanilla Gantt
                                        Chart: Adding</a></h2>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li class="avatar-img">
                                            <a href="blog.html"><img src="assets/img/blog/blog_avatar02.png" alt=""></a>
                                        </li>
                                        <li>By <a href="blog.html">Ataur</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_img03.jpg" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="blog.html" class="tag">Branding</a>
                                <h2 class="title"><a href="blog-details.html">How To Create JavaScript Vanilla Gantt
                                        Chart: Adding</a></h2>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li class="avatar-img">
                                            <a href="blog.html"><img src="assets/img/blog/blog_avatar03.png" alt=""></a>
                                        </li>
                                        <li>By <a href="blog.html">Ataur</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area pt-110 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-80">
                            <span class="sub-title">Get update</span>
                            <h2 class="title">Get latest updates <br> and dealsi</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Enter your email address">
                                <button type="submit" class="btn">Subscribe <span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter-shape-wrap">
                <img src="assets/img/images/newsletter_bg_shape.png" alt="" class="bg-shape">
                <img src="assets/img/images/newsletter_shape01.png" alt="" class="shape-one">
                <img src="assets/img/images/newsletter_shape02.png" alt="" class="shape-two">
                <img src="assets/img/images/newsletter_shape03.png" alt="" class="shape-three">
                <img src="assets/img/images/newsletter_shape04.png" alt="" class="shape-four">
                <img src="assets/img/images/newsletter_shape05.png" alt="" class="shape-five">
                <img src="assets/img/images/newsletter_shape06.png" alt="" class="shape-six">
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->

    <?php
 require_once 'elements/footer.php';
 ?>



    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="assets/js/tween-max.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from themedox.com/demo/xolio/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 10:47:11 GMT -->

</html>