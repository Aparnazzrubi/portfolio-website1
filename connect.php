<?php
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $subject=$_POST['Subject'];
    $message=$_POST['Message..'];
    
//Database connection
$host='rds-endpoint';
$user='username-of-rds';
$pass='password';
$db_name='database-name';

$conn=new mysqli($host, $user, $pass, $db_name);
if($conn->connect_error) {
    die('Connection error: '. $conn->connect_error);
}

?>
