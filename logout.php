<?php
session_start();
// logout check
if (isset($_GET['logout'])) {
    $_SESSION['logout_message'] = '<div class="alert alert-danger">Logged out successfully!</div>';
    session_unset(); // seeion empty
    session_destroy(); // session destroy
    //send to login page
    header("Location: login.php");
    exit();
}
