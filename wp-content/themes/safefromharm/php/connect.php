<?php
$servername="localhost";
    $username="root";
    $password="#C00ki3s";
    $dbname="modul7";
    $conn=new mysqli($servername, $username, $password, $dbname);	
    if($conn->connect_error) {die($conn->connect_error);}

?>