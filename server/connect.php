<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname ="shopnow";

    // Create connection
    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
?> 