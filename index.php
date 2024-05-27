<html>
<?php
    include"connection.php";
    include "header.php";
    include "threadsImp.php";
    $sql = "SELECT * FROM `threads`";
    $result = mysqli_query($conn, $sql);
?>
<head>
    <title>
        Forums
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="main">
        <ol>
        <?php
            while($row = $result->fetch_assoc()){
                echo '
                <li class="row">
                    <a href="/hackprints/thread.php?id='.$row["t_Id"].'">
                        <h4>'.$row["t_title"].'</h4>
                        <div class="bottom">
                        <p class="timestamp">'.
                           $row["t_date"] 
                        .'</p>
                        <p class="comment-count">'.
                            $row["t_author"]
                        .'</p>
                    </div>
                    </a>
                </li>
                ';
            } 
        ?>
        </ol>
    </div>
</body>

</html>