<script src="../project/js/toCart.js"></script>
<?php
include "verificare_meniu.php";
include "sinonime.php";

$uri = $_SERVER['REQUEST_URI'];
$uriParts = parse_url($uri);
$path = $uriParts['path'];

$comanda = array('/vreau', '/comanda', '/doresc', '/cer', '/preferinta');

$potiComanda=array('/suc','/ceva/rece','rece','ceva/cald','cald','desert','ceva/dulce','ceva/bun','ceai','cafea');

$nuPotiComanda = array('/alcool', '/wisky', '/tuica', '/vodka', '/rom', '/mojito');

$caiCunoscute = array('/meniu.php', '/evenimente.php','/index.php','/cos.php', '/rezervari.php','/despre.php', '/ajutor.php');

if (strpos($path, '/intrare') !== false || strpos($path, '/acasa') !== false) {
    header("Location: ../index.php");
    exit();
} elseif (strpos($path, '.php/meniu') !== false) {
    header("Location: ../meniu.php");
    exit();
} elseif (array_contains_any_keyword($path, $comanda)) {
    if(isset($_GET['de'])){
        $pathDe=$_GET['de'];
        if(strpos($path,"ceai")!==false){
            if($pathDe=="cirese"){
                $name = $SweetCherry[0] ;
                include "add_to_cart.php";
            }elseif($pathDe=="roibos"){
                $name = $RoibsDelight[0] ;
                include "add_to_cart.php";
            }elseif($pathDe=="merisore"){
                $name = $CranberryVanilla[0] ;
                include "add_to_cart.php";
            }elseif($pathDe=="mar"){
                $name = $SweetApple[0] ;
                include "add_to_cart.php";
            }elseif($pathDe=="frcuteTropicale"){
                $name = $TropicalFruit[0] ;
                include "add_to_cart.php";
            }elseif($pathDe=="vara"){
                $name = $SummerPassion[0] ;
                include "add_to_cart.php";
            }elseif($pathDe=="zmeura"){
                $name = $RaspberrieOrchids[0] ;
                include "add_to_cart.php";
            }elseif($pathDe=="lamaie"){
                $name = $SanchaLemon[0] ;
                include "add_to_cart.php";
            }
        }
    }
    if (searchWordInArrays($path, $produse)) {
        $array = arrayIn($path, $produse);
        $name = $array[0] ;
        include "add_to_cart.php";
    } 
    if(isset($_GET['cu'])){
        $pathCu=$_GET['cu'];
        if(searchWordInArrays($pathCu, $produse)){
            $array = arrayIn($pathCu, $produse);
            $name = $array[0] ;
            include "add_to_cart.php";
        }
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
    if ((strpos($path, '/alcool') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/whiskey') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/tuica') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/tigari') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/palinca') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/vodka') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/bere') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/vin') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/martini') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/iarba') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/droguri') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produs interzis!");
    } 
    if ((strpos($path, '/fericire') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Produsul este inaccesibil studentilor!");
    } 
    if ((strpos($path, '/cinci') !== false)) {
        $redirectPage = "../../error.php?message=" . urlencode("Eroare 403: Haideti, va rugam");
    } 
    header("Location: $redirectPage");
    exit();
} elseif (strpos($path, '/nota') !== false) {
    header("Location: ../cos.php");
    exit();
} elseif((strpos($path, '/alcool') !== false)||(strpos($path, '/wisky') !== false)||(strpos($path, '/tuica') !== false)||(strpos($path, '/vodka') !== false)||(strpos($path, '/rom') !== false)||(strpos($path, '/mojito') !== false)) { 
    header("Location: ../error.php?message=" . urlencode("Eroare 403: Produs interzis!"));
   // http_response_code(403);
   // echo "Eroare 403: produs interzis";
   //exit();
}elseif (strpos($path, '.php/ajutor') !== false) {
    header("Location: ../ajutor.php");
    exit();
} elseif (strpos($path, '.php/despre') !== false) {
    header("Location: ../despre.php");
    exit();
} elseif (strpos($path, '/iesire') !== false) {
    echo htmlspecialchars("<script>window.close();</script>");
    header("Location: ../");
    exit();
} elseif (strpos($path, '.php/evenimente') !== false) {
    header("Location: ../evenimente.php");
    exit();
} else{
    $pageFound = false;
    foreach ($caiCunoscute as $cai) {
        if (strpos($path, $cai) !== false) {
            $pageFound = true;
            break;
        }
    }
    // if (!$pageFound) {
    //     header("Location: ../error.php?message=" . urlencode("Eroare 404: Pagina nu a fost gasita!"));
    //     // http_response_code(404);
    //     // echo "Eroare 404: Pagina nu a fost gasita!";
    //     exit();
    // }

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