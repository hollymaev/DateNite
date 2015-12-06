<?php
  
    include("connection.php");

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("status" => "fail", "msg" => "$methodType");

    if($methodType === 'POST'){
        
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            
            if(isset($_POST["lgfn"]) && !empty($_POST["lgfn"]) && isset($_POST["lgpass"]) && !empty($_POST["lgpass"])){
                //var_dump($_SESSION);
                
                $FName = $_POST["lgfn"];
                
                $Pass = md5($_POST["lgpass"]);
               
                 /*
                $servername = "localhost";
                $dblogin = "datenit2_holly";
                $dbpassword = "2425475051";
                $dbname = "datenit2_datenite";
                */
                
                $servername = "localhost";
                $dblogin = "root";
                $dbpassword = "root";
                $dbname = "datenite";
                    
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $dbpassword);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $sql = "SELECT * FROM users WHERE fname = :login AND password = :password";
                    $statement = $conn->prepare($sql);
                    $statement->execute(array(":login" => $FName, ":password" => $Pass));
                    $row = $statement->fetchALL(PDO::FETCH_ASSOC);
                    //echo $Pass;
                    //var_dump($_SESSION);
                    
                    if(count($row) > 0) {
                        
                        $returnedID = $row[0]['ID'];
                        $FName = $row[0]['fname'];
                        $Pass = $row[0]['password'];
                        
                        $_SESSION['ID'] = $returnedID;
                        $_SESSION['lgfn'] = $FName;
                        //$_SESSION['lgpass'] = $Pass;
                        $_SESSION['loggedin'] = true;
                        
                        
                        $sid= session_id();
                        $data = array("status" => "success", "sid" => $sid);
                        
                        
                        
                    }else{
                        $data = array("status" => "fail", "msg" => "Firstname/password not correct.");
                    }

                }catch(PDOException $e){
                    $data = array("status" => "fail", "msg" => $e->getMessage());
                }

            }else{
                $data = array("status" => "fail", "msg" => "Either login or password were absent.");
            }
            
        }else{
            $data = array("status" => "fail", "msg" => "Has to be an AJAX call.");
        }

    }else{
        $data = array("status" => "fail", "msg" => "Error: only POST allowed.");
    }

    echo json_encode($data, JSON_FORCE_OBJECT);


?>
