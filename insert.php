<?php
include("session.php");
if(isset($_POST['submitBtn'])){

    include("conn.php");

    $sql = "INSERT INTO contacts (contact_name, contact_phone, contact_email, Contact_address, contact_gender, contact_relationship, contact_dob, user_id)

    VALUES

    ('$_POST[nm]','$_POST[pn]','$_POST[em]','$_POST[homeaddress]','$_POST[gd]','$_POST[relationship]','$_POST[dob]',$_SESSION[mySession])";

    if (!mysqli_query($con,$sql)){
        die('Error:'.mysqli_error($con));
    }
    else{
        echo"<script>alert('1 record added!');window.location.href='view.php';</script>";
    }

}
else {
    echo"<script>alert('Please fill in the form!!!!!');window.location.href='default.php';</script>";
}

?>