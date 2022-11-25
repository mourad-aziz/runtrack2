<?php
//SELECT COUNT(*) FROM jour09.etudiants;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) FROM etudiants;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>Nombre étudiants</th><tr>";
    while($row = $result->fetch_row()) {

        echo "<tr><td>" . $row[0] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

