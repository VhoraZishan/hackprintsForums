<head>
    <title>
        Forums
    </title>
    <link rel="stylesheet" href="style-thread.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "header.php";
        include "connection.php";
        if((isset($_SESSION['login'])== true)){
            $uname = $_SESSION['username'];
        }else{
            $uname = 'notloggedin';
        }
        $threadId = $_GET['id'];
        $sql = "SELECT * FROM `threads` WHERE t_Id=$threadId";
        $result = $conn -> query($sql);
        $data = $result -> fetch_assoc();
        $_SESSION['ctid'] = $threadId;
    ?>
    
    <div class="main">
        <div class="tContent">
            <?php 
                echo '
                <h4 class="title">'.
                    $data["t_title"]
                .'</h4>
                 by:'.$data["t_author"].'
                <p class="thread-content">'.
                    $data["t_content"]
                .'</p>
                <div class="bottom">
                    <p class="timestamp">'.
                        $data["t_date"]
                    .'</p>
                </div>
            ';
            ?>
        </div>
        <form action="/hackprints/addComment.php" id="commentForm" method="post">
            <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Add comment" required /></textarea>
            <button type="submit">Comment</button>
        </form>
        <div class="comments">
            <?php
                $sql = "SELECT * FROM `comments` WHERE c_t_id=$threadId";
                $result = $conn -> query($sql);
                while($row = $result -> fetch_assoc()){
                    echo '
                    <div class="comment">
                        <div class="top-comment">
                            <p class="user">'.
                                $row["c_author"]
                            .'</p>
                            <p class="comment-ts">'.
                                $row["c_date"]
                            .'</p>
                        </div>
                        <div class="comment-content">'.
                            $row["c_content"]
                        .'</div>
                    </div>
                    ';
                }
            ?>
        </div>
    </div>
</body>