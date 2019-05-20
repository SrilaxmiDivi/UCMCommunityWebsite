<?php

	if(isset($_POST["postsubmit"])){
		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$description = $_POST['inputtextarea'];
		
		//Database Connection
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "ucmindiandb";
		
		$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
		
		$sql = "INSERT INTO roomdata (firstname, lastname, email, phone, description)
		VALUES ('$first', '$last', '$email', '$phone', '$description');";
		
		mysqli_query($conn, $sql);
		
		//maintain check whether data is updated in database or not then display message
		echo 'Data Saved successfully' ;
	}

?>