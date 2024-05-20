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
        #box{
            width:250px;
            height:400px;
            background-color:#f3ffc9;
            float:left;
            border-radius:10px;
            margin: 5px;
            padding:10px;
        }

        .deletelink{
            text-decoration: none;
            padding: 7px 16px;
            text-align: center;
            display: inline-block;
            background-color: crimson;
            color: #ffffff;
            border-radius: 5px;


        }

        .editlink{
            text-decoration: none;
            padding: 7px 16px;
            text-align: center;
            display: inline-block;
            background-color: rgb(1,161,51);
            color: #ffffff;
            border-radius: 5px;
        }

        #header{
            width: 11%;
            padding:10px;
            background-color: lightgreen;
            margin-bottom:10px;
            border-radius: 10px;

        }
    </style>
    
</head>
<body>
    <div id="header">
        <a href="default.php">Add New Contact</a> | <a href="logout.php">Logout</a>
    </div>
    <form method = "post">
        Search: <input type="text" name="search_key">
        <button type="submit" name="searchBtn">Search</button>
    </form>
    <br>
    <?php
    include("conn.php");
    $searchkey = '';

    if(isset($_POST['searchBtn'])){
        $searchkey = $_POST['search_key'];
    }



    $sql = "SELECT * FROM contacts WHERE contact_name LIKE
    '%$searchkey%'AND user_id=".$_SESSION['mySession'];
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($result)){
        echo'<div id="box">';

        if($row['contact_gender'] == "male"){
            echo'<img src="img/man.png"width="50">';
        }

        elseif($row['contact_gender'] == "female"){
            echo'<img src="img/woman.png"width="50">';
        }



        echo '<h3>'.$row['contact_name'].'</h3>';
        echo '<p>'.$row['contact_phone'].'</p>';
        echo '<p>'.$row['contact_email'].'</p>';
        echo '<p>'.$row['contact_address'].'</p>';
        echo '<p>'.$row['contact_gender'].'</p>';
        echo '<p>'.$row['contact_relationship'].'</p>';
        echo '<p>'.$row['contact_dob'].'</p>';
        echo '<a class="deletelink" onclick= "return confirm(\'Are you sure you want to delete the record?\') "href= "delete.php?id='.$row['Id'].'">Delete</a>';
        echo'<a class="editlink" href="edit.php?id='.$row['Id'].'">Edit</a>';
        echo '</div>';
    }
    ?>
</body>
</html>
