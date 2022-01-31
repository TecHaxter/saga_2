<?php
    session_start();
    $product_id = $request[2];
    if(isset($_SESSION['wishlist'])) {
        $wishlist = $_SESSION['wishlist'];
        if(in_array($product_id, $wishlist)) {
            return header('Location: /wishlist');
        }
        $wishlist[$product_id] = [
            "id" => $product_id,
        ];
        $_SESSION['wishlist'] = $wishlist;
        header('Location: /shop');
    } else {
        $wishlist = [
            $product_id => ["id" => $product_id]
        ];
        $_SESSION['wishlist'] = $wishlist;
        header('Location: /shop');
    }
?>