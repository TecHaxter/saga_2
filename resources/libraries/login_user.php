<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql_user = "SELECT * FROM users WHERE email = '$email'";
        $user_auth_conn = OpenCon()->query($sql_user);
        if($user_auth_conn->num_rows > 0) {
            $user_row = $user_auth_conn->fetch_assoc();
            if(password_verify($password, $user_row['password'])) {
                    $user_id = $user_row['id'];
                    $_SESSION['user_active'] = true;
                    $_SESSION['user_id'] = $user_row['id'];
                    $_SESSION['user_name'] = $user_row['name'];
                    echo 'loading\n';
                    require 'resources/libraries/cart_and_login.php';
                    require 'resources/libraries/wishlist_and_login.php';
                    header('Location: /');
            } else {
                echo header('Location: /login-register');
            }
        } else {
            echo header('Location: /login-register');
        }
    }
    else
        header('Location: /404');
?>