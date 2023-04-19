<?php

include_once './partials/functions.php';

// faccio partire la sessione per memorizzare delle informazioni tra le pagine
// se non faccio partire la sessione non ho accesso alle sue variabili
session_start();


?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina di prova</title>
</head>
<body>
  <?php include './partials/template/navbar.php' ?>


  <main>
    <h1>
      Pagina 1
    </h1> 

    <h2>
      <?php salutaTutti() ?>
    </h2>

    contenuto del sito <br>
    <a href="pagina2.php">Vai alla pagina 2</a>

    <br>

    <a href="dashboard.php">Pagina della dashboard</a>
  </main>
  
  <?php include './partials/template/footer.php' ?>
</body>
</html>