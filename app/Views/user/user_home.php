<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>

<!-- main content -->
<div class="main-content">
    <div class="wrap-banner">
        <!-- menu category -->

        <!-- slide show -->
        <div class="section banner">
            <div class="tiva-slideshow-wrapper" id="banner">
                <div id="tiva-slideshow" class="nivoSlider">
                    <a href="#">
                        <img class="img-responsive" src="public/user/img/home/h1.jpg" title="#caption1"
                            alt="Slideshow image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="public/user/img/home/h2.jpg" title="#caption2"
                            alt="Slideshow image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="public/user/img/home/h3.jpg" title="#caption3"
                            alt="Slideshow image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <section class="page-home">
                    <div class="container">

                        <!-- all users -->
                        <div class="section living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <div class="grouptab row">

                                            <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                <div class="title-tab-content d-flex justify-content-start">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#new" data-toggle="tab" class="active"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#best" data-toggle="tab"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#sale" data-toggle="tab"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="new" class="tab-pane fade in active show">
                                                        <div
                                                            class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">



                                                            <?php
                                                        foreach($alldata as $each)
                                                        {
                                                            
                                                            if($user_id !== $each['id'] && $user_gender !== $each['gender'])
                                                            { 
                                                        ?>

                                                            <div class="item text-center">
                                                                <div
                                                                    class="product-miniature first-item js-product-miniature item-one">
                                                                    <div class="thumbnail-container">
                                                                            <img class="img-fluid"
                                                                                src="public/assets/upload/<?=$each['upload_image'] ?>"
                                                                                alt="img"
                                                                                style="height: 15rem; width: 10.5rem;">
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">
                                                                                    <?=$each['first_name'] ?>&nbsp;<?=$each['last_name'] ?>
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">View
                                                                                        Profile</span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="product-buttons d-flex justify-content-center">

                                                                            <a class="addToWishlist" href="#"
                                                                                data-rel="1" onclick="">
                                                                                <i class="fa fa-heart"
                                                                                    aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="<?= base_url('user_profile_view') ?>"
                                                                                class="quick-view hidden-sm-down"
                                                                                data-link-action="quickview">
                                                                                <i class="fa fa-eye"
                                                                                    aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                
                                                                
                                                                

                                                            }
                                                        } 
                                                        ?>




                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <!-- banner -->
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="public/user/img/home/effect1.jpg"
                                                    alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="public/user/img/home/effect2.jpg"
                                                    alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- best seller -->
                            <div class="section best-sellers col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="groupproductlist">
                                            <div class="row d-flex align-items-center">
                                                <!-- column 4 -->
                                                <div class="flex-4 col-lg-4 flex-4">
                                                    <h2 class="title-block">
                                                        <span class="sub-title"></span> MY Match
                                                    </h2>
                                                    <div class="content-text">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do
                                                            eiusmod
                                                            tempor incididunt ut labore dolore magna aliqua.
                                                        </p>
                                                        <div>
                                                            <a href="product-grid-sidebar-left.html"> View all product
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- column 8 -->
                                                <div class="block-content col-lg-8 flex-8">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active show">
                                                            <div
                                                                class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <div class="item text-center">
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                    src="public/user/img/product/26.jpg"
                                                                                    alt="img">
                                                                                <img class="img-fluid image-secondary"
                                                                                    src="public/user/img/product/1.jpg"
                                                                                    alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige"
                                                                                        title="Beige"></a>
                                                                                    <a href="#" class="color orange"
                                                                                        title="Orange"></a>
                                                                                    <a href="#" class="color green"
                                                                                        title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla
                                                                                        et
                                                                                        justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div
                                                                                        class="product-price-and-shipping">
                                                                                        <span
                                                                                            class="price">£20.08</span>
                                                                                        <del
                                                                                            class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                    class="formAddToCart">
                                                                                    <input type="hidden"
                                                                                        name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                        data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                    data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="quick-view hidden-sm-down"
                                                                                    data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                    src="public/user/img/product/25.jpg"
                                                                                    alt="img">
                                                                                <img class="img-fluid image-secondary"
                                                                                    src="public/user/img/product/2.jpg"
                                                                                    alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige"
                                                                                        title="Beige"></a>
                                                                                    <a href="#" class="color orange"
                                                                                        title="Orange"></a>
                                                                                    <a href="#" class="color green"
                                                                                        title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla
                                                                                        et
                                                                                        justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div
                                                                                        class="product-price-and-shipping">
                                                                                        <span
                                                                                            class="price">£20.08</span>
                                                                                        <del
                                                                                            class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                    class="formAddToCart">

                                                                                    <input type="hidden"
                                                                                        name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                        data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                    data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="quick-view hidden-sm-down"
                                                                                    data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                    src="public/user/img/product/10.jpg"
                                                                                    alt="img">
                                                                                <img class="img-fluid image-secondary"
                                                                                    src="public/user/img/product/9.jpg"
                                                                                    alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige"
                                                                                        title="Beige"></a>
                                                                                    <a href="#" class="color orange"
                                                                                        title="Orange"></a>
                                                                                    <a href="#" class="color green"
                                                                                        title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla
                                                                                        et
                                                                                        justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div
                                                                                        class="product-price-and-shipping">
                                                                                        <span
                                                                                            class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                    class="formAddToCart">
                                                                                    <input type="hidden"
                                                                                        name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                        data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                    data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="quick-view hidden-sm-down"
                                                                                    data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                    src="public/user/img/product/3.jpg"
                                                                                    alt="img">
                                                                                <img class="img-fluid image-secondary"
                                                                                    src="public/user/img/product/9.jpg"
                                                                                    alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige"
                                                                                        title="Beige"></a>
                                                                                    <a href="#" class="color orange"
                                                                                        title="Orange"></a>
                                                                                    <a href="#" class="color green"
                                                                                        title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla
                                                                                        et
                                                                                        justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div
                                                                                        class="product-price-and-shipping">
                                                                                        <span
                                                                                            class="price">£20.08</span>
                                                                                        <del
                                                                                            class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                    class="formAddToCart">
                                                                                    <input type="hidden"
                                                                                        name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                        data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                    data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="quick-view hidden-sm-down"
                                                                                    data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                    src="public/user/img/product/24.jpg"
                                                                                    alt="img">
                                                                                <img class="img-fluid image-secondary"
                                                                                    src="public/user/img/product/3.jpg"
                                                                                    alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige"
                                                                                        title="Beige"></a>
                                                                                    <a href="#" class="color orange"
                                                                                        title="Orange"></a>
                                                                                    <a href="#" class="color green"
                                                                                        title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla
                                                                                        et
                                                                                        justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div
                                                                                        class="product-price-and-shipping">
                                                                                        <span
                                                                                            class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                    class="formAddToCart">
                                                                                    <input type="hidden"
                                                                                        name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                        data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                    data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="quick-view hidden-sm-down"
                                                                                    data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                    src="public/user/img/product/23.jpg"
                                                                                    alt="img">
                                                                                <img class="img-fluid image-secondary"
                                                                                    src="public/user/img/product/4.jpg"
                                                                                    alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige"
                                                                                        title="Beige"></a>
                                                                                    <a href="#" class="color orange"
                                                                                        title="Orange"></a>
                                                                                    <a href="#" class="color green"
                                                                                        title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla
                                                                                        et
                                                                                        justo non augue</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div
                                                                                        class="product-price-and-shipping">
                                                                                        <span
                                                                                            class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                    class="formAddToCart">

                                                                                    <input type="hidden"
                                                                                        name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                        data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                    data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="quick-view hidden-sm-down"
                                                                                    data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
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
                                </div>
                            </div>
                        </div>


                        <!-- recent posts -->
                        <div class="container">
                            <div class="section recent-post">
                                <div class="title-block">RECENT POST</div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="tab-content">
                                            <div id="new" class="tab-pane fade in active show">
                                                <div
                                                    class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">



                                                    <?php
                                                        foreach($recent_post as $each)
                                                        {
                                                            
                                                            if($user_id !== $each['id'] && $user_gender !== $each['gender'])
                                                            { 
                                                        ?>

                                                    <div class="item text-center">
                                                        <div
                                                            class="product-miniature first-item js-product-miniature item-one">
                                                            <div class="thumbnail-container">
                                                                    <img class="img-fluid"
                                                                        src="public/assets/upload/<?=$each['upload_image'] ?>"
                                                                        alt="img"
                                                                        style="height: 15rem; width: 10.5rem;">

                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="<?= base_url('user_profile_view') ?>">
                                                                            <?=$each['first_name'] ?>&nbsp;<?=$each['last_name'] ?>
                                                                        </a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">View Profile</span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="product-buttons d-flex justify-content-center">

                                                                    <a class="addToWishlist" href="#" data-rel="1"
                                                                        onclick="">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="<?= base_url('user_profile_view') ?>" class="quick-view hidden-sm-down"
                                                                        data-link-action="quickview">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                                
                                                                
                                                                

                                                            }
                                                        } 
                                                        ?>




                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>

                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection()?>