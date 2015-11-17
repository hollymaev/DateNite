<?php
    //$con = mysqli_connect("localhost", "root", "root", "datenite");
    
    include ("connection.php");
    global $con;
    //include ("home.php");
        
    error_reporting(E_ALL && ~E_NOTICE);

    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['pass']) && isset($_POST['email'])){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        
        
        
            $query = "INSERT INTO users (fname, lname, password, email) VALUES ('$fname', '$lname', '$pass', '$email')";
            $result = mysqli_query($con, $query);
            
            if($result){
                include("home.php");
                
                //echo 'Thanks for signing up to DateNite!';
            }else{
                echo 'Failed!';
            }
        
    }
        
?>