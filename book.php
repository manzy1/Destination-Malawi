
<?php


$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Number = $_POST['Number'];
$Destination = $_POST['Destination'];
$Reference = $_POST['Reference'];
$Country = $_POST['Country'];
$Notes = $_POST['Notes'];

/*echo $Name;
echo $Email;
echo $Gender;
echo $Destination;
echo $Notes;*/
//Database connection
include 'dbconnect.php';

	$stmt = $conn->prepare("insert into booking(Name, Email, Number, Destination,Reference,Country, Notes) values(?,?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssss", $Name, $Email, $Number, $Destination, $Reference, $Country, $Notes );
	$execval = $stmt->execute();
	echo"<h1 colour: blue>Booking Successful, Thank You!...</h1>";
	$stmt->close();
	$conn->close();
	
	echo"Redirecting back to Home in 5 seconds...";
	

	header("refresh: 5;url= http://localhost/Destination_Malawi/index.php");
	exit;

	

