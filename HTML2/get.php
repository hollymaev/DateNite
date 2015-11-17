<?php

    // get the session
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("status" => "fail", "msg" => "$methodType");

    $servername = "localhost";
    $dblogin = "datenit2_holly";
    $dbpassword = "2425475051";
    $dbname = "datenit2_datenite";

    if ($methodType === 'GET') {

        if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true
                && isset($_SESSION['lgfn']) && !empty(($_SESSION['lgfn'])) ) {

                $FName = $_SESSION['lgfn'];
                 
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $dbpassword);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT fname, password FROM user WHERE fname = :log";

                    $statement = $conn->prepare($sql);
                    $statement->execute(array(":log" => $FName));
 
                    $count = $statement->rowCount();

                    if($count > 0) {
             
                        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                        $data = array("status" => "success", "userProfile" => $rows[0]);

                    } else {
                        $data = array("status" => "fail", "msg" => "User name and/or password not correct.");
                    }


                } catch(PDOException $e) {
                    $data = array("status" => "fail", "msg" => $e->getMessage());
                }

            } else {
                $data = array("status" => "fail", "msg" => "Not logged in.");
            }

        } else {

            $data = array("status" => "fail", "msg" => "Has to be an AJAX call.");

        }

    } else {

        $data = array("status" => "fail", "msg" => "Error: only GET allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
