<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tentheme2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if($conn){
    echo "";
}else{    
    echo "error";
}
?>