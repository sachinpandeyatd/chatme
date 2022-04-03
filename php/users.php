<?php

    session_start();
    include_once "conf.php";

    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .= "Sorry, there's no user currently available to chat, invite your friends or please try after sometimes";
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="#">
                            <div class="content">
                                <img src="images/'. $row['image'] .'" alt="">
                                <div class="details">
                                    <span>'.$row['fname']." ".$row['lname'].'</span>
                                    <p>This is test msg</p>
                                </div>
                            </div>
                            <div class="status-dot"><i class="fas fa-circle"></i></div>
                        </a>'; 
        }
    }
    echo $output;

?>