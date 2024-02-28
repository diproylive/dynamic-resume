<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"> User Login</h3>
                        <form id="loginForm" action = "login.php" method = "POST">
                            <div class="form-group">
                                <input type="email" class="form-control" name = "gmail" placeholder="Enter Your Email" id="gmail" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name = "password" placeholder="Enter Your Password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name = "submit" value = "submit">Login</button>
                        </form><br>
                        <div class="text-center">
                            <a href="reg.php">Don't have an account?</a>
                        </div><br>
                        <div class="text-center">
                            <a href="admin_pannel/admin_index.php" class = "btn-block">Are You Admin?</a>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and custom JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
