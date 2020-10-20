<?php

# Define a página atual pela URL
$pagina = 'home';

if (isset ($_GET['i'])) {
    $pagina = addslashes($_GET['i']);
}

# Carrega o header.php
include 'views\header.php';
 
# Carrega a página escolhida pelo usuário
switch ($pagina) {
    case 'home':
        include 'views\home.php';
        break;
 
    default:
        include 'views\home.php';
        break;
}
 
# Carrega o footer.php
include 'views\footer.php';

?>