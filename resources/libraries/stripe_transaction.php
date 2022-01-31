<?php

    session_start();

    require_once('vendor/autoload.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        \Stripe\Stripe::setApiKey('sk_test_05RGiNQvzgnoHeX6YrCoRFST');
        $billing_address = $_SESSION['billing_address'];
        $billing_email = $_SESSION['billing_email'];
        $billing_phone = $_SESSION['billing_phone'];
        $order_note = $_SESSION['order_note'];
        $shipping_address = $_SESSION['shipping_address'];
        $shipping_email = $_SESSION['shipping_email'];
        $shipping_phone = $_SESSION['shipping_phone'];
        $user_id = $_SESSION['user_id'];
        $amount = $_POST['amount'];
        $stripeToken = $_POST['stripeToken'];
        OpenCon()->begin_transaction();
        try {
            $transaction = \Stripe\Charge::create ([
                "amount" => 100 * $amount,
                "currency" => "usd",
                "source" => $stripeToken,
                "description" => "Test payment from Saga."
            ]);
            if($order_note == null) {
                $orderDB = "INSERT INTO orders (user_id) VALUES ('$user_id')";
            } else {
                $orderDB = "INSERT INTO orders (user_id, order_note) VALUES ('$user_id', '$order_note')";
            }
            $order_conn = OpenCon()->query($orderDB);
            $order_id = OpenCon()->insert_id;
            echo $order_id;
            $transaction_id = $transaction->id;
            $transactionDB = "INSERT INTO payments (user_id, order_id, transaction_id, total_amount) VALUES ('$user_id', '$order_id', '$transaction_id', '$amount')";
            $payment_conn = OpenCon()->query($transactionDB);
            $cart = $_SESSION['cart'];
            foreach ($cart as $key => $value) {
                $product_id = $value['id'];
                $product_quantity = $value['quantity'];
                $products_sql = "SELECT * FROM products WHERE id = $product_id";
                $products_conn = OpenCon()->query($products_sql);
                while ($products_row = $products_conn->fetch_assoc()) {
                    $product_name = $products_row['name'];
                    $product_price = $products_row['price'];
                    $product_discount = $products_row['discount'];
                    $total_price = ($product_quantity*($product_price - ($product_price * ($product_discount / 100))));
                    $orderDetailsDB = "INSERT INTO order_details (order_id, product_id, product_name, quantity, prepared, total_price) VALUES ('$order_id', '$product_id', '$product_name', '$product_quantity', 'false', '$total_price')";
                    OpenCon()->query($orderDetailsDB);
                }
            }
            $addressDB = "INSERT INTO addresses (order_id, user_id, billing_address, billing_phone, billing_email, shipping_address, shipping_phone, shipping_email) VALUES ('$order_id', '$user_id', '$billing_address', '$billing_phone', '$billing_email', '$shipping_address', '$shipping_phone', '$shipping_email')";
            OpenCon()->query($addressDB);
            unset($_SESSION['billing_address']);
            unset($_SESSION['billing_phone']);
            unset($_SESSION['billing_email']);
            unset($_SESSION['shipping_address']);
            unset($_SESSION['shipping_phone']);
            unset($_SESSION['shipping_email']);
            unset($_SESSION['order_note']);
            unset($_SESSION['cart']);
    
            $cart_sql = "DELETE FROM carts WHERE user_id = $user_id";
            OpenCon()->query($cart_sql);
            $_SESSION['payment_success'] = "Payment successful!";
            OpenCon()->commit();
            header('Location: /');
        } catch (\Throwable $th) {
            OpenCon()->rollback();
            if(isset($transaction->id)) {
                \Stripe\Refund::create ([
                    "charge" => $transaction->id
                ]);
            }
            $_SESSION['payment_error'] = "Payment error!";
            header('Location: /payment');
        }
    }

?>