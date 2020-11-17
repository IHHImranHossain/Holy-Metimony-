<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BDShaadi</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">





    <!-- Vendor CSS -->
    <link rel="stylesheet" href="public/user/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/user/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/user/libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="public/user/libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="public/user/libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="public/user/libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="public/user/libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="public/user/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/user/css/card_style.css">
    <link rel="stylesheet" type="text/css" href="public/user/css/reponsive.css">

    <link href="public/user_cv/dist/styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="home">
    <header>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="<? base_url('user_home') ?>">
                        <img class="logo-mobile img-fluid" src="public/home/images/h1.png" alt="Prestashop_Furnitica">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>


        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="<?= base_url('user_home') ?>">
                                <img class="img-fluid" src="public/home/images/h1.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="nav-link">
                                    <a href="<?= base_url('user_home') ?>" class="parent">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="parent">Blog</a>

                                </li>
                                <li>
                                    <a href="#" class="parent">Account</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="item">
                                                <a href="index-2.html" title="">Home Page 1</a>
                                            </li>
                                            <li class="item">
                                                <a href="home2.html" title="Home Page 2">Home Page 2</a>
                                            </li>
                                            <li class="item">
                                                <a href="home3.html" title="Home Page 3">Home Page 3</a>
                                            </li>
                                            <li class="item">
                                                <a href="home4.html" title="Home Page 4">Home Page 4</a>
                                            </li>
                                            <li class="item">
                                                <a href="home5.html" title="Home Page 5">Home Page 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">


                        <!-- acount  -->
                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <?php $session = session(); ?>
                                    <img src="public/assets/upload/<?php echo $session->get('upload_image');?>"
                                        class="img-circle elevation-2" alt="User Image" style="    height: 2.5rem;
                                        width: 2.0rem; border-radius:100%">
                                    <span class="brand-text font-weight-light"
                                        style="font-size: 1.0rem;"><strong>Account</strong></span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <a class="login" href="<?= base_url('profile') ?>" rel="nofollow"
                                            title="Your Profile">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="check-out" href="<?= base_url('your_cv')?>" rel="nofollow"
                                            title="Checkout">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <span>Your Biodata(CV)</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="user-wishlist.html" title="My Wishlists">
                                            <i class="fa fa-heart"></i>
                                            <span>My Wishlists</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="<?= base_url('logout') ?>" title="Log Out">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop_cart">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count">1</span>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail.html">
                                                            <img src="public/user/img/product/5.jpg" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                        </div>
                                                        <div>
                                                            2 x
                                                            <span class="product-price">£28.98</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    <td>£92.96</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="3" class="d-flex justify-content-center">
                                                        <div class="cart-button">
                                                            <a href="product-cart.html" title="View Cart">View Cart</a>
                                                            <a href="product-checkout.html"
                                                                title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- search -->
    <div class="row">
        <div class="col-md-2 side_search_manu">
            <div class="side_search_manu">
                <div class="categoriestab-right col-lg-12 align-items-start d-flex flex-column col-md-2 flex-2">
                    <div class="block-title-content">
                        <h2 class="title_search">
                            Search Category
                        </h2>
                    </div>
                    <!-- <div class="btn dropdown-toggle toggle-cate-child-vertical hidden-md-up mr-auto">Select category</div> -->
                    <div class="cate-child-vertical">
                        <ul class="dn">
                            <li>
                                <a href="<?= base_url('quick_search') ?>">Quick
                                    Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('profession_search') ?>">Profession Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('smart_search') ?>">Smart Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('advance_search') ?>">Advance Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('marital_status_search') ?>">Marital Status Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('education_search') ?>">Education Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('major_active_search') ?>">Major Active Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('community_search') ?>">Community Search</a>
                            </li>
                            <li>
                                <a href="<?= base_url('district_search') ?>">District Search</a>
                            </li>
                            <li class="last">
                                <a href="<?= base_url('view_all_search') ?>">View all</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 without_layout_body">
            <div>
                <?= $this->renderSection('content')?>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>




    <!-- footer -->
    <footer class="footer-one">
        <div class="inner-footer">
            <div class="container">
                <div class="footer-top col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="tiva-html col-lg-4 col-md-12 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <p class="logo-footer">
                                        <img src="public/user/img/home/logo.png" alt="img">
                                    </p>
                                    <p class="content-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed
                                        do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content footer_link">
                                    <ul>
                                        <li>
                                            <a href="#" class="footer_link">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#" class="footer_link">Reasons to shop</a>
                                        </li>
                                        <li>
                                            <a href="#" class="footer_link">What our customers say</a>
                                        </li>
                                        <li>
                                            <a href="#" class="footer_link">Meet the teaml</a>
                                        </li>
                                        <li>
                                            <a href="#" class="footer_link">Contact our buyers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <p class="img-payment ">
                                        <img class="img-fluid" src="public/user/img/home/payment-footer.png" alt="img">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-html col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="title-block" style="color: white;">
                                    Contact Us
                                </div>
                                <div class="block-content">
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Address :</span>
                                        </div>
                                        <div class="content-contact address-contact">
                                            <p style="color: white;">123 Suspendis matti, Visaosang Building VST
                                                District NY Accums, North
                                                American</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span style="color: white;">Email :</span>
                                        </div>
                                        <div class="content-contact mail-contact">
                                            <p style="color: white;">support@domain.com</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Hotline :</span>
                                        </div>
                                        <div class="content-contact phone-contact">
                                            <p style="color: white;">+0012-345-67890</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>Opening Hours :</span>
                                        </div>
                                        <div class="content-contact hours-contact">
                                            <p style="color: white;">Monday - Sunday / 08.00AM - 19.00</p>
                                            <span style="color: white;">(Except Holidays)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-modules col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="block-content">
                                    <div class="title-block">Newsletter</div>
                                    <div class="sub-title">Sign up to our newsletter to get the latest articles,
                                        lookbooks voucher codes direct
                                        to your inbox
                                    </div>
                                    <div class="block-newsletter">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" value=""
                                                    placeholder="Enter Your Email">
                                                <span class="input-group-btn">
                                                    <button class="effect-btn btn btn-secondary "
                                                        name="submitNewsletter" type="submit">
                                                        <span>subscribe</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="action" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="social-content">
                                        <div class="title-block">
                                            Follow us on
                                        </div>
                                        <div id="social-block">
                                            <div class="social">
                                                <ul class="list-inline mb-0 justify-content-end">
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="payment-content">
                                        <div class="title-block">
                                            Payment accept
                                        </div>
                                        <div class="payment-image">
                                            <img class="img-fluid" src="public/user/img/home/payment.png" alt="img">
                                        </div>
                                    </div>
                                    <!-- Popup newsletter -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- menu mobie left -->
    <div class="mobile-top-menu d-md-none">
        <button type="button" class="close" aria-label="Close">
            <i class="zmdi zmdi-close"></i>
        </button>
        <div class="tiva-verticalmenu block" data-count_showmore="17">
            <div class="box-content block-content">
                <div class="block-title-content">
                    <h2 class="title_search">
                        Search Category
                    </h2>
                </div>
                <div class="verticalmenu" role="navigation">
                    <ul class="dn">
                        <li>
                            <a href="<?= base_url('quick_search') ?>">Quick
                                Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('profession_search') ?>">Profession Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('smart_search') ?>">Smart Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('advance_search') ?>">Advance Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('marital_status_search') ?>">Marital Status Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('education_search') ?>">Education Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('major_active_search') ?>">Major Active Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('community_search') ?>">Community Search</a>
                        </li>
                        <li>
                            <a href="<?= base_url('district_search') ?>">District Search</a>
                        </li>
                        <li class="last">
                            <a href="<?= base_url('view_all_search') ?>">View all</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- menu mobie right -->
    <div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">Menu</div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content">
                <nav>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div id="megamenu" class="clearfix">
                        <ul class="menu level1">
                            <li class="item home-page has-sub">
                                <a href="<?= base_url('user_home') ?>" title="Home">
                                    <i class="fa fa-home" aria-hidden="true"></i>Home</a>

                            </li>
                            <li class="item has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#blog"
                                    aria-expanded="false" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="#" title="Blog">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>Account</a>

                                <div class="subCategory collapse" id="blog" aria-expanded="true" role="status">
                                    <ul>
                                        <li class="item">
                                            <a class="login" href="<?= base_url('profile') ?>" rel="nofollow"
                                                title="Your Profile">
                                                <i class="fa fa-cog"></i>
                                                <span>My Account</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a class="check-out" href="<?= base_url('your_cv')?>" rel="nofollow"
                                                title="Checkout">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                <span>Your Biodata(CV)</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="user-wishlist.html" title="My Wishlists">
                                                <i class="fa fa-heart"></i>
                                                <span>My Wishlists</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="item has-sub">
                                <a href="<?= base_url('logout') ?>" title="Log Out">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    <span>Log Out</span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <!-- Vendor JS -->
    <script src="public/user/libs/jquery/jquery.min.js"></script>
    <script src="public/user/libs/popper/popper.min.js"></script>
    <script src="public/user/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/user/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="public/user/libs/owl-carousel/owl.carousel.min.js"></script>

    <!-- Template JS -->
    <script src="public/user/js/theme.js"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/74ab53f45b.js" crossorigin="anonymous"></script>


</body>



</html>