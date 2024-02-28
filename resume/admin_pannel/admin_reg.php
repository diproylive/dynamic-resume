<!doctype html>
<html lang="en">
  <head>
    <?php include 'admin_includes/admin_header.php'; ?>
  </head>
  <body>

    <div class="container box">
        <form id="registration-form" action = "database/insert.php" method = "POST">
            <h2 class = "text-center">Only Admin Register</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name = "name" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = "password" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = "cpassword" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Whatsapp Number </label>
                <input type="number" class="form-control" id="exampleInputEmail1" name = "phone" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit" value = "submit" >Submit</button>
        </form>
    </div><!-- /.container -->
    




    <?php include 'admin_includes/admin_footer.php'; ?>
  </body>
</html>