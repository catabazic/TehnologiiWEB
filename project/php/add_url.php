<script src="../project/js/toCart.js"></script>
<?php
include "verificare_meniu.php";
include "sinonime.php";

$uri = $_SERVER['REQUEST_URI'];
$uriParts = parse_url($uri);
$path = $uriParts['path'];

$comanda = array('/vreau', '/comanda', '/doresc', '/cer');
$potiComanda = array('/suc', '/ceva/rece', 'rece', 'ceva/cald', 'cald', 'desert', 'ceva/dulce', 'ceva/bun', 'ceai', 'cafea');

if (strpos($path, '/intrare') !== false) {
    header("Location: ../index.php");
    exit();
} elseif (strpos($path, '.php/meniu') !== false) {
    header("Location: ../meniu.php");
    exit();
} elseif (strpos($path, '/preferinta/ceai/') !== false) {
    echo "ceva";
    // Logic for route /preferinta/ceai/ 
} elseif (strpos($path, '/preferinta/ceai') !== false && isset($_GET['de'])) {
    echo "ceva";
    // Logic for route /preferinta/ceai?de=tei
} elseif (array_contains_any_keyword($path, $comanda)) {

    if (searchWordInArrays($path, $produse)) {
        $array = arrayIn($path, $produse);
        $name = $array[0] ;
        include "add_to_cart.php";
    }


    $redirectPage = '';
    if (strpos($path, "meniu.php") !== false) {
        $redirectPage = "../../meniu.php";
    } elseif (strpos($path, "index.php") !== false) {
        $redirectPage = "../../index.php";
    } elseif (strpos($path, "evenimente.php") !== false) {
        $redirectPage = "../../evenimente.php";
    } elseif (strpos($path, "despre.php") !== false) {
        $redirectPage = "../../despre.php";
    } elseif (strpos($path, "ajutor.php") !== false) {
        $redirectPage = "../../ajutor.php";
    } elseif (strpos($path, "rezervari.php") !== false) {
        $redirectPage = "../../rezervari.php";
    } elseif (strpos($path, "cos.php") !== false) {
        $redirectPage = "../../cos.php";
    } else {
        $redirectPage = "../../cos.php";
    }

    header("Location: $redirectPage");
    exit();
} elseif (strpos($path, '/comanda/ceai/') !== false && isset($_GET['fara'])) {
    echo "ceva";
    // Logic for route /comanda/ceai/?fara=zahar
} elseif (strpos($path, '/comanda/zacusca') !== false) {
    echo "ceva";
    // Logic for route /comanda/zacusca
} elseif (strpos($path, '/nota') !== false) {
    header("Location: ../cos.php");
    exit();
} elseif (strpos($path, '/iesire') !== false) {
    header("Location: ../");
    exit();
} else {
    echo "ceva";
    // Logic for other unknown routes
}

function array_contains_any_keyword($path, $keywords) {
    foreach ($keywords as $keyword) {
        if (strpos($path, $keyword) !== false) {
            return true;
        }
    }
    return false;
}
?>
