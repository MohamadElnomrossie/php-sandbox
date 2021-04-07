<?php include_once('header.php');
include_once('app/product.php');
$prod = new product;
$MostRecent = $prod->getMostRecent4();
$MostRecent = $MostRecent->fetch_all(MYSQLI_ASSOC);
$MostRated = $prod->getMostRated();
$MostRated = $MostRated->fetch_all(MYSQLI_ASSOC);
$MostOrdered = $prod->getMostOrdered();
$MostOrdered = $MostOrdered->fetch_all(MYSQLI_ASSOC);

?>

<!-- New Products Start -->
<div class="product-area gray-bg pt-90 pb-65">
    <div class="container">
        <div class="product-top-bar section-border mb-55">
            <div class="section-title-wrap text-center">
                <h3 class="section-title">New Products</h3>
            </div>
        </div>
    <div class="product-area bg-image-1 pt-20 pb-95">
        <div class="container">
            <div class="featured-product-active hot-flower owl-carousel product-nav">
            <?php foreach($MostRecent as $key=>$value){?>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.php">
                            <img alt="" src="assets/img/product/<?php echo $value['photo']?>">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.php?prod_id=<?php echo $value['id']?>"><?php echo $value['enName']?></a>
                                    <p class='text-muted'><?php echo $value['brandName']?></p>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.php">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
            <?php
            ;
        }
        ?>

            </div>
        </div>
        </div>

    </div>
    <!-- New Products End -->
    <!-- =================================================================================================== -->
    <!-- Top rated Area Start -->
    <div class="product-area gray-bg pt-90 pb-65">
    <div class="container">
        <div class="product-top-bar section-border mb-55">
            <div class="section-title-wrap text-center">
                <h3 class="section-title">Top Rated Products</h3>
            </div>
        </div>
        <div class="product-area bg-image-1 pt-20 pb-95">
            <div class="container">
                <div class="featured-product-active hot-flower owl-carousel product-nav">
            <?php foreach($MostRated as $key=>$value){?>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.php">
                            <img alt="" src="assets/img/product/<?php echo $value['photo']?>">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.php?prod_id=<?php echo $value['id']?>"><?php echo $value['enName']?></a>
                                    <p class='text-muted'><?php echo $value['brandName']?></p>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.php">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <input class='d-flex' data-role="rating" data-stars="5" disabled data-value="<?php echo $value['rating']?>">
                            <span class='d-flex'><?php echo $value['rating']?> star(s)</span>
                            <span><?php echo $value['reviewCount']?> review(s)</span>
                           
                        </div>
                    </div>
                </div>
            <?php
            ;
        }
        ?>

            </div>
        </div>
        </div>
        
    </div>
    <!-- Top rated Area End -->
<!-- ============================================================================================================== -->
    <!-- Most ordered Area Start -->
    <div class="product-area gray-bg pt-90 pb-65">
        <div class="container">
        <div class="product-top-bar section-border mb-55">
            <div class="section-title-wrap text-center">
                <h3 class="section-title">Most ordered</h3>
            </div>
        </div>
        <div class="product-area bg-image-1 pt-20 pb-95">
            <div class="container">
                <div class="featured-product-active hot-flower owl-carousel product-nav">
                    <?php foreach($MostOrdered as $key=>$value){?>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.php">
                            <img alt="" src="assets/img/product/<?php echo $value['photo']?>">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.php?prod_id=<?php echo $value['id']?>"><?php echo $value['enName']?></a>
                                    <p class='text-muted'><?php echo $value['brandName']?></p>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.php">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span><?php echo $value['ordersCount']?> orders(s)</span>
                            
                        </div>
                    </div>
                </div>
                <?php
            ;
        }
        ?>

            </div>
        </div>
        </div>
        
    </div>
    <!-- Most ordered Area End -->
    
    <!-- Testimonial Area Start -->
    <div class="testimonials-area bg-img pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore</p>
                            <h4>Gregory Perkins</h4>
                            <h5>Customer</h5>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore</p>
                            <h4>Khabuli Teop</h4>
                            <h5>Marketing</h5>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore </p>
                            <h4>Lotan Jopon</h4>
                            <h5>Admin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Newsletter Araea Start -->
    <div class="newsletter-area bg-image-2 pt-90 pb-100">
        <div class="container">
            <div class="product-top-bar section-border mb-45">
                <div class="section-title-wrap text-center">
                    <h3 class="section-title">Join to our Newsletter</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-6 col-md-10 col-md-auto">
                    <div class="footer-newsletter">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Your Email Address*" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <div class="submit-button">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Araea End -->
    

    <?php include_once('footer.php');
    ?>