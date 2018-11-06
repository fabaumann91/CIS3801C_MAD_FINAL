<?php 
//Allow Headers 
header('Access-Control-Allow-Origin: *');

$servername = "localhost:3306";
 
$username = "your_username";
$password = "your_password";
$dbname = "gbparking"; 

// Create connection .
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
 
// Check connection 
if ($conn->connect_error) 
	echo "Error: Unexpected connection error. Please retry the operation.";
else 
{
	$result = $conn->query("SELECT * FROM `parking_status` WHERE `date` >= CURRENT_DATE() ORDER BY `date` ASC LIMIT 1");
 
	if (($result != 0) && ($result->num_rows > 0))
	{	
		echo json_encode($result->fetch_assoc());
	}
	$conn->close();
}
?>
