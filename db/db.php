<?php

$server='localhost';
$user='root';
$pass='';
$db='bmu';


$conn = mysqli_connect($server,$user,$pass,$db);


if($conn->connect_error)
{
    echo 'Error!';
}

echo 'connect success';






?>