<?php
require "connect/connect.php";

// Se il form è stato inviato
if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query per inserire i dati nel database
    $sql = "INSERT INTO utente (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registrazione avvenuta con successo!</p>";
        // Reindirizza a mostra.php dopo la registrazione
        header("location: mostra.php");
        exit();
    } else {
        echo "Errore durante la registrazione: " . $conn->error;
    }
}

// Chiudi la connessione
$conn->close();
?>