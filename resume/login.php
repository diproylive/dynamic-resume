<?php
session_start();

include 'includes/connect.php';

if(isset($_POST['submit']))
{
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `personal_info` WHERE `gmail` ='$gmail' AND `password` ='$password'";
    $query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);
    if($count)
    {
        $emailpass = mysqli_fetch_assoc($query);
        
        $_SESSION['email'] = $gmail;
        header('location:resume.php');

    }
    else
    {
        echo "<script> alert('Do not match Email and Password');</script>";
       echo "<script>window.location.href = 'index.php';</script>";
    }
}


?>