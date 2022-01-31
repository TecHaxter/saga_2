<?php
    session_start();
    $products = [];
    if(isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        foreach ($cart as $key => $value) {
            $sql_product = "SELECT * FROM products WHERE id = ". $value['id'];
            $product_conn = OpenCon()->query($sql_product);
            if($product_conn->num_rows > 0) {
                $product_row = $product_conn->fetch_assoc();
                $sql_image = "SELECT * FROM images WHERE product_id = " . $value['id'] . " AND size = 's' LIMIT 1";
                $image_conn = OpenCon()->query($sql_image);
                $image_extension = $image_conn->fetch_assoc()['extension'];
                $product_data = [
                    'id' => $value['id'],
                    'name' => $product_row['name'],
                    'unit_price' => ($product_row['price']-($product_row['price']*($product_row['discount']/100))),
                    'quantity' => $value['quantity'],
                    'total_price' => $value['quantity']*($product_row['price']-($product_row['price']*($product_row['discount']/100))),
                    'image_extension'=> $image_extension
                ];
                array_push($products, $product_data);
            }
        }
    }

?>