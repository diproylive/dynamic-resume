<?php
session_start();
include '../includes/connect.php';

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `email` ='$email' AND `password` ='$password'";
    $query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);
    if($count)
    {
        $emailpass = mysqli_fetch_assoc($query);
        
        $_SESSION['gmail'] = $email;
        header('location:user_database/display.php');

    }
    else
    {
        echo "<script> alert('Do not match Email and Password');</script>";
       echo "<script>window.location.href = 'admin_index.php';</script>";
    }
}
?>