<?php
	$con = new mysqli("localhost", "root", "root", "contacts") or die("Unable to connect");

	if($con->connect_error)
	{
	    die("Connection Failed:" .$con->connect_error);
	}

	// if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) ){

		// $uname=$_POST["name"];

		$contactlist="select Fname, Lname, contact_id from contact;";

		$contactresult=$con->query($contactlist);

		while($row=$contactresult->fetch_assoc()){

			$array[]=$row;
		}

		 echo json_encode($array);
		// $sample =1;
		// echo $sample;
	// }
?>