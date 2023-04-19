<?php 
// se non faccio partire la sessione non ho accesso alle sue variabili
session_start();


?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>


  <?php include './partials/template/navbar.php' ?>
  
  <h1>Dashboard dell'utente</h1>

  <?php 
  if(!empty($_SESSION['username'])) {
    echo "<h2>Benvenuto {$_SESSION['username']}</h2>";
  } else {
    echo "<a href='login.php'>esegui il login</a>";
  }

  ?>
  <hr>
  <?php
  if(!empty($_SESSION['username'])) {
    echo "<a href='logout.php'>Esegui il logout</a>";
  }
  
  ?>

</body>
</html>