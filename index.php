<?php

    require_once('resources/libraries/connection.php');
    $request = explode( '/', $_SERVER['REQUEST_URI'] );
    include 'resources/libraries/route.php';

    // Route it up!
    switch ($request[1]) {
        // Home page
        case '/':
            require __DIR__ .'/views/home.php';
            break;
        // Home page
        case '':
            require __DIR__ .'/views/home.php';
            break;
        // Home page
        case 'index':
            require __DIR__ .'/views/home.php';
            break;
        // About page
        case 'about-us':
            require __DIR__ .'/views/about-us.php';
            break;
        // Contact page
        case 'contact':
            require __DIR__ .'/views/contact.php';
            break;
        //My-Account Page
        case 'my-account':
            require __DIR__ . '/views/my-account.php';
            break;
        // Shop page
        case 'shop':
            if(isset($request[2])) {
                if(isset($request[3])) {
                    require 'resources/libraries/populate_shop.php';
                    require __DIR__ .'/views/shop.php';
                    break;
                } else {
                    require 'resources/libraries/populate_single_product.php';
                    require __DIR__ .'/views/single-product.php';
                    break;
                }
            } else {
                require 'resources/libraries/populate_shop.php';
                require __DIR__ .'/views/shop.php';
                break;
            }
        //Login-Register Page
        case 'login-register':
            require __DIR__ . '/views/login-register.php';
            break;
        //Login-User Function
        case 'login-user':
            require 'resources/libraries/login_user.php';
            break;
        //Logout-User Function
        case 'logout-user':
            require 'resources/libraries/logout_user.php';
            break;
        //Register-User Function
        case 'register-user':
            require 'resources/libraries/register_user.php';
            break;
        // Add to Wishlist
        case 'add-to-wishlist':
            if(isset($request[2])) {
                require 'resources/libraries/add_to_wishlist.php';
                break;
            } else {
                require __DIR__ .'/views/404.php';
                break;
            }
        // Delete to Wishlist
        case 'delete-from-wishlist':
            if(isset($request[2])) {
                require 'resources/libraries/delete_from_wishlist.php';
                break;
            } else {
                require __DIR__ .'/views/404.php';
                break;
            }
        // Show Wishlist
        case 'wishlist':
            require 'resources/libraries/populate_wishlist.php';
            require __DIR__ .'/views/wishlist.php';
            break;
        // Add to Cart
        case 'add-to-cart':
            if(isset($request[2])) {
                require 'resources/libraries/add_to_cart.php';
                break;
            } else {
                require __DIR__ .'/views/404.php';
                break;
            }
        //Delete from Cart
        case 'delete-from-cart':
            if(isset($request[2])) {
                require 'resources/libraries/delete_from_cart.php';
                break;
            } else {
                require __DIR__ .'/views/404.php';
                break;
            }
        //Update Cart
        case 'update-cart':
            require 'resources/libraries/update_cart.php';
            break;
        // Show Cart
        case 'cart':
            require 'resources/libraries/populate_cart.php';
            require __DIR__ .'/views/cart.php';
            break;
        // Show Cart
        case 'checkout':
            require 'resources/libraries/populate_checkout.php';
            require __DIR__ .'/views/checkout.php';
            break;
        // Place Order
        case 'place-order':
            require 'resources/libraries/place_order.php';
            break;
        // Show Payment
        case 'payment':
            require __DIR__ .'/views/payment.php';
            break;
        // Perform Transaction
        case 'transaction':
            require 'resources/libraries/stripe_transaction.php';
            break;
        case '404':
            require __DIR__ .'/views/404.php';
            break;
        // Everything else
        default:
            http_response_code(404);
            require __DIR__ .'/views/404.php';
            break;
    }
?>