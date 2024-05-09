<?php
require "connect/connect.php"; // Assicurati di avere il file di connessione

$sql = "SELECT * FROM utente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output dei dati di ogni riga
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Email: " . $row["email"]. " - Password: " . $row["password"]. "<br>";
    }
} else {
    echo "Nessun utente registrato.";
}
$conn->close();
?>
