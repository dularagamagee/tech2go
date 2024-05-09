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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - AWS PROJECT</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
    text-align: center;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: #e0e0e0;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #E1D9D1;
}
</style>
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form method="post">
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>
