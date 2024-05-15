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
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="progress">
  <span class="progress__txt"></span>
</div>
<main>
  <h1>AWS DON</h1>
  <?php
    if(isset($_SESSION['email'])) {
        echo '<p>Buona Lettura ' . $_SESSION['email'] . '</p>';
    }
    ?>
    <h2>PREMESSE</h2>
    <p>Per iniziare, installa Docker e Docker Compose utilizzando i seguenti comandi:</p>
    <code>sudo apt update</code>
    <code>sudo apt install -y docker.io</code>
    <code>sudo systemctl enable docker</code>
    <code>sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</code>
    <code>sudo chmod +x /usr/local/bin/docker-compose</code>
    <h2>Generazione del Certificato SSL:</h2>
    <p> Si crea una directory <code>ssl</code> all'interno della cartella docker-project e si genera il certificato SSL con i seguenti comandi:</p>
    <code>mkdir /ssl</code>
    <code>sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout key.pem -out cert.pem</code>
</main>
</body>
</html>
