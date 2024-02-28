<?php
include 'includes/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DASHBOARD</title>
    <?php include 'includes/link.php'; ?>
</head>
<body>
    <div class="container box">
        <form id="registration-form" action = "upload.php" method = "POST" enctype = "multipart/form-data">
            <h2>Register</h2>
            <h3 class="text-center bg-red">Personal Details </h3>

            <div class="mb-3">
                <label for="formFile" class="form-label">Select Your Profile Photo</label>
                <input class="form-control" type="file" id="formFile" name = "photo" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "name" placeholder="Enter Your Name" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Profession</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "profession" placeholder="Enter Your Profession" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address City || District || State || Pin code</label>
                <textarea class="form-control" id="exampleFormControlTextarea1"  name = "address" rows="3" placeholder = "Enter Your Address" required></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Create A valid Email For Login</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name = "gmail" placeholder="Enter Your Email" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone No</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name = "phone" placeholder="Enter Your Phone Number" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Language 01</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "lang_1" placeholder="Enter Your First Language" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Language 02</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "lang_2" placeholder="Enter Your Second Language" required>
            </div>


            <h3 class="text-center bg-red">Skills</h3>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "skill_01" placeholder="Enter Your First Skill" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Value (%)</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name = "skill_value_01" placeholder="Enter Your Value max 100%" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "skill_02" placeholder="Enter Your Second Skill" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Value (%)</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name = "skill_value_02" placeholder="Enter Your Value max 100%" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "skill_03" placeholder="Enter Your Third Skill" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Value (%)</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name = "skill_value_03" placeholder="Enter Your Value max 100%" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "skill_04" placeholder="Enter Your Four Skill" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Skill Value (%)</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name = "skill_value_04" placeholder="Enter Your Value max 100%" required>
            </div>

            <h3 class="text-center bg-red">Work Project</h3>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_name_01" placeholder="Enter Your First Project Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project Start Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_start_date_01" placeholder="Enter Your Project Start Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project End Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_end_date_01" placeholder="Enter Your Project End Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1"  name = "project_des_01" rows="3" placeholder = "Enter Your Project Description" required>*</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_name_02" placeholder="Enter Your Second Project Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project Start Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_start_date_02" placeholder="Enter Your Project Start Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project End Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_end_date_02" placeholder="Enter Your Project End Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1"  name = "project_des_02" rows="3" placeholder = "Enter Your Project Description" required>*</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_name_03" placeholder="Enter Your Third Project Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project Start Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_start_date_03" placeholder="Enter Your Project Start Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project End Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "project_end_date_03" placeholder="Enter Your Project End Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1"  name = "project_des_03" rows="3" placeholder = "Enter Your Project Description" required>*</textarea>
            </div>


            <h3 class="text-center bg-red">Educational BackGround</h3>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Current College / University / Institute Name </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "college_name_01" placeholder="Enter Your College / University / Institute Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Current College / University / Institute Duration Start And End Date </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "college_start_end_01" placeholder="Enter Your College / University / Institute Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Current College / University / Institute Course Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "college_course_01" placeholder="Enter Your College / University / Institute Course Name" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">College / University / Institute Name </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "college_name_02" placeholder="Enter Your College / University / Institute Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">College / University / Institute Duration Start And End Date </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "college_start_end_02" placeholder="Enter Your College / University / Institute Date" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">College / University / Institute Course Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "college_course_02" placeholder="Enter Your College / University / Institute Course Name" required>
            </div><br><br>

            <div class="row g-3 align-items-center">
            <label for="exampleFormControlInput1" class="form-label">Create A Password For Login</label>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" name = "password" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                    </span>
                </div><br><br>

                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Confiram Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" name = "cpassword" aria-describedby="passwordHelpInline">
                </div>
                </div><br><br>

                <div class="text-center">
                            <a href="index.php">Have an account?</a>
                        </div>

           

            


            <button type="submit" class="btn btn-primary" name = "submit" value = "submit" >Make Resume</button>
        </form>
    </div>



    <script src="scripth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
