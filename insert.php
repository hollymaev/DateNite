<?php
    //$con = mysqli_connect("localhost", "root", "root", "datenite");
    
    include ("connection.php");
    //include ("home.php");
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    error_reporting(E_ALL && ~E_NOTICE);

    if(isset($_POST['fname']) && isset($_POST['pass']) && isset($_POST['email'])){
        
        $fname = $_POST['fname'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        
        $fname = stripslashes(trim($_POST['fname']));
        
        $query1 = "SELECT fname FROM users WHERE fname='$fname'";
         $num = mysql_num_rows($query1);
        
        if($num > 0){
            echo 'The username is alredy exsist, please chage your username.';
            exit;
        }else{
                
            $pass=md5($pass);
            $query = "INSERT INTO users (fname, password, email) VALUES ('$fname', '$pass', '$email')";
            $result = mysqli_query($con, $query);
            
            if($result){
                $_SESSION['ID'] = mysqli_insert_id($con);
                $_SESSION['lgfn'] = $fname;
                $_SESSION['loggedin'] = true;
                include("home.php");
            }else{
                echo 'Failed!';
            }
        }
                
            
        
    }
        
