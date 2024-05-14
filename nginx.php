<?php
session_start();
// Avvia la sessione all'inizio dello script
// Verifica se l'utente è loggato, altrimenti reindirizza alla pagina di accesso
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
<premises>

    <p>Crea una cartella chiamata <code>docker-project</code> e al suo interno crea un file <code>docker-compose.yml</code> con il seguente contenuto:</p>
    <pre><code>version: "3.9"
services:
  nginx:
    image: nginx:latest
    container_name: nginx-container
    ports:
      - 80:80</code></pre>

    <h3>Avvia Nginx:</h3>
    <p>Avvia il container Nginx con il comando:</p>
    <code>sudo docker-compose up -d</code>
</premises>

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
