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


<?php
require "connect/connect.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM utente WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    echo "L'utente utilizzato non è registrato";
} else {
    $sql = "SELECT * FROM utente WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $user_data = $result->fetch_assoc();
        $_SESSION['id_user'] = $user_data['id'];        
        $_SESSION['nickname'] = $user_data['nickname']; 
        header('location: test.html');
    } else {
        echo "Spiacente le credenziali sono errate";
    }
}
$conn->close();
?>