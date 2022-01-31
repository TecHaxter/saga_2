<?php

    $sql_product = "SELECT * FROM products where id = $request[2]";
    $product_conn = OpenCon()->query($sql_product);
    $product = [];
    if ($product_conn->num_rows > 0) {
        // output data of each row
        while($product_row = $product_conn->fetch_assoc()) {
            $sql_images = "SELECT * FROM images where product_id = ". $product_row['id'];
            $images_conn = OpenCon()->query($sql_images);
            $images = [];
            while ($image_row = $images_conn->fetch_assoc()) {
                $image_data = [
                    'url' => $image_row['url'],
                    'size' => $image_row['size'],
                    'extension' => $image_row['extension']
                ];
                array_push($images, $image_data);
            }
            $product_data = [
                'id' => $product_row['id'],
                'name' => $product_row['name'],
                'detail' => $product_row['detail'],
                'price' => $product_row['price'],
                'discount' => $product_row['discount'],
                'images' => $images
            ];
            $product = $product_data;
        }
    } else {
        header('Location: /404');
    }
    CloseCon($product_conn);
    CloseCon($images_conn);
?>