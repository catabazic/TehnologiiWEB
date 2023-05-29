<?php
// Verificați dacă câmpul 'Referer' este setat
if(isset($_SERVER['HTTP_REFERER'])) {
    // Obțineți adresa URL a paginii de referință
    $referer = $_SERVER['HTTP_REFERER'];
    
    echo($referer);
} else {
    echo "Referer is not set.";
}
?>
