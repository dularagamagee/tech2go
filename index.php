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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 0 auto;
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Registration</h2>
    <form method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
