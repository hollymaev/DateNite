<?php
    // http://php.net/manual/en/function.session-start.php
    // http://stackoverflow.com/questions/11768816/php-session-variables-not-preserved-with-ajax
    // http://stackoverflow.com/questions/9560240/how-session-start-function-works
    // get the session
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("status" => "fail", "msg" => "$methodType");

    if ($methodType === 'POST') {

/*
        foreach ($_POST as $key => $value){
            // simply parrot back what was sent
            $data[$key] = $value;
        }
        echo json_encode($data, JSON_FORCE_OBJECT);
        return;
*/

        if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // yes, is AJAX call
            // answer POST call and get the data that was sent
            if(isset($_POST["login"]) && !empty($_POST["login"])
                && isset($_POST["password"]) && !empty($_POST["password"])){


                // get the data from the post and store in variables
                $login = $_POST["login"];
                $password = $_POST["password"];


                // HERE'S WHERE YOU'D GET THE VALUES FROM THE DB
                /*
                $user_name = "";
                $password = "";
                $first_name = "";
                if (isset($_GET ["user_name"]) && !empty($_GET["user_name"])) {
                    $user_name = $_GET["user_name"];
                }
                if (isset($_GET["password"]) && !empty($_GET["password"])) {
                    $password = $_GET["password"];
                }
                
                $sql = "SELECT * FROM user WHERE user_name = :uName AND password = :pass";
                
                $statement = $conn->prepare($sql);
                $statement->execite(array(":uName" => $user_name, ":pass" => $password));
                
                echo $statement;
                */
                if($login == "holly" && $password == "hi") {
                    // sucess
                    $_SESSION['username'] = $login;
                    $_SESSION['password'] = $password;
                    $_SESSION['firstname'] = "";
                    $_SESSION['lastname'] = "";
                    $_SESSION['email'] = "arron_ferguson@bcit.ca";
                    $_SESSION['loggedin'] = true;

                    $sid= session_id();
                    $data = array("status" => "success", "sid" => $sid);


                } else {
                    $data = array("status" => "fail", "msg" => "User name and/or password not correct.");
                }
/*
                $data = array("msg" => "Thank you $firstName $lastName, you've been added to our mailing list!",
                    "firstName" => "$firstName", "lastName" => "$lastName",
                    "email" => "$email");
                ////////////////////////////////////////////////////////////
                ///   HERE'S WHERE YOU COULD DO A DATABASE ENTRY UPDATE
                ////////////////////////////////////////////////////////////
*/

            } else {
                $data = array("status" => "fail", "msg" => "Either login or password were absent.");
            }



        } else {
            // not AJAX
            $data = array("status" => "fail", "msg" => "Has to be an AJAX call.");
        }


    } else {
        // simple error message, only taking POST requests
        $data = array("status" => "fail", "msg" => "Error: only POST allowed.");
    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>

