<?php

    require_once('resources/config.php');

    function OpenCon() {

        $conn = new mysqli("localhost", "root", "", "saga") or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
    }

    function GetLastId($conn) {
        return $conn->insert_id;
    }
    
    function CloseCon($conn) {
        $conn -> close();
    }
?>