<?php
include("conn.php");

$sql="UPDATE contacts SET
contact_name='$_POST[nm]',
contact_phone='$_POST[pn]',
contact_email='$_POST[em]',
contact_address='$_POST[homeaddress]',
contact_gender='$_POST[gd]',
contact_relationship='$_POST[relationship]',
contact_dob='$_POST[dob]'

WHERE id=$_POST[id];";

if(mysqli_query($con,$sql)){
    mysqli_close($con);
    header('Location:view.php');
}
?>