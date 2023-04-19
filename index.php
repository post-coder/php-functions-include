<?php 

// importare questo file nel nostro file di layout
include './partials/functions.php';
// quando importiamo un file con include
// lo stiamo letteralmente includendo nel nostro file
// TUTTO il codice PHP verrà COPIATO e INCOLLATO in questo file

?>



<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Functions & Include</title>
</head>
<body>

  <h1>
    <?php salutaTutti() ?>
  </h1>

  <hr>

  <p>
    <?php salutaPersona('Christian') ?>
  </p>
  
  <hr>

  La lunghezza della parola "ornitorinco" è di <?php echo getWordLength('ornitorinco') ?> caratteri

  <hr>

  La moltiplicazione ha dato come risultato <?php echo moltiplicaNumeri(2,3) ?>

  <hr>

  Scritto da <?php echo $nomeCompleto ?>


  <a href="pagina.php">Vai alla pagina del layout</a> 
</body>
</html>