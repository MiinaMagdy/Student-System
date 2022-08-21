<?php

$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'web_skills'); 

if(!$conn){
    die("Error: Failed to connect to database!");
}
?>
