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
<div class="container">
    <h1>        AWS DON</h1>
    <?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo '<p>Buona Lettura ' . $_SESSION['email'] . '</p>';
    }
    ?>


    <h3>      Premesse:</h3>
    <p2>Per iniziare, installa Docker e Docker Compose utilizzando i seguenti comandi:</p2>
    <code>sudo apt update</code>
    <code>sudo apt install -y docker.io</code>
    <code>sudo systemctl enable docker</code>
    <code>sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</code>
    <code>sudo chmod +x /usr/local/bin/docker-compose</code>

    <!-- Rimuovi il resto del codice PHP -->

</div>



<article>
  <h2>AWS DON</h2>
  <ol>
  <li><del><a href="premesse.php">Premesse</a></del></li>
    <li><del>Nginx</del></li>
    <li><del>Certificato</del></li>
    <li><del>Proxy</del></li>
    <li><del>Php</del></li>
    <li><del>Dockerfile</del></li>
    <li><del>Avvio Container</del></li>
    <li><del>MariaDB</del></li>
    <li><del>Push&Pull</del></li>
    <li>Http -> Https</li>
  </ol>
</article>


</body>
</html>
