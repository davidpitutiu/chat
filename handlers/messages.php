<?php

    include('../config.php');
    switch($_REQUEST['action']){
        case "sendMessage":
            //global $db;
            session_start();
            $query=$db->prepare("INSERT INTO messages (message) values(?)");
            $run=$query->execute([ $_REQUEST['message']]);
            if($run){
                echo 1;
                exit;
            }
        break;
        /*case "getMessages":
            $query=$db->prepare("SELECT * FROM messages");
            $run=$query->execute();
            $rs = $query->fetch(PDO::FETCH_OBJ);
            foreach($rs as $message){
                $chat .= $message->message;
            }
            echo $chat;
        break;*/
    }
?>