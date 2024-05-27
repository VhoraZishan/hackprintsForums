<head>
    <title>
        Forums
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <?php 
            include "connection.php";
            include "header.php";
            if((isset($_SESSION['login'])== true)){
                $uname = $_SESSION['username'];
            }else{
                $uname = 'notloggedin';
            }
            if($uname == "notloggedin"){
                echo '<script>
                    alert("Not logged in!");
                    location.href = "login.php";
                </script>';
            }else{
                $sql = "SELECT * FROM `threads` WHERE t_author='$uname'";
                $result = $conn -> query($sql);  
            }
            ?>
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
                        <a href=tDelete.php?id='.$row["t_Id"].'><button>Delete</button></a>
                    </li>
                    ';
                } 
                ?>
                </ol>
    </div>
</body>