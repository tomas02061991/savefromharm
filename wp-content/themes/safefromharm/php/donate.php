<?php
	$tempDir = "/var/www/savefromharm/wp-content/themes/safefromharm/";
	include $tempDir.'php/createTable.php';


	$name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$newContribution = $_REQUEST["range"];

	$cardNumber = $_REQUEST["card"];
	$expDate = $_REQUEST["exmonth"]."/".$_REQUEST["exyear"];
	$cvc = $_REQUEST["cvc"];

	$sql = "SELECT * FROM DONATION WHERE Email='$email'";
	include $tempDir.'php/connect.php';
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		//existing user
		$row = $result->fetch_assoc();
		$contribution = $newContribution + $row['Contribution'];
		$sql = "UPDATE DONATION SET Name='$name', Contribution=$contribution, CardNumber=$cardNumber, ExpirationDate='$expDate', CVCNumber=$cvc WHERE Email='$email'";
		if($conn->query($sql) == True){
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: Tomas@safefromharm.dk" . "\r\n";
    		$headers .= "X-Mailer: PHP/" . phpversion();

    		$to = $row['email'];
    		$subject = "Thank you for donating! - SafeFromHarm";

    		$msg = "Hello ".$row['name']."<br><br>Thank you very much for donating the amount:".$newContribution;

    		mail($to, $subject, $msg, $headers);
    		$success = 1;
		} else{
			$output="Data kunne ikke gemmes:".$conn->error;
			$success = 0;
		}
	}
	else{
		//new user
		$sql="INSERT INTO DONATION VALUES('$name','$email', $newContribution, $cardNumber, '$expDate', $cvc)";
		if($conn->query($sql) == FALSE){
			$output="Data kunne ikke gemmes:".$conn->error;
			$success = 0;
		}	
		else{
			$sql = "SELECT * FROM DONATION WHERE Email='$email'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: Tomas@safefromharm.dk" . "\r\n";
    		$headers .= "X-Mailer: PHP/" . phpversion();

    		$to = $row['email'];
    		$subject = "Thank you for donating! - SafeFromHarm";

    		$msg = "Hello ".$row['name']."<br><br>Thank you very much for donating the amount:".$newContribution;

    		mail($to, $subject, $msg, $headers);
    		$success = 1;
		}
	}
	$conn->close();
	header("Location: /?success=".$success);

?>