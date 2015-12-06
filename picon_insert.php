<?php
    include ("connection.php");

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if(isset($_POST['icon'])){

        $picon = $_POST['picon'];
        
        $fname = stripslashes(trim($_POST['fname']));
        
        $query1 = "SELECT fname FROM users WHERE fname='$fname'";
        
                
            $pass=md5($pass);
            $query = "INSERT INTO users (picon) VALUES ('$picon')";
            $result = mysqli_query($con, $query);
            
            if($result){
                $_SESSION['ID'] = mysqli_insert_id($con);
                $_SESSION['lgfn'] = $fname;
                $_SESSION['loggedin'] = true;
                
                
            }else{
                echo 'Failed!';
            }
        }
                
            
        

        
