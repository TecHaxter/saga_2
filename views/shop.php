<?php    
    // load up your config file
    require_once("resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>

        <!-- Begin Munoz's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop Grid View</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Shop Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Munoz's Breadcrumb Area End Here -->

        <!-- Begin Munoz's Content Wrapper Area -->
        <div class="munoz-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="munoz-sidebar-catagories_area">
                            <div class="munoz-sidebar_categories">
                                <div class="munoz-categories_title munoz-tags_title">
                                    <h5>Product Catagory</h5>
                                </div>
                                <ul class="munoz-tags_list">
                                    <?php
                                        foreach ($catagories as $key => $catagory) {
                                            ?>
                                            <li><a href="/shop/catagory/<?php echo $catagory['id']?>"><?php echo $catagory['catagory']?></a></li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="munoz-sidebar_categories munoz-banner_area sidebar-banner_area">
                                <div class="banner-item img-hover_effect">
                                    <div class="banner-img">
                                        <a href="javascript:void(0)">
                                            <img class="img-full" src="/assets/images/shop/1.jpg" alt="Munoz's Banner">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            <div class="product-page_count">
                                <p>Showing 1–9 of 40 results</p>
                            </div>
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">Short By:</label>
                                    <select class="nice-select">
                                        <option value="1">Default sorting</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                        <option value="5">Rating (Highest)</option>
                                        <option value="5">Rating (Lowest)</option>
                                        <option value="5">Model (A - Z)</option>
                                        <option value="5">Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid gridview-3 row">
                            <?php foreach ($products as $key => $product) { ?>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="/shop/<?php echo $product['id'] ?>">
                                                    <?php
                                                        $count = 0;
                                                        foreach ($product['images'] as $image) {
                                                            if ($image['size'] == 'm') {
                                                                $count++;
                                                                if ($count == 1)
                                                                    echo '<img class="primary-img" src="/assets/images/product/medium-size/'.$product['id'].'/'.$count.'.'.$image['extension'].'" alt="Munozs Product Image">';
                                                                if ($count == 2)
                                                                    echo '<img class="secondary-img" src="/assets/images/product/medium-size/'.$product['id'].'/'.$count.'.'.$image['extension'].'" alt="Munozs Product Image">';
                                                                if ($count > 2)
                                                                    break;
                                                            }
                                                        }
                                                    ?>
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="/add-to-wishlist/<?php echo $product['id'] ?>" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="/add-to-cart/<?php echo $product['id'] ?>" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <?php 
                                                        foreach ($product['products_catagories'] as $key => $products_catagories) {
                                                            foreach ($catagories as $key => $catagory) {
                                                                if($products_catagories['catagory_id'] == $catagory['id']) {
                                                                    ?>
                                                                    <div class="product-category"><a href="/shop/catagory/<?php echo $catagory['id'] ?>"><?php echo $catagory['catagory'] ?></a>
                                                                    <?php
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    </div>
                                                    <h3 class="product-name"><a href="/shop/<?php echo $product['id'] ?>"><?php echo $product['name']; ?></a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <?php if($product['discount'] == 0) { ?>
                                                            <span class="new-price">$<?php echo $product['price'] ?></span>
                                                        <?php }else { ?>
                                                            <span class="old-price">$<?php echo $product['price'] ?></span>
                                                            <span class="new-price">$<?php echo ($product['price']-($product['price']*($product['discount']/100))) ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-slide_item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="/shop/<?php echo $product['id'] ?>">
                                                    <?php
                                                        $count = 0;
                                                        foreach ($product['images'] as $image) {
                                                            if ($image['size'] == 'm') {
                                                                $count++;
                                                                if ($count == 1)
                                                                    echo '<img class="primary-img" src="/assets/images/product/medium-size/'.$product['id'].'/'.$count.'.'.$image['extension'].'" alt="Munozs Product Image">';
                                                                if ($count == 2)
                                                                    echo '<img class="secondary-img" src="/assets/images/product/medium-size/'.$product['id'].'/'.$count.'.'.$image['extension'].'" alt="Munozs Product Image">';
                                                                if ($count > 2)
                                                                    break;
                                                            }
                                                        }
                                                    ?>
                                                </a>
                                            </div>
                                            <div class="munoz-product-content">
                                                <div class="product-desc_info">
                                                    <h6 class="product-name"><a href="/shop/<?php echo $product['id'] ?>"><?php echo $product['name']; ?></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <?php if($product['discount'] == 0) { ?>
                                                            <span class="new-price">$<?php echo $product['price'] ?></span>
                                                        <?php }else { ?>
                                                            <span class="old-price">$<?php echo $product['price'] ?></span>
                                                            <span class="new-price">$<?php echo ($product['price']-($product['price']*($product['discount']/100))) ?></span>
                                                        <?php } ?>
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
                                                    <div class="product-short_desc">
                                                        <p><?php echo $product['detail']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="/add-to-wishlist/<?php echo $product['id'] ?>" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="/add-to-cart/<?php echo $product['id'] ?>" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="munoz-paginatoin-area">
                                    <ul class="munoz-pagination-box">
                                        <!-- <li class="active"><a href="javascript:void(0)">1</a></li>
                                        <li><a href="javascript:void(0)">2</a></li>
                                        <li><a href="javascript:void(0)">3</a></li>
                                        <li><a href="javascript:void(0)">4</a></li>
                                        <li><a href="javascript:void(0)">5</a></li>
                                        <li><a class="Next" href="javascript:void(0)">Next</a></li> -->
                                        <li><a href="/shop/page/1">First</a></li>
                                        <li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
                                            <a href="<?php if($page <= 1){ echo '#'; } else { echo "/shop/page/".($page - 1); } ?>">Prev</a>
                                        </li>
                                        <li class="<?php if($page >= $total_pages){ echo 'disabled'; } ?>">
                                            <a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "/shop/page/".($page + 1); } ?>">Next</a>
                                        </li>
                                        <li><a href="/shop/page/<?php echo $total_pages; ?>">Last</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Munoz's Content Wrapper Area End Here -->

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>