<?php
    session_start();
    include_once "conf.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
    $output = "";

    if(mysqli_num_rows($sql) > 0){
        include "data.php";
        echo $output;
    }else{
        $output .= "Not found";
        echo $output;
    }

?>