<?php
    include "connection.php";
    
    $username = $_POST["uname"];
    $password = $_POST["pass"];
    $email = $_POST["email"];

    $sql = "SELECT * FROM `users` WHERE  username = '$username'";
    $result = $conn ->query($sql);

    if ($result -> num_rows > 0) { 
        echo"<script>
            alert('Username alreasy taken!');
            location.href='/hackprints/register.php';
        </script>";
    } else {
        $sql = "INSERT INTO `users` (username,password,email) values (?,?,?)";
        $res = $conn -> prepare($sql);
        $res -> bind_param("sss", $username, $password, $email);
        $res -> execute();
        echo"<script>
            alert('Registered! Please log in with the credentials');
            location.href='/hackprints/login.php';
        </script>";
    }
?>