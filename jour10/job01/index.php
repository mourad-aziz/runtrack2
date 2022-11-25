<?php
$servername = "localhost";
$username = "root";
$password = "polo1367";
$dbname = "jour09";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT prenom, nom, naissance, sexe, email FROM etudiants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th><tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["prenom"]."</td><td>".$row["nom"]."</td><td>".$row["naissance"]."</td><td>".$row["sexe"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>