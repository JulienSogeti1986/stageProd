 <?php
$servername = "192.168.0.23";
$username = "julien";
$password = "kilokilo";
$dbname = "stage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO stagiaire (nom, prenom) VALUES ('X','Y')";
$result = $conn->query($sql);

}
$conn->close();
?>

