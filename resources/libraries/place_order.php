<?php

    session_start();

    $billing_address = $_POST['billing_name'] . ', ' . $_POST['billing_address_1'] . ', ' . $_POST['billing_address_2'] . ', ' . $_POST['billing_city'] . ', ' . $_POST['billing_state'] . ', ' . $_POST['billing_zip'] . ', ' . $_POST['billing_country'];
    $billing_email = $_POST['billing_email'];
    $billing_phone = $_POST['billing_phone'];
    $ship_to_same = $_POST['ship_to_same'];
    $total_amount = $_POST['total_amount'];
    $order_note = $_POST['order_note'];
    if($ship_to_same == 1) {
        $shipping_address = $_POST['shipping_name'] . ', ' . $_POST['shipping_address_1'] . ', ' . $_POST['shipping_address_2'] . ', ' . $_POST['shipping_city'] . ', ' . $_POST['shipping_state'] . ', ' . $_POST['shipping_zip'] . ', ' . $_POST['shipping_country'];
        $shipping_email = $_POST['shipping_email'];
        $shipping_phone = $_POST['shipping_phone'];
    } else {
        $shipping_address = $billing_address;
        $shipping_email = $billing_email;
        $shipping_phone = $billing_phone;
    }
    $_SESSION['billing_address'] = $billing_address;
    $_SESSION['billing_email'] = $billing_email;
    $_SESSION['billing_phone'] = $billing_phone;
    $_SESSION['shipping_address'] = $shipping_address;
    $_SESSION['shipping_email'] = $shipping_email;
    $_SESSION['shipping_phone'] = $shipping_phone;
    $_SESSION['total_amount'] = $total_amount;
    $_SESSION['order_note'] = $order_note;
    
    header('Location: /payment');

?>