<?php

    session_start();
    include_once "conf.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .= "Sorry, there's no user currently available to chat, invite your friends or please try after sometimes";
    }elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;

?>