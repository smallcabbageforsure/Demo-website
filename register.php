<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name:<br>
        <input type="text" name="user_name" required><br><br>

        Email Address:<br>
        <input type="email" name="user_email" required><br><br>

        Password:<br>
        <input type="password" name="user_password" required><br><br>

        <input type="submit" name="submitBtn" value="Register">
        <input type="reset" value="Reset">
    </form>
    <?php
        if (isset($_POST['submitBtn'])){
            include("conn.php");
            $sql = "INSERT INTO users (user_name, user_email, user_password) VALUE('$_POST[user_name]',
            '$_POST[user_email]','$_POST[user_password]')";

            if(!mysqli_query($con,$sql)){
                die('Error:'.mysqli_error($con));
            }
            else {
                echo"<script>alert('Registration successful!!');window.location.href='login.php';</script>";
            }
        }
    ?>
</body>
</html>