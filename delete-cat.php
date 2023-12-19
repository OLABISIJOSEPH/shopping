<?php
session_start();
include('connect.php');
$id = $_GET['id'];

$query = "delete from category where id = '$id'";
mysqli_query($conn,$query);

header("Location: category.php");



?>