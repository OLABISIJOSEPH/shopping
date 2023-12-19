<?php
session_start();

include('connect.php');
//  require_once('fns.php') ;
 

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!$username || !$password)
{
    $error = 'Username and password required to continue';
    include('index.php');
    exit;
}

$query = "select * from login where username = '$username' and password = ('$password')";




$result = mysqli_query($conn,$query);
$num_records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_records > 0)
{
    $_SESSION['valid_user'] = $username;
    $_SESSION['privilege'] = $row['privileged'];


    include('dashboard.php');
    exit;
}
else{
    $error = 'Login failed';
    include('index.php');
    exit;
}

?>