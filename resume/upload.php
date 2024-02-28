<?php
include 'includes/connect.php';


if(isset($_POST['submit']))
{
    $file = $_FILES['photo'];
    $file_name = $file['name'];
    $file_path = $file['tmp_name'];
    $file_error = $file['error'];

    $name = $_POST['name'];
    $profession = $_POST['profession'];
    $address = $_POST['address'];
    $gmail = $_POST['gmail'];
    $phone = $_POST['phone'];
    $lang_1 = $_POST['lang_1'];
    $lang_2 = $_POST['lang_2'];


    $skill_01 = $_POST['skill_01'];
    $skill_value_01 = $_POST['skill_value_01'];
    $skill_02 = $_POST['skill_02'];
    $skill_value_02 = $_POST['skill_value_02'];
    $skill_03 = $_POST['skill_03'];
    $skill_value_03 = $_POST['skill_value_03'];
    $skill_04 = $_POST['skill_04'];
    $skill_value_04 = $_POST['skill_value_04'];


    $project_name_01 = $_POST['project_name_01'];
    $project_start_date_01 = $_POST['project_start_date_01'];
    $project_end_date_01 = $_POST['project_end_date_01'];
    $project_des_01 = $_POST['project_des_01'];

    $project_name_02 = $_POST['project_name_02'];
    $project_start_date_02 = $_POST['project_start_date_02'];
    $project_end_date_02 = $_POST['project_end_date_02'];
    $project_des_02 = $_POST['project_des_02'];

    $project_name_03 = $_POST['project_name_03'];
    $project_start_date_03 = $_POST['project_start_date_03'];
    $project_end_date_03 = $_POST['project_end_date_03'];
    $project_des_03 = $_POST['project_des_03'];


    $college_name_01 = $_POST['college_name_01'];
    $college_start_end_01 = $_POST['college_start_end_01'];
    $college_course_01 = $_POST['college_course_01'];
    $college_name_02 = $_POST['college_name_02'];
    $college_start_end_02 = $_POST['college_start_end_02'];
    $college_course_02 = $_POST['college_course_02'];

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $emailquery = "SELECT * FROM `personal_info` WHERE `gmail` ='$gmail' ";
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
            if($file_error == 0)
            {
                $destfile = 'image/'.$file_name;
                move_uploaded_file($file_path,$destfile);

                $query = "INSERT INTO `personal_info`(`photo`, `name`, `profession`, `address`, `gmail`, `phone`, `lang_1`, `lang_2`, `skill_01`, `skill_value_01`, `skill_02`, `skill_value_02`, `skill_03`, `skill_value_03`, `skill_04`, `skill_value_04`, `project_name_01`, `project_start_date_01`, `project_end_date_01`, `project_des_01`, `project_name_02`, `project_start_date_02`, `project_end_date_02`, `project_des_02`, `project_name_03`, `project_start_date_03`, `project_end_date_03`, `project_des_03`, `college_name_01`, `college_start_end_01`, `college_course_01`, `college_name_02`, `college_start_end_02`, `college_course_02`, `password`, `cpassword`) VALUES ('$destfile','$name','$profession','$address','$gmail','$phone','$lang_1','$lang_2','$skill_01','$skill_value_01','$skill_02','$skill_value_02','$skill_03','$skill_value_03','$skill_04','$skill_value_04','$project_name_01','$project_start_date_01','$project_end_date_01','$project_des_01','$project_name_02','$project_start_date_02','$project_end_date_02','$project_des_02','$project_name_03','$project_start_date_03','$project_end_date_03','$project_des_03','$college_name_01','$college_start_end_01','$college_course_01','$college_name_02','$college_start_end_02','$college_course_02','$password','$cpassword')";
                $result = mysqli_query($conn, $query);

                if($result)
                {
                    echo "
                        <script>
                                alert('Your Resume has been uploaded successfully');
                                window.location.href = 'index.php';
                        </script>";
                    echo "
                        <script>
                            window.location.href = 'reg.php';
                        </script>";
                }
                else
                {
                    echo "<script>alert('Your Resume has not been uploaded');</script>";
                    echo "<script>window.location.href = 'reg.php';</script>";
                }
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
else
{
    echo "
        <script>
            window.location.href ='reg.php';
        </script>";
}
?>