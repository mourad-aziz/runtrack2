<?php
$servername = "localhost";
$username = "root";
$password = "polo1367";
$dbname = "jour09";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>Prénom</th><th>Nom</th><th>Naissance";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["prenom"]."</td><td>".$row["nom"]."</td><td>".$row["naissance"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>