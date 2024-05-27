<?php
session_start();
include('connection.php');

    $username = $_POST['uname'];
    $password = $_POST['pass'];
    
    $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";
    $result = $conn -> query($sql);    
    $data = $result -> fetch_assoc();
    
    if($data['username'] != $username){
        echo "no such account";
        echo"<script>
            alert('wrong credentials');
            window.location.href = '/hackprints/login.php';
        </script>";
    }else{
        echo "logged in as $username";
        $_SESSION["username"] = $username;
        $_SESSION["user_id"] = $data['user_id'];
        $_SESSION['user_email'] = $data['email'];
        $_SESSION['login'] = true;
        echo"<script>
            window.location.href = '/hackprints/index.php?login=true';
        </script>";
    }
?>
