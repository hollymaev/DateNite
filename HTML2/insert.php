<?php
    //$con = mysqli_connect("localhost", "root", "root", "datenite");
    
    include ("connection.php");
    //include ("home.php");
        
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
                
                $query = "INSERT INTO users (fname, password, email) VALUES ('$fname', '$pass', '$email')";
                $result = mysqli_query($con, $query);
            
                if($result){
                    include("home.php");
                }else{
                    echo 'Failed!';
                }
            }
                
            
        
    }
        
