<?php
session_start(); // Avvia la sessione all'inizio del file
require "connect/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Esegui la query in modo sicuro utilizzando prepared statements
    $stmt = $conn->prepare("SELECT * FROM utente WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        $_SESSION['id_user'] = $user_data['id'];        
        $_SESSION['email'] = $user_data['email']; 
        header('location: test.php');
        exit(); // Termina lo script dopo il reindirizzamento
    } else {
        echo "Spiacente, le credenziali sono errate";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<title>Login - AWS PROJECT</title>
</head>
<body>
<form method="post">
<div class="container fade-in">
        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="text" name="email" class="input-field" placeholder="Email"required>
        </div>
        <div class="input-box">
            <input type="password" name="password" class="input-field" placeholder="Password" required>
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Accedi</label>
        </div>
    </div>
</form>
</body>
</html>
