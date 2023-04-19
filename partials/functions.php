<?php 
// questo file sarà soltanto un file di utility, ovvero
// ci fornirà degli strumenti che utilizzeremo in altri posti
// del nostro sito web

// funzioni
function salutaTutti() {
  // tutto il codice che verrà eseguito una volta richiamata la funzione 
  echo "Ciao a tutti!";
}

function salutaPersona($nome) {
  echo "Ciao {$nome}";
}

function getWordLength($word) {

  // restituisce la lunghezza della parola
  return strlen($word);

}


// le variabili in PHP dichiarate fuori da una funzione non sono accessibili al suo interno
// ovviamente, le variiabili interne di una funzione non sono accessibili all'esterno
// infatti per questa funzione dobbiamo passargli le variabili tramite gli argomenti

function moltiplicaNumeri($a, $b) {
  return $a * $b;
}


$nomeCompleto = "Gabriel Spanu";