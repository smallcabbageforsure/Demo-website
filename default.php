<?php
    include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type='text']:focus:valid{
            background-color:aquamarine;
        }
        input[type='text']:focus:invalid{
            background-color:red;
        }
        input[type=text]{
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            display: inline-block;
            font-size: 15;
        }
        input[type=tel]{
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            display: inline-block;
            font-size: 15;
        }
        input[type=email]{
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            display: inline-block;
            font-size: 15;
        }
        textarea{
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            display: inline-block;
            font-size: 15;
        }
        select{
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            display: inline-block;
            font-size: 15;
        }
        input[type=date]{
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            display: inline-block;
            font-size: 15;
        }
        input[type=submit]{
            background-color: gray;
            color: aliceblue;
            width: 49%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            font-size: 15;
            float : left;
        }
        input[type=reset]{
            background-color: gray;
            color: aliceblue;
            width: 49%;
            padding: 15px;
            float : right;
            margin-top: 5px;
            margin-bottom: 22px;
            font-size: 15;
        }
    </style>
</head>
    <h2>My Address Book</h2>
    <h3>Add New Contact:</h3>
<body>
    <form action ="insert.php"method="post">
        <label>Name</label><br>
        <input type="text" maxlength="30" name="nm" size="20">
        <br>
        <br>
        <label>Phone Number</label><br>
        <input type="tel" maxlength="12" name="pn">
        <br>
        <br>
        <label>Email Address</label><br>
        <input type="email" name="em">
        <br>
        <br>
        <Label>Home Address</Label><br>
        <textarea name="homeaddress"></textarea>
        <br>
        <br>
        <label>Gender</label><br>
        <input name="gd" type="radio" value="male">Male <input name="gd" type="radio" value="female">Female
        <br>
        <br>
        <label>Relationship</label><br>
        <select name="relationship">
            <option value="">Please select</option>
            <option value="family">Family</option>
            <option value="friend">Friend</option>
            <option value="colleague">Colleague</option>
            <option value="other">Other</option>
        </select>
        <br>
        <br>
        <label>Date of Birth</label><br>
        <input name="dob" type="date">
        <br>
        <br>
        <input type="submit" name="submitBtn" class="btn" value="Submit">
        <input type="reset" value="Reset">
        <a href="logout.php">Logout</a>
    </form>
</body>
</html>