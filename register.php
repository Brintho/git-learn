<?php
session_start();

// ragister check
if (isset($_POST['register'])) {
    $_SESSION['email']    = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['message']  = '<div class="alert alert-success">Registration successful! Please login.</div>';
    header("Location: login.php");
    exit();
}
?>

<!-- register.php -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Register</h3>
                            <form method="POST" action="register.php">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <button type="submit" name="register" class="btn btn-success w-100">Register</button>
                            </form>
                            <p class="text-center mt-3"><a href="login.php">Already have an account? Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
