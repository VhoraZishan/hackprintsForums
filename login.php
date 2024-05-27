<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include"header.php";
        ?>
        <div class="main">
        <form action="/hackprints/login_process.php" id="loginForm" method="post">
            <label for="uname">Username:</label>
            <input type="text" placeholder="Username here" id="uname" name="uname" required><br>

            <label for="pass">Password:</label>
            <input type="password" placeholder="Password here" id="pass" name="pass" required><br>

            <button type="submit">Submit</button>
        </form>
</div>
    </body>
</html>