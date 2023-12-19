<?php
include("connect.php");
//require_once("fns.php");


$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$size = $_POST['size'];
$color = $_POST['color'];
$specification = $_POST['specification'];

$query = "insert into product (product_name,quantity,size,color,specification) values ('$product_name','$quantity','$size','$color','$specification')";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = '';
    include('view-product.php');
    exit;
}
else{
    
    $error = 'Error inserting into database';
    include('view-post.php');
    exit;
}


?>