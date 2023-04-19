<?php 

// eliminiamo le variabili della sessione e la chiudiamo

session_start();

// // eliminiamo le variabili
session_unset();

// // chiudiamo la sessione
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Hai eseguito il logout;
<br>
  <a href="dashboard.php">torna alla dashboard</a>
  
</body>
</html>