<?php
// questa pagina registra l'utente
// e lo fa tornare alla dashboard

session_start();

$_SESSION['username'] = 'gabrielspany96';

// riporta l'utente alla dashboard
header('Location: ./dashboard.php');