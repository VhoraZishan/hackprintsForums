<body>
    <link rel="stylesheet" href="style.css">
    <?php
        include"header.php";
        if((isset($_SESSION['login'])== true)){
            $uname = $_SESSION['username'];
        }else{
            $uname = 'notloggedin';
        }
    ?>
    <div class="main">
    <form action="/hackprints/tCreate.php" id="newThread" method="POST">
        Title: <textarea id="t" name="t" cols="30" rows="1" required /></textarea><br>
        Content: <textarea id="c" name="c" cols="30" rows="10" required /></textarea><br>
        <a><button type="submit">Submit</button></a>
    </form>
    <p id="p"></p>
    </div>
</body>