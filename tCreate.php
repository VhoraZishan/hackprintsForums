<?php
    include "connection.php";
    session_start();
    $title = $_POST['t'];
    $content = $_POST['c'];
    $author = $_SESSION['username'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO `threads` (t_title,t_author,t_date,t_content) values (?,?,?,?)";
    $res = $conn -> prepare($sql);
    $res -> bind_param("ssss",$title,$author,$date,$content);
    $res -> execute();
    echo"<script>
        alert('Thread added');
        location.replace('/hackprints/index.php');
    </script>";
?>