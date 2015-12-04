<?php

    include("connection.php");

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $methodType = $_SERVER['REQUEST_METHOD'];

    if($methodType === 'GET'){
        
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            //var_dump($_SESSION);
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true
                && isset($_SESSION['lgfn']) && !empty(($_SESSION['lgfn'])) && isset($_SESSION['ID']) && !empty(($_SESSION['ID']))) {

                $fname = $_SESSION['ID'];
                
                $servername = "localhost";
                $dblogin = "root";
                $dbpassword = "root";
                $dbname = "datenite";
                
                function getUsersData(){
                    global $con;

                    $arrayToSend = array();

                    //$id = $_SESSION['ID'];
                    $id = $_SESSION['ID'];
                    $q = "SELECT ID, fname, password, email FROM users where ID = $id";

                    $result = mysqli_query($con, $q);

                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $arr = array(
                                "ID" => $row['ID'],
                                "fname" => $row['fname'],
                                "password" => $row['password'],
                                "email" => $row['email']
                            );
                            array_push($arrayToSend, $arr);
                        }
                        echo json_encode($arrayToSend); 
                    }
                }
        
                getUsersData();

            }
        }
    }

    //echo json_encode($arrayToSend, JSON_FORCE_OBJECT);


?>
