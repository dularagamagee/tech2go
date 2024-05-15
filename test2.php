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
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde labore maxime nostrum rerum cumque, soluta nisi impedit, ratione dolorem pariatur voluptates modi itaque. Possimus ullam cumque voluptas explicabo rem mollitia, accusantium alias perferendis eum cupiditate, officiis eius corporis fugit fuga animi quod sequi sit odio neque? Suscipit atque harum facilis eius perspiciatis ab, officia ducimus mollitia! Quod fuga et ipsa autem aspernatur officiis minus iure veritatis asperiores nam illo facere sequi dolorum dolor ipsum pariatur, odio iste ex eum ad explicabo magni architecto? Corporis laboriosam incidunt veniam? Consequuntur cum mollitia dicta beatae pariatur corrupti nesciunt praesentium blanditiis numquam sapiente delectus ea nobis eaque nisi quasi quod similique repellendus fugiat id, minima eos temporibus, repellat error illum. Enim dolorem voluptatibus beatae voluptatum nemo sunt explicabo autem illo et placeat doloremque laborum alias facilis, nostrum officia neque, nisi cupiditate. Magnam mollitia a error qui ex ipsa earum repellendus nobis nostrum? Iure obcaecati, quidem inventore dicta natus id magnam. Eius id quas rem dignissimos commodi voluptatibus velit enim amet illo asperiores quos, expedita, sapiente veniam a porro facere aut error cumque, quisquam in provident! Nobis beatae officia rerum commodi repudiandae mollitia quas, autem tenetur! Eaque facilis error fuga a consequatur saepe tenetur ut!</p>
</main>
</body>
</html>
