<?php

    include('../config.php');
    switch($_REQUEST['action']){
        case "sendMessage":
            //global $db;
            $query=$db->prepare("INSERT INTO messages (message) values(?)");
            $query->execute([$_REQUEST['message']]);
        break;
    }
?>