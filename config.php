<?php
// database connection
$conn = mysqli_connect('localhost', 'root', '', 'Send-it');

// checking connection 
if(!$conn) {
    die('Database failed to connect!!');
}

?>