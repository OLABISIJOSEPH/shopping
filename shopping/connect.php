<?php
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
//ini_set('display_errors', 1);



$conn = mysqli_connect("localhost", "root", "", "shopping_chart") or die("Cannot connect to database server");

?>