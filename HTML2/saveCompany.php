<?php

    include("connection.php");

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $methodType = $_SERVER['REQUEST_METHOD'];

    if($methodType === 'POST'){
        
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            //var_dump($_SESSION);
            if(isset($_POST['fname']) && isset($_POST['pass']) && isset($_POST['email'])){

                try {

                $servername = "localhost";
                $dblogin = "root";
                $dbpassword = "root";
                $dbname = "datenite";
                    
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $dbpassword);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $id = $_SESSION['ID'];
                    $compID = 4;
                    $sql = 'INSERT INTO `prefs` (`user_id`,`comp_id`) VALUES ('.$id.','.$compID.')';
                    
                    $stmt = $conn->prepare($sql);

                    echo json_encode($_SESSION);
                    
                    //echo $stmt->rowCount() . " records UPDATED successfully";
                } catch(PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;

            }
        }
    }

    //echo json_encode($arrayToSend, JSON_FORCE_OBJECT);


?>