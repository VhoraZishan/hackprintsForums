<?php
    include "connection.php";
    session_start();
    $tid=$_GET['id'];
    $uname = $_SESSION['username'];
    $sql = "DELETE FROM `threads` WHERE t_Id='$tid' AND t_author = '$uname'";
    echo"<script>
        if (confirm('Do you want to delete thread?') == true) {
            continue;
          } else {
            location.replace('profile.php');
          }
    </script>";
    // $result = $conn -> query($sql); 
?>