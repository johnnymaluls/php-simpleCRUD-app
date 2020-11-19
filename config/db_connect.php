<?php 

//CONNECT TO THE DATABASE
$conn = mysqli_connect('localhost','john','HVAXFVBG','training');

//CHECK CONNECTION
if(!$conn) {
	die("ERROR" . mysqli_connect_error());
}

 ?>