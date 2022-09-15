<?php 
//session_start();

//$error = array();

$connect= mysqli_connect('localhost', 'root', '', 'sunfun');
$firstname=""; $lastname=""; $email=""; $username="";
$pasword ="";
if(isset($_POST['move'])){
$firstname= $_POST['firstname'];
$lastname=  $_POST['lastname'];
$email= $_POST['email'];
$username=  $_POST['username'];
$pasword =  $_POST['pasword'];


$password1= md5($pasword);
$insert = "INSERT INTO buyers (firstname, lastname, email, username, pasword) VALUES ('$firstname', '$lastname', '$email', '$username', '$password1')";
$radio = mysqli_query($connect, $insert);
}
?>