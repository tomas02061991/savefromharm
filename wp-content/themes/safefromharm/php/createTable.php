<?php

$sql="CREATE TABLE DONATION(
            Name VARCHAR(50) NOT NULL,
            Email VARCHAR(50) NOT NULL,
            Contribution SMALLINT(100) NOT NULL,
            CardNumber INT(100) NOT NULL,
           	ExpirationDate VARCHAR(50) NOT NULL,
           	CVCNumber INT(100) NOT NULL
           );";

include "connect.php";

if($conn->query($sql)==TRUE){$output="Tabellen blev oprettet";} 
        else{$output="Tabellen blev ikke oprettet:".$conn->error;}  
        $conn->close();

?>