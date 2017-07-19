<?php
$connect = mysqli_connect('localhost','root','','soding');

if (mysqli_connect_errno())
{
	echo "Can't connect to Database: ".mysqli_connect_error();
	}


?>
