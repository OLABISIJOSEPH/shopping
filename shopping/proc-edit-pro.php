<?php

session_start();

include('connect.php');


$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$size = $_POST['size'];
$color = $_POST['color'];
$specification = $_POST['specification'];
$id = $_POST['id'];


$query = "update product set  product_name= '$product_name', quantity = '$quantity', size='$size', color='$color', specification = '$specification' where id = '$id'";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = 'Your changes have been made';
    include("view-product.php");
}
else{
    $error = 'Database error';
    include("view-product.php");
}





?>