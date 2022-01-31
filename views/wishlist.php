<?php    
    // load up your config file
    require_once("resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>

        <!-- Begin Munoz's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop Related Page</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Munoz's Breadcrumb Area End Here -->
        <!--Begin Munoz's Wishlist Area -->
        <div class="munoz-wishlist_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="munoz-product_remove">remove</th>
                                            <th class="munoz-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="munoz-product-price">Unit Price</th>
                                            <th class="munoz-product-stock-status">Stock Status</th>
                                            <th class="munoz-cart_btn">add to cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($products as $key => $product) {
                                                ?>
                                                    <tr>
                                                        <td class="munoz-product_remove"><a href="/delete-from-wishlist/<?php echo $product['id'] ?>"><i class="fa fa-trash"
                                                            title="Remove"></i></a></td>
                                                        <td class="munoz-product-thumbnail"><a href="javascript:void(0)"><img src="/assets/images/product/small-size/<?php echo $product['id']; ?>/1.<?php echo $product['image_extension']; ?>" alt="Munoz's Wishlist Thumbnail"></a>
                                                        </td>
                                                        <td class="munoz-product-name"><a href="javascript:void(0)"><?php echo $product['name'] ?></a></td>
                                                        <td class="munoz-product-price"><span class="amount">$<?php echo $product['price'] ?></span></td>
                                                        <td class="munoz-product-stock-status"><span class="in-stock">in stock</span></td>
                                                        <td class="munoz-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Munoz's Wishlist Area End Here -->
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>