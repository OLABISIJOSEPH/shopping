<?php
include("connect.php");



$cat_name = $_POST['cat_name'];
$id = $_POST['id'];


$query = "update category set  cat_name= '$cat_name' where id = '$id'";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = 'Your changes have been made';
    include("category.php");
}
else{
    $error = 'no changes made';
    include("edit-cat.php");
}


?>