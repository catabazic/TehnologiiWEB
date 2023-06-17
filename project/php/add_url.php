<script src="../project/js/toCart.js"></script>
<?php
include "verificare_meniu.php";
include "sinonime.php";

$uri = $_SERVER['REQUEST_URI'];
$uriParts = parse_url($uri);
$path = $uriParts['path'];

$comanda = array('/vreau', '/comanda', '/doresc', '/cer');

$potiComanda=array('/suc','/ceva/rece','rece','ceva/cald','cald','desert','ceva/dulce','ceva/bun','ceai','cafea');

$nuPotiComanda = array('/alcool', '/wisky', '/tuica', '/vodka', '/rom', '/mojito');

$caiCunoscute = array('/meniu.php', '/evenimente.php','/index.php','/cos.php', '/rezervari.php','/despre.php', '/ajutor.php');



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
}  elseif (strpos($path, '/alcool') !== false) {
    redirectToErrorPage();
}
elseif (strpos($path, '/wisky') !== false) {
    redirectToErrorPage();
}
elseif (strpos($path, '/tuica') !== false) {
    redirectToErrorPage();
} 
elseif (strpos($path, '/vodka') !== false) {
    redirectToErrorPage();
}
elseif (strpos($path, '/rom') !== false) {
    redirectToErrorPage();
} 
elseif (strpos($path, '/mojito') !== false) {
    redirectToErrorPage();
} else{
    $pageFound = false;
    foreach ($caiCunoscute as $cai) {
        if (strpos($path, $cai) !== false) {
            $pageFound = true;
            break;
        }
    }
    if (!$pageFound) {
        http_response_code(404);
        echo "Eroare 404: Pagina nu a fost gasita!";
        exit();
    }

}

function array_contains_any_keyword($path, $keywords) {
    foreach ($keywords as $keyword) {
        if (strpos($path, $keyword) !== false) {
            return true;
        }
    }
    return false;
}

function redirectToErrorPage() {
    header("Location: ../error.php?message=" . urlencode("Eroare 403: Produs interzis!"));
    exit();
}

?>
