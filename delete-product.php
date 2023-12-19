<?php

session_start();
include('connect.php');

$id = $_GET['id'];

$query = "delete from product where id = '$id'";
mysqli_query($conn,$query);

header("Location: view-product.php");

?>