<?php

    function isUserExists($email)
    {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $user_exists_conn = OpenCon()->query($query);
        if($user_exists_conn->num_rows > 0)
            return true;
        else
            false;
    }

    function isMethodPost() {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
            return true;
        else
            return false;
    }

    function isPasswordConfirmed($password) {
        if($password == $_POST['confirmed_password'])
            return true;
        else 
            return false;
    }

    if(isMethodPost()) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!isUserExists($email)) {
            if(isPasswordConfirmed($password)) {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $sql_user = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$passwordHash')";
                $user_auth_conn = OpenCon()->query($sql_user);
            } else {
                echo 'password didnt matched';
            }
        } else {
            echo 'User Already Exists';
        }
    }
    else
        header('Location: /404');
?>