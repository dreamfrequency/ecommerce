<?php

$con = mysqli_connect("localhost", "root", "techn000", "ecommerce");

if(!$con) {
	die ('failed to connect to MySQL:' . mysqli_connect_error());
}

?>