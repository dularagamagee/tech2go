<?php
$hostname="localhost";
$username="root";
$password="mariadb";
$database="mysite";

$conn=new mysqli($hostname,$username,$password,$database);

if ($conn->connect_error) {
  die("Processo fallito: " . $conn->connect_error);
} else{
    echo "gg";
}
?>