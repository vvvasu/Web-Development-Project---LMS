<?php 

$DB = mysqli_connect("localhost","root","","lms_db");
if (!$DB) {
	echo "Connection error".mysql_error();
}



?>