<?php
session_start();
include('connection.php');

// Check if the user is logged in
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    session_destroy();
    header("Location: index.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
