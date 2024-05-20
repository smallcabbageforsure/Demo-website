<?php
    include("session.php");

include("conn.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM contacts WHERE Id=$id";
    $result = mysqli_query($con,$sql);
    mysqli_close($con);
    echo '<script>alert("Record deleted!!");window.location.href="view.php";</script>';

}
else{
    echo "<script>alert('Please choose the record to delete!!');window.location.href='view.php';</script>";

}
?>