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
    <h1>AWS DON</h1>
    <?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo '<p>Buona Lettura ' . $_SESSION['email'] . '</p>';
    }
    ?>
    <h2>Premesse:</h2>
    <p>Per iniziare, installa Docker e Docker Compose utilizzando i seguenti comandi:</p>
    <code>sudo apt update</code>
    <code>sudo apt install -y docker.io</code>
    <code>sudo systemctl enable docker</code>
    <code>sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</code>
    <code>sudo chmod +x /usr/local/bin/docker-compose</code>

    <!-- Rimuovi il resto del codice PHP -->

</div>

<section class="wavy">
  <h1>A Cool Wavy Divider</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis neque volutpat, pharetra ipsum id, venenatis metus. In ac tincidunt ligula. Sed pulvinar elementum turpis, nec malesuada massa dictum quis. Praesent cursus mi quam, sed rhoncus ipsum tempor a. Proin nec massa et urna posuere vestibulum. Aliquam aliquam mauris id justo lobortis, a finibus justo faucibus. Proin et ligula maximus, mollis urna quis, malesuada dolor. Quisque lectus libero, consequat sed fermentum eu, tincidunt a elit. </p>
</section>

</body>
</html>
