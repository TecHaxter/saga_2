<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/munoz-preview-v1/munoz/index by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 14:49:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home One || Munoz - Restaurant HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="/assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="/assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css">
    <!-- Venobox.css -->
    <link rel="stylesheet" href="/assets/css/plugins/venobox.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <div class="main-loader">
                    <span class="loader1"></span>
                    <span class="loader2"></span>
                    <span class="loader3"></span>
                </div>
            </div>
        </div>
        <!-- Loading Area End Here -->

        <!-- Begin Munoz's Header Main Area -->
        <header>
            <div class="header-main_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-5">
                            <div class="header-logo">
                                <a href="index">
                                    <img src="/assets/images/menu/logo/1.png" alt="Munoz's Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 d-none d-lg-block position-static">
                            <div class="main-menu_area">
                                <nav class="main_nav">
                                    <ul>
                                        <li class="dropdown-holder"><a href="/index">Home</a>
                                        </li>
                                        <li><a href="about-us">About Us</a></li>
                                        <li class="megamenu-holder"><a href="/shop">Shop</a>
                                        </li>
                                        <li><a href="/blog">Blog</a>
                                        </li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-7">
                            <div class="header-right_area">
                                <ul>
                                    <li>
                                        <a href="#searchBar" class="search-btn toolbar-btn">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <i class="ion-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-main_area header-sticky stick">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-5">
                            <div class="header-logo">
                                <a href="index">
                                    <img src="/assets/images/menu/logo/1.png" alt="Munoz's Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 d-none d-lg-block position-static">
                            <div class="main-menu_area">
                                <nav class="main_nav">
                                    <ul>
                                        <li class="dropdown-holder"><a href="index">Home</a>
                                        </li>
                                        <li><a href="about-us">About Us</a></li>
                                        <li class="megamenu-holder"><a href="shop">Shop</a>
                                        </li>
                                        <li><a href="blog-left-sidebar">Blog</a>
                                        </li>
                                        <li><a href="contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-7">
                            <div class="header-right_area">
                                <ul>
                                    <li>
                                        <a href="#searchBar" class="search-btn toolbar-btn">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <i class="ion-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="offcanvas-inner_logo">
                        <a href="shop">
                            <img src="/assets/images/menu/logo/1.png" alt="Munoz's Offcanvas Logo">
                        </a>
                    </div>
                    <div class="short-desc">
                        <p>We are a team of designers and developers that create high quality HTML Template & Woocommerce,
                            Shopify Themes.
                        </p>
                    </div>
                    <div class="offcanvas-component">
                        <span class="offcanvas-component_title">Dashboard</span>
                        <?php
                            if(isset($_SESSION['user_active'])) {
                        ?>
                            <ul class="offcanvas-component_menu">
                                <li><a href="/my-account">My Account</a></li>
                            </ul>
                            <ul class="offcanvas-component_menu">
                                <li><a href="/wishlist">Wishlist</a></li>
                            </ul>
                            <ul class="offcanvas-component_menu">
                                <li><a href="/cart">Cart</a></li>
                            </ul>
                        <?php
                            } else {
                        ?>
                            <ul class="offcanvas-component_menu">
                                <li><a href="/login-register">Register</a></li>
                                <li><a href="/login-register">Login</a></li>
                            </ul>
                            <ul class="offcanvas-component_menu">
                                <li><a href="/wishlist">Wishlist</a></li>
                            </ul>
                            <ul class="offcanvas-component_menu">
                                <li><a href="/cart">Cart</a></li>
                            </ul>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="offcanvas-inner-social_link">
                        <div class="munoz-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Shopping Cart</h4>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="/assets/images/product/small-size/1.jpg" alt="Munoz's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop">Barbeku</a>
                                    <span class="product-item_quantity">1 x $25.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="/assets/images/product/small-size/2.jpg" alt="Munoz's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop">Fried chicken</a>
                                    <span class="product-item_quantity">2 x $120.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="/assets/images/product/small-size/3.jpg" alt="Munoz's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop">Pizza</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$225.00</span>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="cart" class="munoz-btn munoz-btn_dark munoz-btn_fullwidth">Minicart</a>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="checkout" class="munoz-btn munoz-btn_dark munoz-btn_fullwidth">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <!-- Begin Offcanvas Search Area -->
                        <div class="offcanvas-search">
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <!-- Offcanvas Search Area End Here -->
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_search">
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="index"><span
                                        class="mm-text">Home</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index">
                                                <span class="mm-text">Home Shop 01</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2">
                                                <span class="mm-text">Home Shop 02</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop">
                                        <span class="mm-text">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="shop">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column">
                                                        <span class="mm-text">Grid Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop-list-left-sidebar">
                                                <span class="mm-text">Shop List</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-list-fullwidth">
                                                        <span class="mm-text">Full Width</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product-gallery-left">
                                                <span class="mm-text">Single Product Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product-gallery-left">
                                                        <span class="mm-text">Gallery Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-gallery-right">
                                                        <span class="mm-text">Gallery Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-left">
                                                        <span class="mm-text">Tab Style Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-right">
                                                        <span class="mm-text">Tab Style Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-left">
                                                        <span class="mm-text">Sticky Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-right">
                                                        <span class="mm-text">Sticky Right</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product">
                                                <span class="mm-text">Single Product Type</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product">
                                                        <span class="mm-text">Single Product</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-slider">
                                                        <span class="mm-text">Single Product Slider</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product">
                                                <span class="mm-text">Shop Related Pages</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/my-account">
                                                        <span class="mm-text">My Account</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/login-register">
                                                        <span class="mm-text">Login | Register</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/wishlist">
                                                        <span class="mm-text">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/cart">
                                                        <span class="mm-text">Cart</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout">
                                                        <span class="mm-text">Checkout</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare">
                                                        <span class="mm-text">Comparer</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-left-sidebar">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-left-sidebar">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-2-column">
                                                        <span class="mm-text">Column Two</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-column">
                                                        <span class="mm-text">Column Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-left-sidebar">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-list-left-sidebar">
                                                <span class="mm-text">List View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-list-fullwidth">
                                                        <span class="mm-text">List Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-left-sidebar">
                                                        <span class="mm-text">List Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-right-sidebar">
                                                        <span class="mm-text">List Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-details-left-sidebar">
                                                <span class="mm-text">Blog Details</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-details-left-sidebar">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-right-sidebar">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-gallery-format">
                                                <span class="mm-text">Blog Format</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-gallery-format">
                                                        <span class="mm-text">Gallery Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-audio-format">
                                                        <span class="mm-text">Audio Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-video-format">
                                                        <span class="mm-text">Video Format</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="about-us">
                                                <span class="mm-text">About Us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact">
                                                <span class="mm-text">Contact</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq">
                                                <span class="mm-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                        class="mm-text">User
                                        Setting</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/my-account">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/login-register">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                    if(isset($_SESSION['user_active'])) {
                                ?>
                                    <ul class="offcanvas-component_menu">
                                        <li><a href="/my-account">My Account</a></li>
                                    </ul>
                                    <ul class="offcanvas-component_menu">
                                        <li><a href="/wishlist">Wishlist</a></li>
                                    </ul>
                                    <ul class="offcanvas-component_menu">
                                        <li><a href="/cart">Cart</a></li>
                                    </ul>
                                <?php
                                    } else {
                                ?>
                                    <ul class="offcanvas-component_menu">
                                        <li><a href="/login-register">Register</a></li>
                                        <li><a href="/login-register">Login</a></li>
                                    </ul>
                                    <ul class="offcanvas-component_menu">
                                        <li><a href="/wishlist">Wishlist</a></li>
                                    </ul>
                                    <ul class="offcanvas-component_menu">
                                        <li><a href="/cart">Cart</a></li>
                                    </ul>
                                <?php
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Munoz's Header Main Area End Here -->