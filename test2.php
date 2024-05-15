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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
        <button type="submit" name="logout">Logout</button>
    </form>
    <h2>PREMESSE</h2>
    <p>Per iniziare, installa Docker e Docker Compose utilizzando i seguenti comandi:</p>
    <code>sudo apt update</code>
    <code>sudo apt install -y docker.io</code>
    <code>sudo systemctl enable docker</code>
    <code>sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</code>
    <code>sudo chmod +x /usr/local/bin/docker-compose</code>
    <h2>GENERAZIONE DEL CERTIFICATO SSL</h2>
    <p> Si crea una directory ssl all'interno della cartella docker-project e si genera il certificato SSL con i seguenti comandi:</p>
    <code>mkdir /ssl</code>
    <code>sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout key.pem -out cert.pem</code>
    <h2>DOCKER-COMPOSE.YML</h2>
    <p> All'interno della cartella docker-project, creiamo il file denominato docker-compose.yml</p>
    <p>che ha all'interno, file di confifurazione che contiene informazioni, come la definizione di servizi, configutazione di rete e volumi necessari per far comunicare i container tra loro, in questo caso intendiamo MARIADB, NGINX e PHP. All'interno del file docker-compose.yml andremo ad inserire i seguenti comandi:</p>
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
<code>FROM php:7.0-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli</code>



<h2>NGINX</h2>
<p>Sempre all'interno della cartella docker-project, andremo a creare una cartella denominato nginx, che ci servira per aggiungere le configurazioni del nostro web-server, mediante la creazione del file default.conf, ed inseguito, aggiungendoci questa parte di codice:</p>
<code>server {
    listen 80 default_server;
    return 301 https://$host$request_uri;
}

server {
    listen 443 ssl default_server;
    include /etc/nginx/mime.types;
    root /var/www/html;
    index index.html index.php;

    charset utf-8;

    ssl_certificate /etc/nginx/certs/cert.pem;
    ssl_certificate_key /etc/nginx/certs/key.pem;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.css {
      add_header  Content-Type    text/css;
    }
    location ~ \.js {
      add_header  Content-Type    application/x-javascript;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt { access_log off; log_not_found off; }

    access_log off;
    error_log /var/log/nginx/error.log error;

    sendfile off;

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass php:9000;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_read_timeout 300;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_intercept_errors off;
        fastcgi_buffer_size 16k;
        fastcgi_buffers 4 16k;
    }

    location ~ /\.ht {
        deny all;
    }
}</code>

<p>In seguito andremo ad aggiungere il Dockerdile, dove aggiungeremo le regole seguenti:</p>
<code>FROM nginx
COPY ./default.conf /etc/nginx/conf.d/default.conf</code>


<h2>AVVIAMENTO CONTAINER</h2>
<p>Ora tramite il comando seguente, riusciremo ad avviare tutti i container, ovverò MariaDB, NGINX e PHP</p>
<code>sudo docker-compose up -d</code>

<h2>CREAZIONE DEL DB -> MARIADB</h2>
<p>Per accedere al container MariaDB, lo si può fare tramite il comando:</p>
<code>sudo docker exec -it docker-project-db-1 /bin/sh</code>
<p>Per accedere a MariaDB, si userà il comando:</p>
    <code>mariadb -u root -pmariadb</code>
<p>In seguito, l'utente sarà libero di creare quello che vuole, in base alle sue necessità</p>

<h2>Push e Pull del Codice:</h2>
    <p>NB: Pushare il codice dalla tua macchina locale al repository GitHub. Nell'istanza AWS, si dovrà eseguire il pull del codice nella cartella <code>php_code</code> con il comando:</p>
    <code>git pull</code>
</main>
</body>
</html>
