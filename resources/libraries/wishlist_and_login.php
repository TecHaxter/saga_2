<?php
    session_start();
    if(isset($_SESSION['wishlist']))
        $wishlist = $_SESSION['wishlist'];
    else
        $wishlist = [];
    $sql_wishlist_sel = "SELECT * FROM wishlists WHERE user_id = '$user_id'";
    $wishlist_sel_conn = OpenCon()->query($sql_wishlist_sel);
    if($wishlist_sel_conn->num_rows > 0) {
        echo 'row exists\n';
        while($wishlist_sel_row = $wishlist_sel_conn->fetch_assoc()) {
            if(in_array($wishlist_sel_row['product_id'], $wishlist)) {
                echo 'wishlist table has this element from wishlist session\n';
            } else {
                echo 'wishlist table doesnt have that element from wishlist session\n';
                foreach ($wishlist as $key => $value) {
                    echo 'updating wishlist\n';
                    $product_id = $value['id'];
                    $sql_wishlist = "INSERT INTO wishlists (user_id, product_id) VALUES ('$user_id', '$product_id')";
                    $wishlist_conn = OpenCon()->query($sql_wishlist);
                    echo 'updated wishlist\n';
                }
            }
        }
    } else {
        echo 'wishlist table doesnt have any element from wishlist session\n';
        foreach ($wishlist as $key => $value) {
            echo 'updating wishlist\n';
            $product_id = $value['id'];
            $sql_wishlist = "INSERT INTO wishlists (user_id, product_id) VALUES ('$user_id', '$product_id')";
            $wishlist_conn = OpenCon()->query($sql_wishlist);
            echo 'updated wishlist\n';
        }
    }
    $wishlist_sel_conn = OpenCon()->query($sql_wishlist_sel);
    while($wishlist_sel_row = $wishlist_sel_conn->fetch_assoc()) {
        $product_id = $wishlist_sel_row['product_id'];
        $wishlist[$product_id] = [
            "id" => $product_id,
        ];
    }
    $_SESSION['wishlist'] = $wishlist;

?>