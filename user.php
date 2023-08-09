<?php
session_start();
$username = $_SESSION['username'];
$level =$_SESSION['level'];
if(!empty($username)&& ($level)=='0'){
    header('location:Beranda.html');
    // echo "<h1>Admin | Dasboard</h1>";
    // echo "Welcome!", $username;
}else{
    header('location:index.html');
}

echo "<a href= 'logout.php'>Log Out</a>";
?>