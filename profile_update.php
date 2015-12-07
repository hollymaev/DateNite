<?php

    include("connection.php");

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $methodType = $_SERVER['REQUEST_METHOD'];

    if($methodType === 'POST'){
        
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            //var_dump($_SESSION);
            if(isset($_POST['fname']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['picon'])){
        
            $fname = $_POST['fname'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $picon = $_POST['picon'];
                $pass = md5($pass);
                /*
                $servername = "localhost";
                $dblogin = "root";
                $dbpassword = "root";
                $dbname = "datenite";
                */
                $servername = "localhost";
                $dblogin = "datenit2_holly";
                $dbpassword = "2425475051";
                $dbname = "datenit2_datenite";
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $dbpassword);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $id = $_SESSION['ID'];
                    $sql = 'UPDATE users SET email = :Email, fname = :fname, password = :pass, picon = :pi WHERE ID = '.$id.'';
                    
                    $stmt = $conn->prepare($sql);

                    $stmt->execute(
                        array(
                            ":Email" => $email,
                            ":fname" => $fname,
                            ":pass" => $pass,
                            ":pi" => $picon
                        )
                    );
                    
                    $_SESSION['fname'] = $fname;
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
