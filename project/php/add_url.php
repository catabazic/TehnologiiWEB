<?php
echo $_SERVER['REQUEST_URI'];

$uriParts = parse_url($_SERVER['REQUEST_URI']);
$path = $uriParts['path'];
echo "  ".$path;
// Ruta pentru /intrare
if ($_SERVER['REQUEST_URI'] === '/intrare') {
    header("Location: ../meniu.php");
    exit();
}

// Ruta pentru /meniu
if ($_SERVER['REQUEST_URI'] === '/meniu') {
    echo 'Aici este meniul nostru.';
}

// Ruta pentru /preferinta/ceai/
if ($_SERVER['REQUEST_URI'] === '/preferinta/ceai/') {
    echo 'Ați selectat preferința pentru ceai.';
}

// Ruta pentru /preferinta/ceai?de=tei
if (strpos($_SERVER['REQUEST_URI'], '/preferinta/ceai') === 0 && isset($_GET['de'])) {
    $de = $_GET['de'];
    echo "Ați selectat preferința pentru ceai de $de.";
}

// Ruta pentru /vreau/suc
if ($_SERVER['REQUEST_URI'] === '/vreau/suc') {
    echo 'Ați solicitat un suc.';
}

// Ruta pentru /comanda/ceai/?fara=zahar
if (strpos($_SERVER['REQUEST_URI'], '/comanda/ceai') === 0 && isset($_GET['fara'])) {
    $fara = $_GET['fara'];
    echo "Ați comandat un ceai fără $fara.";
}

// Ruta pentru /comanda/zacusca
if ($_SERVER['REQUEST_URI'] === '/comanda/zacusca') {
    echo 'Ați comandat zacuscă.';
}

// Ruta pentru /nota
if ($_SERVER['REQUEST_URI'] === '/nota') {
    echo 'Vă rugăm să evaluați experiența dvs.';
}

// Ruta pentru /iesire
if ($_SERVER['REQUEST_URI'] === '/iesire') {
    echo 'Vă mulțumim și vă mai așteptăm!';
}

?>