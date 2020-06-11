<?php 

$host = 'db';
$user = 'root';
$password = 1234;
$db = 'test_db';

$connection = new mysqli($host, $user, $password, $db);
if($connection->connect_error){
   echo "connection failed" . $connection->connect_error;
   }
echo "successfully connected to mysql <br />";
echo "does it works";
?>
