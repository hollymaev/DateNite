<?php
include("connection.php");
include("homeServer.php");
global $con;

function showPrefs(){
    include("profile_func.php");
    $id = $_SESSION['ID'];
    global $con;
    $arrayStorage = array();
    
    $query = "SELECT prefs.user_id, company.ID, company.company_name, company.address, company.phone_number,company.website,company.description FROM company INNER JOIN prefs ON prefs.comp_id=company.ID WHERE prefs.user_id = ".$id."";
    
    $result = mysqli_query($con, $query);
    
    if($result){
        while($row = mysqli_fetch_array($result)){
            $userPrefs = array(
                "ID" => $row['ID'],
                "company" => $row['company_name'],
                "address" => $row['address'],
                "phone" => $row['phone_number'],
                "website" => $row['website'],
                "description" => $row['description'],
            );
            
            array_push($arrayStorage, $userPrefs);
        }
    }
    echo json_encode($arrayStorage);
}

function deletePrefs(){
    include("profile_func.php");
    $id = $_SESSION['ID'];
    global $con;
    
    $query = "DELETE FROM `prefs` WHERE comp_id= ".$_POST['compid']." AND user_id = ".$id."";
    
    $result = mysqli_query($con, $query);
    
    echo json_encode($result);
}

?>