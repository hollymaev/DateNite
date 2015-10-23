<?php



    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $methodType = $_SERVER['REQUEST_METHOD'];
    $data =array("status" => "fail", "msg" => "$methodType");

    if ($methodType === 'POST') {
    
    }

    if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
      && strtolower ($_SERVER ['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        if(isset($_POST["login"]) && !empty ($_POST["login"])
          && isset($_POST["password"]) && !empty)
    }
      )




?>