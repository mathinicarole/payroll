<?php
$host="localhost";
$username="root";
$password="";
$database="users";

//create connection
$conn=mysqli_connect($host,$username,$password,$database);

//check connection
if(!$conn){
    die("<script>alert('connection failed.')</script>");
}

?>
