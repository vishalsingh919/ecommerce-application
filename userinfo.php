<?php

include "connect.php";

if (isset($_POST['submit'])) {
	
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO userinfodata (user, email, mobile, comment) 
VALUES ('$user', '$email', '$mobile', '$comment') ";
mysqli_query($con, $query);

 if (!$query) 
 {
	echo mysqli_error();
 }
 else
 {
	echo"Record added successfully.";
 }

}

?>