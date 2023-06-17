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

    header("Location: $redirectPage");
    exit();
} elseif (strpos($path, '/nota') !== false) {
    header("Location: ../cos.php");
    exit();
} elseif (strpos($path, '.php/ajutor') !== false) {
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
    header("Location: ../evenimente");
    exit();
} elseif(strpos($path, '/alcool') !== false) { {
     header("Location: ../error.php?message=" . urlencode("Eroare 403: Produs interzis!"));
    // http_response_code(403);
    // echo "Eroare 403: produs interzis";
    exit();

    }
}else{
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
