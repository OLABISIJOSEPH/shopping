<?php
include("connect.php");



$cat_name = $_POST['cat_name'];

if(!$cat_name)
{
  //$error = 'category name required';
  include('category.php');
    exit;
}

 $query = "insert into category (cat_name) values ('$cat_name')";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = 'Category added';
    include('category.php');
    exit;
}
else{
    
    $error = 'Category already exists';
    include('category.php');
    exit;
}


?>