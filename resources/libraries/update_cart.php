<?php

    session_start();

    function isMethodPost() {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
            return true;
        else
            return false;
    }

    if(isMethodPost()) {
        $products_id = $_POST['id'];
        $products_quantity = $_POST['quantity'];
        $cart = $_SESSION['cart'];
        foreach ($products_id as $key => $product_id) {
            if($products_quantity[$key] < 1)
                $cart[$product_id] = [
                    'id' => $product_id,
                    'quantity' => 1
                ];
            else
                $cart[$product_id] = [
                    'id' => $product_id,
                    'quantity' => $products_quantity[$key]
                ];
        }
        $_SESSION['cart'] = $cart;
        header('Location: /cart');
    } else {
        header('Location: /404');
    }

?>