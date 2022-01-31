<?php
    session_start();
    $product_id = $request[2];
    if(isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        if(in_array($product_id, $cart)) {
            return header('Location: /cart');
        }
        $cart[$product_id] = [
            "id" => $product_id,
            "quantity" => 1
        ];
        $_SESSION['cart'] = $cart;
        header('Location: /shop');
    } else {
        $cart = [
            $product_id => [
                "id" => $product_id,
                "quantity" => 1
            ]
        ];
        $_SESSION['cart'] = $cart;
        header('Location: /shop');
    }
?>