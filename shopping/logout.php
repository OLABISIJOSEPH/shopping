<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['privilege']); 
session_destroy();
include('index.php');

?>