<?php

    
    $servername = "127.127.126.26";
    $username = "root";
    $password = "";
    $dbname = "bitrixtest";

    // $conn = new PDO('mysql:dbname=bitrixtest;host=127.127.126.26', $username, $password);

    $conn = new mysqli($servername, $username, $password, $dbname);
?>