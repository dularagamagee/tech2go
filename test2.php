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
    <h2>Generazione del Certificato SSL</h2>
    <p> Si crea una directory <code>ssl</code> all'interno della cartella docker-project e si genera il certificato SSL con i seguenti comandi:</p>
    <code>mkdir /ssl</code>
    <code>sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout key.pem -out cert.pem</code>
    <h2>DOCKER-COMPOSE.YML</h2>
    <p> All'interno della cartella docker-project, creiamo il file denominato docker-compose.yml</p>
    <p>che ha all'interno, file di confifurazione che contiene informazioni, come la definizione di servizi, configutazione di rete e volumi necessari per far comunicare i container tra loro. All'interno del file docker-compose.yml andremo ad inserire i seguenti comandi:</p>
    <code>version: "3.9"
services:
  nginx:
    image: nginx:latest
    container_name: nginx-container
    ports:
      - 80:80
      - 443:443
    volumes:
      - ./ssl:/etc/nginx/certs
      - ./nginx/default.conf:/etc/nginx/conf.d/default.conf
      - ./php_code/:/var/www/html/

  php:
    build: ./php_code/
    expose:
      - 9000
    volumes:
      - ./php_code/:/var/www/html/

  db:
    image: mariadb
    volumes:
      - mysql-data:/var/lib/mysql
    environment:
      MYSQL_ROOT_PASSWORD: mariadb
      MYSQL_DATABASE: mysite

volumes:
  mysql-data:
</code>

<h2>PHP -> GITHUB</h2>
<p>Per caricare la repository di github, dobbiamo prima di tutto creare una cartella denominata php_code, all'interno della cartella docker-project</p>
<p>Successivamente bisognerà clonare tramite il comando git clone, la repository all'interno della cartella php_code</p>
<code>git clone https://github.com/dularagamagee/tech2go.git ~/docker-project/php_code/</code>

<h2>PHP -> DOCKERFILE</h2>
<p>Sempre all'interno della cartella php_code, andremo ad inserire il documento Dockerfile</p>
<p>Questo Dockerfile configura un'immagine Docker basata su PHP 7.0 FPM, installando e abilitando le estensioni MySQLi e PDO MySQL per consentire connessioni a database MySQL. È ideale per eseguire applicazioni PHP che richiedono queste estensioni per interagire con MySQL.</p>
</main>
</body>
</html>
