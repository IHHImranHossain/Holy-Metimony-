<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>
<!-- main content -->
<div class="main-content">
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
                                                                        <img class="img-fluid user_image"
                                                                            src="public/assets/upload/<?=$each['upload_image'] ?>"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a
                                                                                    href="<?=  base_url('user_profile_view').'/'.$each['id'];?>">
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

                                                                            <a href="<?=  base_url('user_profile_view').'/'.$each['id'];?>"
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
                                                <img class="banner_img" src="public/assets/img/w1.jpg" alt="banner-1"
                                                    title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="banner_img" src="public/assets/img/w2.jpg" alt="banner-2"
                                                    title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- My Match -->
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
                                                        <p> This is the matches profile which are matched with your
                                                            perference
                                                        </p>
                                                        <div>
                                                            <a href="<?= base_url('view_all_search') ?>"> View all
                                                                profiles
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- column 8 -->
                                                <div class="block-content col-lg-8 flex-8">
                                                    <div class="tab-content">
                                                        <div id="new" class="tab-pane fade in active show">
                                                            <div
                                                                class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <?php
                                                                    foreach($alldata as $each)
                                                                    {
                                                                        
                                                                        if($login_user_data[0]['id'] !== $each['id'] && $login_user_data[0]['gender'] !== $each['gender'] )
                                                                        { 
                                                                            if($login_user_data[0]['p_marital_status'] == $each['marital_status'] && $login_user_data[0]['p_children'] == $each['children'] &&
                                                                            $login_user_data[0]['p_complexion'] == $each['complexion'] && $login_user_data[0]['p_religion'] == $each['community'] && 
                                                                            $login_user_data[0]['p_education'] == $each['education'] && $login_user_data[0]['p_profession'] == $each['profession'] &&
                                                                            $login_user_data[0]['p_mother_tongue'] == $each['mother_tongue'] && $login_user_data[0]['p_family_value'] == $each['family_value'])
                                                                            {
                                                                ?>
                                                                <div class="item text-center">
                                                                    <div
                                                                        class="product-miniature first-item js-product-miniature item-one">
                                                                        <div class="thumbnail-container">
                                                                            <img class="img-fluid user_image"
                                                                                src="public/assets/upload/<?=$each['upload_image'] ?>"
                                                                                alt="img">
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a
                                                                                        href="<?= base_url('user_profile_view') ?>">
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
                                                                                    <div
                                                                                        class="product-price-and-shipping">
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
                                                                                <a href="<?php echo base_url('user_profile_view').'/'.$each['id'];?>"
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
                                <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                    <?php
                                        foreach($recent_post as $each)
                                        {
                                            if($user_id !== $each['user_id'] && $user_gender !== $each['gender'])
                                            { 
                                    ?>
                                    <div class="item text-center">
                                        <div class="product-miniature first-item js-product-miniature item-one">
                                            <div class="thumbnail-container">
                                                <img class="img-fluid user_image"
                                                    src="public/assets/upload/<?=$each['upload_image'] ?>" alt="img">
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
                                                <div class="product-buttons d-flex justify-content-center">

                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="<?php echo base_url('user_profile_view').'/'.$each['user_id'];?>"
                                                        class="quick-view hidden-sm-down" data-link-action="quickview">
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