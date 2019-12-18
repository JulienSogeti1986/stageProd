 <?php
$servername = "192.168.0.23";
$username = "julien";
$password = "kilokilo";
$dbname = "stage";

$Xnom = $_POST['nom'];
$Xprenom = $_POST['prenom'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO stagiaire (nom, prenom) VALUES ('$Xnom','$Xprenom')";
$result = $conn->query($sql);

}
$conn->close();
?>

