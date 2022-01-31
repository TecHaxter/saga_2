<?php

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($request[3]) && is_numeric($request[3]) ? $request[3] : 1;
$no_of_records_per_page = 6;
$offset = ($page-1) * $no_of_records_per_page;
$total_pages_sql = "SELECT COUNT(*) FROM products";
$result = OpenCon()->query($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
CloseCon($result);
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql_products = "SELECT * FROM products LIMIT $offset, $no_of_records_per_page";

    // $sql_products = "SELECT * FROM products";
    $products_conn = OpenCon()->query($sql_products);
    $products = [];
    if ($products_conn->num_rows > 0) {
        // output data of each row
        while($product_row = $products_conn->fetch_assoc()) {
            $sql_images = "SELECT * FROM images WHERE product_id = ". $product_row['id'];
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
            CloseCon($images_conn);
            $sql_products_catagories = "SELECT * FROM products_catagories WHERE product_id = ". $product_row['id'];
            $products_catagories_conn = OpenCon()->query($sql_products_catagories);
            $products_catagories = [];
            while($products_catagories_row = $products_catagories_conn->fetch_assoc()) {
                $catagory_id = $products_catagories_row['catagory_id'];
                $products_catagories_data = [
                    'catagory_id' => $catagory_id
                ];
                array_push($products_catagories, $products_catagories_data);
            }
            $product_data = [
                'id' => $product_row['id'],
                'name' => $product_row['name'],
                'detail' => $product_row['detail'],
                'price' => $product_row['price'],
                'discount' => $product_row['discount'],
                'images' => $images,
                'products_catagories' => $products_catagories
            ];
            array_push($products, $product_data);

            $sql_catagory = "SELECT * FROM catagories";
            $catagory_conn = OpenCon()->query($sql_catagory);
            $catagories = [];
            while ($catagory_row = $catagory_conn->fetch_assoc()) {
                $catagory_data = [
                    'id' => $catagory_row['id'],
                    'catagory' => $catagory_row['catagory'],
                ];
                array_push($catagories, $catagory_data);
            }
            CloseCon($catagory_conn);
        }
        CloseCon($products_conn);
    }
?>