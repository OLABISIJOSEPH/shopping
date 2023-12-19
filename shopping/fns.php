<?php
function get_userid($username)
{
    global $conn;

    $query = "select * from register where username = '$username'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    return $row['username'];

    
}
?>