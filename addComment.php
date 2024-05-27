<?php
    session_start();
    include "connection.php";
    if((isset($_SESSION['login'])== true)){
    $cContent = $_POST['comment'];
    $cAuthor = $_SESSION['username'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $cTid = $_SESSION['ctid'];
    $sql = "INSERT INTO `comments` (c_author,c_date,c_content,c_t_id) values (?,?,?,?)";
    $res = $conn -> prepare($sql);
    $res -> bind_param("sssi",$cAuthor,$date,$cContent,$cTid);
    $res -> execute();
    header("Location: thread.php?id=$cTid");
    exit();}else{
        echo'<script>
            alert("Please login to leave a comment");
            location.replace("/hackprints/login.php");
        </script>';
    }
?>