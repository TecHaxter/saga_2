<?php
    session_start();
    $product_id = $request[2];
    if(isset($_SESSION['wishlist'])) {
        $wishlist = $_SESSION['wishlist'];
        if(isset($wishlist[$product_id])) {
            unset($wishlist[$product_id]);
            $_SESSION['wishlist'] = $wishlist;
            header('Location: /wishlist');
        } else {
            header('Location: /404');
        }
    } else {
        header('Location: /');
    }
?>