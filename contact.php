<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_connect');

$email =  $_POST['email'];
$password =  $_POST['password'];

$query = "INSERT INTO 'tbl_contact'('id', 'email', 'password') VALUES ('0', '$email' ,'$password')";

$r = mysqli_query($conn, $query);

if($r) {
echo "MESSAGE IS SENT";
}

else{
    echo "ARE U A VALID USER";
}

?>
