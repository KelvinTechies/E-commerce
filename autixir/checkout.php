<?php
    require '../Auto_admin/Authentication.php';
    place_order();
// cart_page()

?>



<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/autixir-preview/autixir/checkout by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 13:26:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Autixir - Car Services and Auto Mechanic HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-transparent gradient-color-2">
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index"><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix get-support-color-white">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">08072220405, 09082224141</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu-icon"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index">Home Style - 01</a></li>
                                                <li><a href="index-2">Home Style - 02</a></li>
                                                <li><a href="index-3">Home Style - 03</a></li>
                                                <li><a href="index-4">Home Style - 04</a></li>
                                                <li><a href="index-5">Home Style - 05 <span class="menu-item-badge">video</span></a></li>
                                                <li><a href="index-6">Home Style - 06</a></li>
                                                <li><a href="index-7">Home Style - 07</a></li>
                                                <li><a href="index-8">Home Style - 08 <span class="menu-item-badge">Map</span></a></li>
                                                <li><a href="index-9">Home Style - 09</a></li>
                                                <li><a href="index-10">Home Style - 10</a></li>
                                                <li><a href="index-11">Home Style - 11</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-icon"><a href="#">About</a>
                                            <ul>
                                                <li><a href="about">About</a></li>
                                                <li><a href="service">Services</a></li>
                                                <li><a href="service-details">Service Details</a></li>
                                                <li><a href="portfolio">Portfolio</a></li>
                                                <li><a href="portfolio-2">Portfolio - 02</a></li>
                                                <li><a href="portfolio-details">Portfolio Details</a></li>
                                                <li><a href="team">Team</a></li>
                                                <li><a href="team-details">Team Details</a></li>
                                                <li><a href="faq">FAQ</a></li>
                                                <li><a href="locations">Google Map Locations</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-icon"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop">Shop</a></li>
                                                <li><a href="shop-grid">Shop Grid</a></li>
                                                <li><a href="shop-left-sidebar">Shop Left sidebar</a></li>
                                                <li><a href="shop-right-sidebar">Shop right sidebar</a></li>
                                                <li><a href="product-details">Shop details </a></li>
                                                <li><a href="product-details-2">Shop details 02</a></li>
                                                <li><a href="#">Other Pages <span class="float-end">>></span></a>
                                                    <ul>
                                                        <li><a href="cart">Cart</a></li>
                                                        <li><a href="wishlist">Wishlist</a></li>
                                                        <li><a href="checkout">Checkout</a></li>
                                                        <li><a href="order-tracking">Order Tracking</a></li>
                                                        <li><a href="account">My Account</a></li>
                                                        <li><a href="login">Sign in</a></li>
                                                        <li><a href="register">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-car-grid">Shop Car Grid</a></li>
                                                <li><a href="shop-car-left-sidebar">Shop Car Left sidebar</a></li>
                                                <li><a href="shop-car-right-sidebar">Shop Car right sidebar</a></li>
                                                <li><a href="product-details-3">Shop Car details </a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-icon"><a href="#">News</a>
                                            <ul>
                                                <li><a href="blog">News</a></li>
                                                <li><a href="blog-grid">News Grid</a></li>
                                                <li><a href="blog-left-sidebar">News Left sidebar</a></li>
                                                <li><a href="blog-right-sidebar">News Right sidebar</a></li>
                                                <li><a href="blog-details">News details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-icon"><a href="#">Pages</a>
                                            <ul class="mega-menu">
                                                <li><a href="#">Inner Pages</a>
                                                    <ul>
                                                        <li><a href="portfolio">Portfolio</a></li>
                                                        <li><a href="portfolio-2">Portfolio - 02</a></li>
                                                        <li><a href="portfolio-details">Portfolio Details</a></li>
                                                        <li><a href="team">Team</a></li>
                                                        <li><a href="team-details">Team Details</a></li>
                                                        <li><a href="faq">FAQ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Inner Pages</a>
                                                    <ul>
                                                        <li><a href="history">History</a></li>
                                                        <li><a href="appointment">Appointment</a></li>
                                                        <li><a href="locations">Google Map Locations</a></li>
                                                        <li><a href="404">404</a></li>
                                                        <li><a href="contact">Contact</a></li>
                                                        <li><a href="coming-soon">Coming Soon</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shop Pages</a>
                                                    <ul>
                                                        <li><a href="shop">Shop</a></li>
                                                        <li><a href="shop-left-sidebar">Shop Left sidebar</a></li>
                                                        <li><a href="shop-right-sidebar">Shop right sidebar</a></li>
                                                        <li><a href="shop-grid">Shop Grid</a></li>
                                                        <li><a href="product-details">Shop details </a></li>
                                                        <li><a href="cart">Cart</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop"><img src="img/banner/menu-banner-1.jpg" alt="#"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact">Contact</a></li>
                                        <li class="special-link"><a href="appointment">GET APPOINTMENT</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle menu-btn-white menu-btn-border--- d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->
    
    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Wheel Bearing Retainer</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Brake Conversion Kit</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">OE Replica Wheels</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Shock Mount Insulator</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="cart" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index"><img src="img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index">Home Style - 01</a></li>
                            <li><a href="index-2">Home Style - 02</a></li>
                            <li><a href="index-3">Home Style - 03</a></li>
                            <li><a href="index-4">Home Style - 04</a></li>
                            <li><a href="index-5">Home Style - 05 <span class="menu-item-badge">video</span></a></li>
                            <li><a href="index-6">Home Style - 06</a></li>
                            <li><a href="index-7">Home Style - 07</a></li>
                            <li><a href="index-8">Home Style - 08 <span class="menu-item-badge">Map</span></a></li>
                            <li><a href="index-9">Home Style - 09</a></li>
                            <li><a href="index-10">Home Style - 10</a></li>
                            <li><a href="index-11">Home Style - 11</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="about">About</a></li>
                            <li><a href="service">Services</a></li>
                            <li><a href="service-details">Service Details</a></li>
                            <li><a href="portfolio">Portfolio</a></li>
                            <li><a href="portfolio-2">Portfolio - 02</a></li>
                            <li><a href="portfolio-details">Portfolio Details</a></li>
                            <li><a href="team">Team</a></li>
                            <li><a href="team-details">Team Details</a></li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="locations">Google Map Locations</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop">Shop</a></li>
                            <li><a href="shop-grid">Shop Grid</a></li>
                            <li><a href="shop-left-sidebar">Shop Left sidebar</a></li>
                            <li><a href="shop-right-sidebar">Shop right sidebar</a></li>
                            <li><a href="product-details">Shop details </a></li>
                            <li><a href="product-details-2">Shop details 02</a></li>
                            <li><a href="shop-car-grid">Shop Car Grid</a></li>
                            <li><a href="shop-car-left-sidebar">Shop Car Left sidebar</a></li>
                            <li><a href="shop-car-right-sidebar">Shop Car right sidebar</a></li>
                            <li><a href="product-details-3">Shop Car details </a></li>
                            <li><a href="cart">Cart</a></li>
                            <li><a href="wishlist">Wishlist</a></li>
                            <li><a href="checkout">Checkout</a></li>
                            <li><a href="order-tracking">Order Tracking</a></li>
                            <li><a href="account">My Account</a></li>
                            <li><a href="login">Sign in</a></li>
                            <li><a href="register">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">News</a>
                        <ul class="sub-menu">
                            <li><a href="blog">News</a></li>
                            <li><a href="blog-grid">News Grid</a></li>
                            <li><a href="blog-left-sidebar">News Left sidebar</a></li>
                            <li><a href="blog-right-sidebar">News Right sidebar</a></li>
                            <li><a href="blog-details">News details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about">About</a></li>
                            <li><a href="service">Services</a></li>
                            <li><a href="service-details">Service Details</a></li>
                            <li><a href="portfolio">Portfolio</a></li>
                            <li><a href="portfolio-2">Portfolio - 02</a></li>
                            <li><a href="portfolio-details">Portfolio Details</a></li>
                            <li><a href="team">Team</a></li>
                            <li><a href="team-details">Team Details</a></li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="history">History</a></li>
                            <li><a href="appointment">Appointment</a></li>
                            <li><a href="locations">Google Map Locations</a></li>
                            <li><a href="404">404</a></li>
                            <li><a href="contact">Contact</a></li>
                            <li><a href="coming-soon">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="account" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="wishlist" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="cart" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                            Shoping Cart
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                            <h1 class="section-title white-color">Checkout</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                            <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle ="collapse">Click here to login</a></h5>
                            <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn_coupon-code-form ltn__form-box">
                                    <p>Please login your accont.</p>
                                    <form action="#" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__name" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" name="ltn__email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                        <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                        <p class="mt-30"><a href="register">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                            <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-bs-toggle ="collapse">Click here to enter your code</a></h5>
                            <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn__coupon-code-form">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <form action="#" >
                                        <input type="text" name="coupon-code" placeholder="Coupon code">
                                        <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Billing Details</h4>
                            <div class="ltn__checkout-single-content-info">
                                    <h6>Personal Information</h6>
                                     
                                <form action="" method="post" >
                                    
                                        <?php
    bill_address()
?>  
                                        <!-- <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__lastname" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="ltn__email" placeholder="email address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" name="ltn__phone" placeholder="phone number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__company" placeholder="Company name (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__phone" placeholder="Company address (optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Country</h6>
                                            <div class="input-item">
                                                <select class="nice-select">
                                                    <option>Select Country</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                    <option>China</option>
                                                    <option>Morocco</option>
                                                    <option>Saudi Arabia</option>
                                                    <option>United Kingdom (UK)</option>
                                                    <option>United States (US)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Address</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <input type="text" placeholder="House number and street name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Town / City</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>State </h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Zip</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="Zip">
                                            </div>
                                        </div>
                                    </div>
                                    <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p>
                                    <h6>Order Notes (optional)</h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div> -->

                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            <!-- card -->
                            <div class="card">
                                <h5 class="collapsed ltn__card-title" data-bs-toggle ="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                    Check payments
                                </h5>
                                <div id="faq-item-2-1" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h5 class="ltn__card-title" data-bs-toggle ="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true"> 
                                    Cash on delivery 
                                </h5>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>
                            </div>                          
                            <!-- card -->
                            <div class="card">
                                <h5 class="collapsed ltn__card-title" data-bs-toggle ="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false" >
                                    PayPal <img src="img/icons/payment-3.png" alt="#">
                                </h5>
                                <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        </div>
                        <!-- <form action="" method="post"> -->
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit" name="order">Place order</button>
                        </form>
                    </div>
                </div>
  
                <div class="col-lg-6">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2">Ordered Products</h4>

                                      <?php

ordered_products();

            ?>
                        <!-- <table class="table">
                            <tbody>
                                <tr>
                                    <td>Brake Conversion Kit <strong>× 2</strong></td>
                                    <td>$298.00</td>
                                </tr>
                                <tr>
                                    <td>OE Replica Wheels <strong>× 2</strong></td>
                                    <td>$170.00</td>
                                </tr>
                                <tr>
                                    <td>Wheel Bearing Retainer <strong>× 2</strong></td>
                                    <td>$150.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handing</td>
                                    <td>$15.00</td>
                                </tr>
                                <tr>
                                    <td>Vat</td>
                                    <td>$00.00</td>
                                </tr>
                                <tr> -->
                                    <!-- <td><strong>Order Total</strong></td>
                                    <td><strong>$633.00</strong></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- WISHLIST AREA START -->

    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        <div class="footer-top-area  section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="img/bg/4.jpg">
                            <h6 class="ltn__secondary-color text-uppercase">// time shedule</h6>
                            <h4 class="footer-title">Meet In Timeline.</h4>
                            <ul>
                                <li>Monday <span>07:00AM - 20:00PM</span></li>
                                <li>Tuesday <span>07:00AM - 20:00PM</span></li>
                                <li>Wednesday <span>07:00AM - 20:00PM</span></li>
                                <li>Thursday <span>07:00AM - 20:00PM</span></li>
                                <li>Friday <span>07:00AM - 20:00PM</span></li>
                                <li>Saturday <span>07:00AM - 20:00PM</span></li>
                                <li>Sunday <span>Official Holiday</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Services.</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service">Engine Diagnostics</a></li>
                                    <li><a href="service">Vehicles Damaged</a></li>
                                    <li><a href="service">Air Conditioning Evac</a></li>
                                    <li><a href="service">Anti Lock Brake Service</a></li>
                                    <li><a href="service">Computer Diagnostics</a></li>
                                    <li><a href="service">Performance Upgrades</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service">Car Wash & Cleaning</a></li>
                                    <li><a href="service">Choose your Repairs</a></li>
                                    <li><a href="service">Free Consultancy</a></li>
                                    <li><a href="service">Emergency Time</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">News Feeds.</h4>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index"><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6>Copyright & Design By</h6>
                                    <h4>Osagioduwa Nosakhare 
                                        <!-- <span class="current-year"></span> -->
                                </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/autixir-preview/autixir/checkout by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 13:27:31 GMT -->
</html>

