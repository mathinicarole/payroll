<?php
include('connection.php');
//create connection
$conn=mysqli_connect($host,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$gender = $_POST['gender'];

$sql = "INSERT INTO employees (name, email,gender)VALUES ('$name','$email','$gender')";

$insert=mysqli_query($conn,$sql);
if($insert){
    echo'<script>window.alert("Success")</script>';
    header('refresh:3;url=employees_form.php');
}else{
    echo'<script>window.alert("failed!")</script>';
    header('refresh:3;url=employees_form.php');
}
?>