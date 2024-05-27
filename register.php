<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include"header.php";
        ?>
        <div class="main">
            <div class="mainB">
                <form action="/hackprints/register_process.php" id="loginForm" method="post">
                <label for="uname">Username:</label>
                <input type="text" placeholder="Username here" id="uname" name="uname" required><label id="l1"></label><br>

                <label for="email">Email:</label>
                <input type="email" placeholder="Email here" id="email" name="email" required><label id="l2"></label><br>

                <label for="pass">Password:</label>
                <input type="password" placeholder="Password here" id="pass" name="pass" required><label id="l3"></label><br>

                <label for="uname">Confirm password:</label>
                <input type="password" placeholder="Confirm password" id="pass2" name="pass2" required><label id="l4"></label><br>

                <button type="submit" id="sub">Submit</button>
                </form>
                <script>
                    var email = document.getElementById("email");
                    var Pass = document.getElementById("pass");
                    var confirmPass = document.getElementById("pass2");
                    email.addEventListener("input", (event) => {
                      if (email.validity.typeMismatch) {
                        email.setCustomValidity("I am expecting an email address!");
                      } else {
                        email.setCustomValidity("");
                      }
                    });

                    confirmPass.addEventListener("input", (event) => {
                      if (confirmPass.value != Pass.value) {
                        confirmPass.setCustomValidity("Passwords don't match!");
                      } else {
                        confirmPass.setCustomValidity("");
                      }
                    });
                    
                </script>
            </div>
        </div>
    </body>
</html>