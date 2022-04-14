<?php

    function get_searched_products(){
        $conn = include '../connect.php';
        
        $search = $_GET['search'];

        $sql = mysqli_query($conn,"SELECT * FROM products WHERE name LIKE '%$search%'");
        $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);

        $count = count($result);
        if ($count < 1) {
            $response = ["status" => "failed", "message" => "Oops! No results for '$search'."];
        } else {
           $response = ["status" => "success", "products" => $result, "count" => $count];
        }
        return $response;
    }
?>