<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h3>User Login</h3>
    <form method="post">
        Email:<br>
        <input type="email" name="user_email" required><br><br>

        Password:<br>
        <input type="password" name="user_password" required><br><br>

        <input type="submit" name="loginBtn" value="Login">
        <input type="reset" name="Reset">
    </form>
    <p>No account yet? Please register<a href="register.php">here</a></p>

    <?php
        include("conn.php");
        session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $user_email=$_POST['user_email'];
            $user_password=$_POST['user_password'];

            $sql="SELECT*FROM users WHERE user_email='".$user_email."'and user_password='".$user_password."'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
            $rowcount=mysqli_num_rows($result);

            if($rowcount==1){
                $_SESSION['mySession']=$row['id'];
                header("location:view.php");
            }
            else{
                echo'<script>alert("Your Email or Password is invalid. Please re login");</script>';

            }
            mysqli_close($con);

        }
    ?>


    
</body>
</html>