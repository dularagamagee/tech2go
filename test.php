<?php
// Avvia la sessione all'inizio dello script
session_start();
// Verifica se l'utente Ã¨ loggato, altrimenti reindirizza alla pagina di accesso
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

require "connect/connect.php";
// Logout se richiesto
if(isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWS PROJECT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wavy">
    <h1>AWS DON</h1>
    <?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo '<p>Buona Lettura ' . $_SESSION['email'] . '</p>';
    }
    ?>
    <h2>Premesse:</h2>
    <p2>Per iniziare, installa Docker e Docker Compose utilizzando i seguenti comandi:
    <p2>sudo apt update</p2>
    <p2>sudo apt install -y docker.io</p2>
    <p2>sudo systemctl enable docker</p2>
    <p2>sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</p2>
    <p2>sudo chmod +x /usr/local/bin/docker-compose</p2>
    <!-- Rimuovi il resto del codice PHP -->
</section>
</body>
</html>
