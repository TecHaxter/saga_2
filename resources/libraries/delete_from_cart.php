<?php
    session_start();
    $product_id = $request[2];
    if(isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        if(isset($cart[$product_id])) {
            unset($cart[$product_id]);
            $_SESSION['cart'] = $cart;
            header('Location: /cart');
        } else {
            header('Location: /404');
        }
    } else {
        header('Location: /');
    }
?>