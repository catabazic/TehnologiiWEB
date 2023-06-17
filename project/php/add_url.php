<?php
include "verificare_meniu.php";
include "sinonime.php";

$uri = $_SERVER['REQUEST_URI'];
$uriParts = parse_url($uri);
$path = $uriParts['path'];

$comanda = array('/vreau', '/comanda', '/doresc', '/cer');

$potiComanda=array('/suc','/ceva/rece','rece','ceva/cald','cald','desert','ceva/dulce','ceva/bun','ceai','cafea');



if (strpos($path, '/intrare') !== false) {
    header("Location: ../index.php");
    exit();
} elseif (strpos($path, '.php/meniu') !== false) {
    header("Location: ../meniu.php");
    exit();
} elseif (strpos($path, '/preferinta/ceai/') !== false) {
    echo "ceva";
    // Logica pentru ruta /preferinta/ceai/ 
} elseif (strpos($path, '/preferinta/ceai') !== false && isset($_GET['de'])) {
    echo "ceva";
    // Logica pentru ruta /preferinta/ceai?de=tei
} elseif (array_contains_any_keyword($path, $comanda)) {
    if (searchWordInArrays($path, $produse)) {
        $array = arrayIn($path, $produse);
        echo '<script src="js/toCart.js">';
        echo 'addCart(\'' . $array[0] . '\');';
        echo '</script>';
    }
    if(strpos($path, "meniu.php") !== false){
        header("Location: ../../meniu.php");
        exit();
    }elseif(strpos($path, "index.php") !== false){
        header("Location: ../../index.php");
        exit();
    }elseif(strpos($path, "evenimente.php") !== false){
        header("Location: ../../evenimente.php");
        exit();
    }elseif(strpos($path, "despre.php") !== false){
        header("Location: ../../despre.php");
        exit();
    }elseif(strpos($path, "ajutor.php") !== false){
        // header("Location: ../../ajutor.php");
        // exit();
    }elseif(strpos($path, "rezervari.php") !== false){
        header("Location: ../../rezervari.php");
        exit();
    }elseif(strpos($path, "cos.php") !== false){
        // header("Location: ../../cos.php");
        // exit();
    }else{
        header("Location: ../../cos.php");
        exit();
    }






    // Logica pentru ruta /vreau/suc
} elseif (strpos($path, '/comanda/ceai/') !== false && isset( $_GET['fara'])) {
    echo "ceva";
    // Logica pentru ruta /comanda/ceai/?fara=zahar
} elseif (strpos($path, '/comanda/zacusca') !== false) {
    echo "ceva";
    // Logica pentru ruta /comanda/zacusca
} elseif (strpos($path, '/nota') !== false) {
    header("Location: ../cos.php");
    exit();
} elseif (strpos($path, '/iesire') !== false) {
    header("Location: ");
    exit();
} else {
    echo "ceva";
    // Logica pentru alte rute necunoscute
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