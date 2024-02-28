<?php
    include '../../includes/connect.php';

    if(isset($_GET['delete_id']))
    {
        $id = $_GET['delete_id'];
        $sql = "DELETE FROM `personal_info` WHERE `personal_info`.`id` = '$id' ";
        $query = mysqli_query($conn,$sql);
        if($query)
        {
            echo "<script>alert('Record Deleted Successfully');</script>";
            echo "<script>window.location.href='admin_pannel/user_database/display.php';</script>";
        }
        else
        {
            echo "<script>alert('Record Not Deleted');</script>";
            die("Record Not Deleted".mysqli_connect_error());
            echo "<script>window.location.href='admin_pannel/user_database/display.php';</script>";
            
        }
    }

?>