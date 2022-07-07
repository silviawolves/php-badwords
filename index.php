<?php

$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
$censored = $_GET('censored')

?>

<p><?php echo $paragraph ?></p>
<h5>Il paragrafo contiene <?php echo strlen($paragraph) ?> caratteri.</h5>




<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. X
Stampare a schermo il paragrafo e la sua lunghezza. X
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->