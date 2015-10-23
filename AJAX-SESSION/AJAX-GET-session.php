<?php

$servername = "localhost";
    $dblogin = "root";
    $password = "root";
    $dbname = "DATENITE";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
        echo "SOMETHING HAPPEN";
    }

    // get the session
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("status" => "fail", "msg" => "$methodType");

    if ($methodType === 'GET') {

        if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

            if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] === true)
                && isset($_SESSION['username']) && !empty(($_SESSION['username']))
                && isset($_SESSION['password']) && !empty(($_SESSION['password']))
                && isset($_SESSION['firstname']) && !empty(($_SESSION['firstname']))
                && isset($_SESSION['lastname']) && !empty(($_SESSION['lastname']))
                && isset($_SESSION['email']) && !empty(($_SESSION['email']))) {

                // data that would
                $data = array("status" => "success", "username" => $_SESSION['username'],
                    "firstName" => $_SESSION['firstname'], "lastname" => $_SESSION['lastname'], "email" => $_SESSION['email']);


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

