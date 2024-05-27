<?php
    include "connection.php";
    $sql = "SELECT * FROM `threads`";
    $result = $conn -> query($sql);  

?><ol>
<?php
    // while($row = $result -> fetch_assoc()){
    //     echo '
    //         <li class="row">
    //         <a href = "/hackprints/thread?\''.$row[`t_id`].'\'">
    //             <h4>'.$row["t_title"].'</h4>
    //         </a>
    //         </li>
    //     ';   
    // }
    // while($row = $result->fetch_assoc()){
    //     echo '
    //     <li class="row">
    //         <a href="/hackprints/thread.php?'.$row["t_Id"].'">
    //             <h4>'.$row["t_title"].'</h4>
    //         </a>
    //     </li>
    //     ';
    // }
?>
</ol>