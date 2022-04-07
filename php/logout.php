<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "conf.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        if(isset($logout_id)){
            $sql = mysqli_query($conn, "UPDATE users SET status = 'Offline now' WHERE unique_id = {$logout_id}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{
        header("location: ../login.php");
    }
?>