<?php
session_start();

// chake login
if (isset($_POST['login'])) {
    if (isset($_SESSION['email']) && $_SESSION['email'] == $_POST['email'] && $_SESSION['password'] == $_POST['password']) {
        $_SESSION['loggedin']       = true;
        $_SESSION['message']        = '<div class="alert alert-success">Login successful!</div>';
        $_SESSION['logout_message'] = '<div class="alert alert-danger">Logged out successfully!</div>';
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = '<div class="alert alert-danger">Invalid email or password!</div>';
        header("Location: login.php");
        exit();
    }
}

?>

<!-- login.php -->


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <!-- Show logout message -->
            <?php if (isset($_SESSION['logout_message'])): ?>
            <?=$_SESSION['logout_message'];?>
            <?php unset($_SESSION['logout_message']); // I'm deleting the message after showing it once. ?>
            <?php endif; ?>

            <!-- Show login message -->
            <?php if (isset($_SESSION['message'])): ?>
            <?=$_SESSION['message'];?>
            <?php unset($_SESSION['message']); ?>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Login</h3>
                            <form method="POST" action="login.php">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                            </form>
                            <p class="text-center mt-3"><a href="register.php">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
