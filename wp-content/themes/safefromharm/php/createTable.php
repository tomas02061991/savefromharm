<?php

$sql="CREATE TABLE CONTRIBUTION (
            name VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            contribution SMALLINT(100) NOT NULL
           )";

include "connect.php";

if($conn->query($sql)==TRUE){$output="Tabellen blev oprettet";} 
        else{$output="Tabellen blev ikke oprettet:".$conn->error;}  
        $conn->close();

?>