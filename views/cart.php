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
                        <li class="active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Munoz's Breadcrumb Area End Here -->
        <!-- Begin Munoz's Cart Area -->
        <div class="munoz-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="/update-cart">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="munoz-product-remove">remove</th>
                                            <th class="munoz-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="munoz-product-price">Unit Price</th>
                                            <th class="munoz-product-quantity">Quantity</th>
                                            <th class="munoz-product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $total_amount = 0;
                                            foreach ($products as $key => $product) {
                                                $total_amount = $total_amount + $product['total_price'];
                                                ?>
                                                    <tr>
                                                        <td class="munoz-product-remove"><a href="/delete-from-cart/<?php echo $product['id']; ?>"><i class="fa fa-trash"
                                                            title="Remove"></i></a></td>
                                                        <td class="munoz-product-thumbnail"><a href="javascript:void(0)"><img src="assets/images/product/small-size/<?php echo $product['id']; ?>/1.<?php echo $product['image_extension']; ?>" alt="Munoz's Cart Thumbnail"></a></td>
                                                        <td class="munoz-product-name"><a href="javascript:void(0)"><?php echo $product['name'] ?></a></td>
                                                        <td class="munoz-product-price"><span class="amount">$<?php echo $product['unit_price'] ?></span></td>
                                                        <td class="quantity">
                                                            <label>Quantity</label>
                                                            <input type="hidden" value="<?php echo $product['id'] ?>" name="id[]">
                                                            <div class="cart-plus-minus">
                                                                <input class="cart-plus-minus-box" value="<?php echo $product['quantity'] ?>" type="text" name="quantity[]">
                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                            </div>
                                                        </td>
                                                        <td class="product-subtotal"><span class="amount">$<?php echo $product['total_price'] ?></span></td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                        </div>
                                        <div class="coupon2">
                                            <input class="button" name="update_cart" value="Update cart" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="/checkout" method="POST">
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <input type="hidden" name="total_amount" value="<?php echo $total_amount?>">
                                        <ul>
                                            <li>Subtotal <span>$<?php echo $total_amount; ?></span></li>
                                            <li>Total <span>$<?php echo $total_amount; ?></span></li>
                                        </ul>
                                        <button type="submit"><a style="color:white">Proceed to checkout</a></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Munoz's Cart Area End Here -->
    
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>