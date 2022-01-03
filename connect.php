<?php

$con = mysqli_connect('localhost','root','','ecommerce');

if (!$con)
{	
	echo die("Connection failed:".mysqli_connect_error());
}

?>