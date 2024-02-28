<?php
include '../../includes/connect.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone = $_POST['phone'];

    $emailquery = "SELECT * FROM `admin` WHERE `email` ='$email' ";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0)
    {

        echo "
            <script>
                alert('Email Id Already Exists');
            </script>";
    }
    else
    {
        if($password == $cpassword)
        {
            $query ="INSERT INTO `admin`(`name`, `email`, `password`, `cpassword`, `phone`) VALUES ('$name','$email','$password','$cpassword','$phone')";
            $result = mysqli_query($conn, $query);

                if($result)
                {
                    echo "
                        <script>
                                alert('Your Record has been uploaded successfully');
                                window.location.href = '../admin_index.php';
                        </script>";
                    echo "
                        <script>
                            window.location.href = '../admin_reg.php';
                        </script>";
                }
                else
                {
                    echo "<script>alert('Your Record has not been uploaded');</script>";
                    echo "<script>window.location.href = '../admin_reg.php';</script>";
                }
        }
        else
        {
            echo "
                <script>
                    alert('Passwords do not match');
                </script>";
        }
    }
}


?>