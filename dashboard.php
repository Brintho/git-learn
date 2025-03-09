<!-- dashboard.php -->
<?php

session_start();
if (! isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    $_SESSION['message'] = '<div class="alert alert-success">Login successful!</div>';
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
            <?php if (isset($_SESSION['message'])): ?>
            <?=$_SESSION['message'];unset($_SESSION['message']);?>
            <?php endif; ?>
            <br>
            <div class="container">
                <a class="navbar-brand" href="#">Dashboard</a>
                <a class="btn btn-danger" href="login.php">Logout</a>
            </div>
        </nav>
        <div class="container mt-5">
            <h2>Welcome to Dashboard</h2>
        </div>
    </body>

</html>
