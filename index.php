<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <div id="form">
        <h1>Login form </h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <!-- we have to username we created at the database -->
            <input type="text" id="user" name="user"> <br><br>
            <label>Password</label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">

        </form>
    </div>

    <h1>Test</h1>
    <h1>Test2</h1>


    <script>
        function isvalid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if (user.length == "" && pass.length == "") {
                alert(" Username and password field is empty!!!");
                return false;
            } else if (user.length == "") {
                alert(" Username field is empty!!!");
                return false;
            } else if (pass.length == "") {
                alert(" Password field is empty!!!");
                return false;
            }

        }
    </script>

</body>

</html>