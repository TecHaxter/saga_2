<?php

    session_start();
    if(isset($_SESSION['cart']))
        $cart = $_SESSION['cart'];
    else
        $cart = [];
    $sql_cart_sel = "SELECT * FROM carts WHERE user_id = '$user_id'";
    $cart_sel_conn = OpenCon()->query($sql_cart_sel);
    if($cart_sel_conn->num_rows > 0) {
        echo 'row exists\n';
        while($cart_sel_row = $cart_sel_conn->fetch_assoc()) {
            if(in_array($cart_sel_row['product_id'], $cart)) {
                echo 'cart table has this element from cart session\n';
                foreach ($cart as $key => $value) {
                    if($value['id'] == $cart_sel_row['product_id']) {
                        echo 'updating cart\n';
                        $product_id = $value['id'];
                        $quantity = $value['quantity'];
                        $sql_cart_update = "UPDATE carts SET quantity = '$quantity' WHERE user_id = '$user_id' AND product_id = '$product_id'";
                        $cart_update_conn = OpenCon()->query($sql_cart_update);
                        echo 'updated cart\n';
                    }
                }
            } else {
                echo 'cart table doesnt have that element from cart session\n';
                foreach ($cart as $key => $value) {
                        echo 'updating cart\n';
                        $product_id = $value['id'];
                        $quantity = $value['quantity'];
                        $sql_cart = "INSERT INTO carts (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";
                        $cart_conn = OpenCon()->query($sql_cart);
                        echo 'updated cart\n';
                }
            }
        }
    } else {
        echo 'cart table doesnt have any element from cart session\n';
        foreach ($cart as $key => $value) {
            echo 'updating cart\n';
            $product_id = $value['id'];
            $quantity = $value['quantity'];
            $sql_cart = "INSERT INTO carts (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";
            $cart_conn = OpenCon()->query($sql_cart);
            echo 'updated cart\n';
        }
    }
    $cart_sel_conn = OpenCon()->query($sql_cart_sel);
    while($cart_sel_row = $cart_sel_conn->fetch_assoc()) {
        $product_id = $cart_sel_row['product_id'];
        $quantity = $cart_sel_row['quantity'];
        $cart[$product_id] = [
            "id" => $product_id,
            "quantity" => $quantity
        ];
    }
    $_SESSION['cart'] = $cart;

?>