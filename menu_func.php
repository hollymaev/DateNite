<?php
    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    include("connection.php");

    function getUsersStatus(){
        global $con;
        
        $data = array();

        if(isset($_SESSION['ID'])) {
            $data = array("status" => "success");
            echo json_encode($data);
        } else {
            $data = array("status" => "fail");
            echo json_encode($data);
        }
    }
    getUsersStatus();
    
?>
