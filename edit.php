<?php
    include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("conn.php");
        $id = intval($_GET['id']);
        $result=mysqli_query($con,'SELECT*FROM contacts WHERE Id='.$id);
        while($row=mysqli_fetch_array($result))
        {
    ?>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['Id'];?>">
        <div id="container">
        <h2>My Address Book</h2>
        <h3>Edit Contact</h3>
        <label>Name</label><br>
        <input type="text" maxlength="30" name="nm" size="20" value="<?php echo $row['contact_name']?>">
        <br>
        <br>
        <label>Phone Number</label><br>
        <input type="tel" maxlength="12" name="pn"  value="<?php echo $row['contact_phone']?>">
        <br>
        <br>
        <label>Email Address</label><br>
        <input type="email" name="em"  value="<?php echo $row['contact_email']?>">
        <br>
        <br>
        <Label>Home Address</Label><br>
        <textarea name="homeaddress" required="required"> <?php echo $row['contact_address']?></textarea>
        <br>
        <br>
        <label>Gender</label><br>
        <input name="gd" type="radio" value="male" required="required"
        
        <?php
            if ($row['contact_gender']=='male')
            {
                echo'checked';
            } 
        ?>
        >Male 
        <input name="gd" type="radio" value="female" required="required"
        
        <?php
            if ($row['contact_gender']=='female')
            {
                echo'checked';
            }
        ?> 
        >Female
        <br>
        <br>
        <label>Relationship</label><br>
        <select name="relationship">
            <option value="">Please select</option>
            <option value="family"
            <?php
                if($row['contact_relationship']=='family')
                {
                    echo'selected';
                }
            ?>
            >Family</option>
            <option value="friend"
            <?php
                if($row['contact_relationship']=='friend')
                {
                    echo'selected';
                }
            ?>
            >Friend</option>
            <option value="colleague"
            <?php
                if($row['contact_relationship']=='colleague')
                {
                    echo'selected';
                }
            ?>
            >Colleague</option>
            <option value="other"
            <?php
                if($row['contact_relationship']=='other')
                {
                    echo'selected';
                }
            ?>
            >Other</option>
        </select>
        <br>
        <br>
        <label>Date of Birth</label><br>
        <input name="dob" type="date"  value="<?php echo $row['contact_dob']?>">
        <br>
        <br>
        <input type="submit" name="submitBtn" class="btn" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php
        }
        mysqli_close($con)
    ?>
    
</body>
</html>