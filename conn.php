<?php

$con = mysqli_connect("localhost","root","","myaddressbook");
//Check connection
if (mysqli_connect_errno()){
    echo "There is an error: ".mysqli_connect_error();
}

?>