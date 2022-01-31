<?php
    session_start();

    if(isset($_SESSION['user_active'])) {
        unset($_SESSION['user_active']);
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header('Location: /');
    }
    else
        header('Location: /404');
?>