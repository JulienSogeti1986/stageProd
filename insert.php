 <?php
$servername = "localhost";
$username = "root";
$password = "root";
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

