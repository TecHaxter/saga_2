<?php require_once(TEMPLATES_PATH . "/header.php") ?>

        <!-- Begin Munoz's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Single Product Type</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Munoz's Breadcrumb Area End Here -->

        <!-- Begin Munoz's Single Product Area -->
        <div class="sp-area">
            <div class="container">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sp-img_area">
                                <div class="sp-img_slider-2 slick-img-slider munoz-slick-slider arrow-type-two" data-slick-options='{
                                                    "slidesToShow": 1,
                                                    "arrows": false,
                                                    "fade": true,
                                                    "draggable": false,
                                                    "swipe": false,
                                                    "asNavFor": ".sp-img_slider-nav"
                                                    }'>
                                    <?php
                                        $count = 0;
                                        foreach ($product['images'] as $key => $image) {
                                            if($image['size'] == 'l') {
                                            $count++
                                            ?>
                                                <div class="single-slide red">
                                                    <a class="popup-img venobox vbox-item" href="/assets/images/product/large-size/<?php $product['id'].'/'.$count.'.'.$image['extension'] ?>" data-gall="myGallery">
                                                        <i class="fa fa-search"></i>
                                                        <img src="/assets/images/product/large-size/<?php echo($product['id'].'/'.$count.'.'.$image['extension']) ?>" alt="Munoz's Product Image">
                                                    </a>
                                                </div>
                                            <?php    
                                            }
                                        }
                                    ?>
                                </div>
                                <div class="sp-img_slider-nav slick-slider-nav munoz-slick-slider arrow-type-two" data-slick-options='{
                                                    "slidesToShow": 4,
                                                    "asNavFor": ".sp-img_slider-2",
                                                    "focusOnSelect": true
                                                    }' data-slick-responsive='[
                                                                            {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                                            {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                                                            {"breakpoint":321, "settings": {"slidesToShow": 2}}
                                                                        ]'>
                                    <?php
                                        $count = 0;
                                        foreach ($product['images'] as $key => $image) {
                                            if($image['size'] == 's') {
                                            $count++
                                            ?>
                                                <div class="single-slide red">
                                                    <img src="/assets/images/product/small-size/<?php echo($product['id'].'/'.$count.'.'.$image['extension']) ?>" alt="Munoz's Product Thumnail">
                                                </div>
                                            <?php    
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h2><a href="javascript:void(0)"><?php $product['name'] ?></a></h2>
                                </div>
                                <div class="price-box">
                                    <!-- <span class="new-price">$85.00</span> -->
                                    <?php if($product['discount'] == 0) { ?>
                                        <span class="new-price">$<?php echo $product['price'] ?></span>
                                    <?php }else { ?>
                                        <span class="old-price">$<?php echo $product['price'] ?></span>
                                        <span class="new-price">$<?php echo ($product['price']-($product['price']*($product['discount']/100))) ?></span>
                                    <?php } ?>
                                </div>
                                <div class="product-desc">
                                    <p><?php echo $product['detail'] ?></p>
                                </div>
                                <div class="in-stock"><i class="fa fa-check-circle"></i><span>203 In Stock</span></div>
                                <div class="quantity">
                                    <?php
                                        if(array_key_exists($product['id'], $_SESSION['cart'])) {
                                            ?>
                                                <div class="additional-btn_area">
                                                    <a class="additional_btn" href="/cart">Go To Cart</a>
                                                </div>
                                            <?php
                                        } else {
                                            ?>
                                                <div class="additional-btn_area">
                                                    <a class="additional_btn" href="/add-to-cart/<?php echo $product['id'] ?>/">Add To Cart</a>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <div class="qty-btn_area">
                                    <ul>
                                        <li><a class="qty-btn" href="wishlist.html" data-toggle="tooltip" title="Add To Wishlist"><i
                                                class="ion-android-favorite-outline"></i>Add To Wishlist</a></li>
                                        <li><a class="qty-btn" href="compare.html" data-toggle="tooltip" title="Compare This Product"><i
                                                class="ion-ios-shuffle-strong"></i>Add To Compare</a></li>
                                    </ul>
                                </div>
                                <div class="category-list_area">
                                    <h6>Category:</h6>
                                    <ul class="tags-list">
                                        <li>
                                            <a href="javascript:void(0)">Ethnic,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Fast food,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Fast casual,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Casual dining,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Premium casual,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Family style,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Brasserie & bistro</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="category-list_area tag-list_area">
                                    <h6>Tags:</h6>
                                    <ul class="tags-list">
                                        <li>
                                            <a href="javascript:void(0)">Pizza, </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Burger, </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Coffee</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="munoz-social_link">
                                    <h6>Share This product:</h6>
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
                </div>
            </div>
        </div>
        <!-- Munoz's Single Product Area End Here -->

        <!-- Begin Munoz's Product Area Two -->
        <div class="munoz-product_area munoz-product_area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="munoz-section_area">
                            <h3 class="section-title">Special Offer</h3>
                            <p class="short-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                        <div class="munoz-product_slider-2 slider-navigation_style-1">
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/assets/images/product/medium-size/13.jpg" alt="Munoz's Product Image">
                                            <img class="secondary-img" src="/assets/images/product/medium-size/14.jpg" alt="Munoz's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="product-category"><a href="javascript:void(0)">Omelette</a></div>
                                            <h3 class="product-name"><a href="single-product.html">Eaque nesciunt</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$60.00</span>
                                                <span class="new-price">$55.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/assets/images/product/medium-size/15.jpg" alt="Munoz's Product Image">
                                            <img class="secondary-img" src="/assets/images/product/medium-size/16.jpg" alt="Munoz's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="product-category"><a href="javascript:void(0)">Cora's breakfast</a>
                                            </div>
                                            <h3 class="product-name"><a href="single-product.html">Unde facilis</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$25.00</span>
                                                <span class="new-price">$20.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/assets/images/product/medium-size/1.jpg" alt="Munoz's Product Image">
                                            <img class="secondary-img" src="/assets/images/product/medium-size/2.jpg" alt="Munoz's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="product-category"><a href="javascript:void(0)">Rice and chicken</a>
                                            </div>
                                            <h3 class="product-name"><a href="single-product.html">Ullam nobis cumque</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$85.00</span>
                                                <span class="new-price">$80.50</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/assets/images/product/medium-size/4.jpg" alt="Munoz's Product Image">
                                            <img class="secondary-img" src="/assets/images/product/medium-size/3.jpg" alt="Munoz's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="product-category"><a href="javascript:void(0)">Barbecue</a></div>
                                            <h3 class="product-name"><a href="single-product.html">Tenetur facilis</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$35.99</span>
                                                <span class="new-price">$30.91</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/assets/images/product/medium-size/6.jpg" alt="Munoz's Product Image">
                                            <img class="secondary-img" src="/assets/images/product/medium-size/5.jpg" alt="Munoz's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="product-category"><a href="javascript:void(0)">Chicken wings</a></div>
                                            <h3 class="product-name"><a href="single-product.html">Asperiores repellat</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$85.99</span>
                                                <span class="new-price">$80.91</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/assets/images/product/medium-size/8.jpg" alt="Munoz's Product Image">
                                            <img class="secondary-img" src="/assets/images/product/medium-size/7.jpg" alt="Munoz's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="product-category"><a href="javascript:void(0)">Doner kebab</a></div>
                                            <h3 class="product-name"><a href="single-product.html">Sapiente perferendis</a></h3>
                                            <div class="price-box">
                                                <span class="old-price">$50.99</span>
                                                <span class="new-price">$46.91</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
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
        <!-- Munoz's Product Area Two End Here -->

<?php require_once(TEMPLATES_PATH . "/footer.php") ?>