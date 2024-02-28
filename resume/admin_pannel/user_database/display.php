<?php
session_start();
include '../../includes/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Data</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<!--Get your code at fontawesome.com-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class = "bg-green">
    <h3 class = "btn btn-primary mt-3"><?php echo 'Welcome  '.$_SESSION['gmail']; ?></h3>
    <div class = "card-header bg-info mt-5">
        <h1 class="text-center">Display User Data</h1>
    </div>

    <?php 
        $sql = "SELECT * FROM `personal_info`";
        $result = mysqli_query($conn, $sql);
    ?>
    <table class="table-danger table-bordered border-primary center">
        <thead class = "text-center">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Profession</th>
                <th scope="col">Address</th>
                <th scope="col">Gmail</th>
                <th scope="col">Phone No</th>
                <th scope="col">College Name</th>
                <th scope="col">College Course Name</th>
                <th colspan=2 class = "text-center">Action</th>
            </tr>
        </thead>
        <tbody class = "text-center">

        <?php
        if($result)
        {
            while($rows = mysqli_fetch_array($result))
            {
            
             ?>
                <tr>
                    <th scope="row"><?php echo $rows['id'];?></th>
                    <td>
                        <img src="<?php echo $rows['photo'];?>" width = 100px height = 100px alt="image" srcset="">
                    </td>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['profession'];?></td>
                    <td><?php echo $rows['address'];?></td>
                    <td><?php echo $rows['gmail'];?></td>
                    <td><?php echo $rows['phone'];?></td>
                    <td><?php echo $rows['college_name_01'];?></td>
                    <td><?php echo $rows['college_course_01'];?></td>
                    <td>
                        <button class = "btn btn-success">
                            <a href = "update.php?update_id = <?php echo $rows['id'];?>" title = "Update" class = "text-white dec">
                                Edit
                            </a>
                        </button>
                    </td>
                    <td>
                        <button class = "btn btn-danger">
                            <a href = "delete.php? delete_id = <?php echo $rows['id'];?>" title = "Delete" class = "text-white dec">
                                Delete
                            </a>
                        </button>
                    </td>
                </tr>
             <?php
            }


        }
        ?>
            
           
        </tbody>
    </table>
    <div class = "text-center mt-5">
    <button type="submit" class="btn btn-primary" name = "logout" value = "submit" ><a href = "logout.php" class = "text-white dec">Log Out</a></button>
    </div>




    



<?php include '../admin_includes/admin_footer.php'; ?>
</body>
</html>