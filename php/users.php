<?php

    session_start();
    include_once "conf.php";

    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .= "Sorry, there's no user currently available to chat, invite your friends or please try after sometimes";
    }elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;

?>