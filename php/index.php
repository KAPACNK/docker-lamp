<?php 

$host = 'mysql';  //the name of the mysql service inside the docker file.
$user = 'devuser';
$password = 'devpass';
$db = 'db_name';
$conn = new mysqli($host,$user,$password,$db);

if($conn->connect_error){
    echo 'connection failed'. $conn->connect_error;
}
echo 'successfully connected to MYSQL';


 ?>