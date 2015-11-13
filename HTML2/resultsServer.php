<?php
include("connection.php");
include("homeServer.php");
global $con;
global $arrayStorage;

echo json_encode($arrayStorage);
?>