<?php
    while($row = mysqli_fetch_assoc($sql)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_message_id = {$row['unique_id']} 
        OR outgoing_message_id = {$row['unique_id']}) AND (outgoing_message_id = {$outgoing_id} 
        OR incoming_message_id = {$outgoing_id}) ORDER BY message_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0){
            $result = $row2['message'];
        }else{
            $result = "Start chat";
        }

        (strlen($result) > 28) ? $message = substr($result, 0, 28).'...' : $message = $result;  
        ($outgoing_id == $row2['outgoing_message_id']) ? $you = "You: " : $you = "";
        ($row['status'] == "Offline now") ? $offline = 'offline' : $offline = "";
        
        $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                        <div class="content">
                            <img src="images/'. $row['image'] .'" alt="">
                            <div class="details">
                                <span>'.$row['fname']." ".$row['lname'].'</span>
                                <p>'.$you.$message.'</p>
                            </div>
                        </div>
                        <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
                    </a>';
    }
?>