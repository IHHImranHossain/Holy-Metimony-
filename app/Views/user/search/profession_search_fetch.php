<?= $this->extend('layout/user_home_layout')?>
<?= $this->section('content')?>

<div class="tab-content search_card">
    <div id="new" class="tab-pane fade in active show">
        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">

            <?php    
                   
                foreach($profession_search_data as $each)
                {
                    if($user_id !== $each['id'])
                    {                       
                        if($user_data['looking_for'] !== $each['looking_for'])
                        { 
                            // dd($each['profession']);
                            // exit();
                            if($user_data['community'] == $each['community'] || $user_data['profession'] == $each['profession'])
                            {       
            ?>
                                <div class="item text-center">
                                    <div class="product-miniature first-item js-product-miniature item-one">
                                        <div class="thumbnail-container">
                                            
                                                <img class="img-fluid" src="public/assets/upload/<?=$each['upload_image'] ?>" alt="img"
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
                                            <div class="product-buttons d-flex justify-content-center">

                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="<?= base_url('user_profile_view') ?>" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <?php
                            }                            
                        } 
                    }        
                } 
            ?>




        </div>
    </div>



</div>

<?= $this->endSection()?>