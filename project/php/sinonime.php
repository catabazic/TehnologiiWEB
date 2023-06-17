<?php

$SweetCherry=array("Sweet%20Cherry","/Sweet/Cherry","/sweet/cherry","/cherry","cirese","ceai/cirese");
$RoibsDelight=array("Rooibos%20Delight","/Rooibos/Delight","/rooibos/delight","rooibos","roibos","ceai/roibos");
$CranberryVanilla=array("Cranberry%20Vanilla","/Cranberry/Vanilla","/cranberry/vanilla","cranberry","merisoare","tea/cranberry","ceai/merisoare");
$SweetApple=array("Sweet%20Apple","/sweet/apple","/Sweet/Apple","apple","mere","ceai/mere");
$TropicalFruit=array("Tropical%20Fruit","/Tropical/Fruit","/tropical/fruit","fructe","tropical","ceai/tropical");
$SummerPassion=array("Summer%20Passion","/Summer/Passion","/summer/psssion","vara","exotic","ceai/passion");
$RaspberrieOrchids=array("Raspberries%20&%20Orchids","/Raspberries/Orchids","/raspberries/orchids","rasspberries","/orchids","zmeura","/ceai/zmeura");
$SanchaLemon=array("Sancha%20Lemon","/Sancha/Lemon","/sancha/lemon","/verde","ceai/verde","/lamaie","/ceai/lamaie");

$EspressoDublu=array("Espresso%20Dublu","/Espresso/Dublu","/espresso/dublu","espresso","/dublu","cofee","cafea");
$EspressoMacchiato=array("Espresso%20Macchiato","/Espresso/Macchiato","/espresso/macchiato","/macchiato");
$Americano=array("Americano","/americano");
$FlatWhite=array("Flat%20White","/Flat/White","flat/white");
$Cappucino=array("Cappucino","/cappucino");
$CaffeLatte=array("Caffe%20Latte","/Caffe/Latte","/caffe/latte","caffe");
$Cortado=array("Cortado","cartado");
$IceCoffee=array("Ice%20Coffe","/Ice/Coffe","/ice/coffe","/iced/coffe","cafea/rece");

$RedCocktail=array("Red%20Cocktail","/Red/Cocktail","/red/cocktail","cocktail");
$GreenCocktail=array("Green%20Cocktail","Green/Cocktail","green/cocktail");
$CranberryCocktail=array("Cranberry%20Cocktail","Cranberry/Cocktail","cranberry/cocktail");
$SummerCochtail=array("Summer%20Cocktail","Summer/Cocktail","summer/cocktail",);
$FreshPortocale=array("Fresh%20de%20portocale","Fresh/de/portocale","fresh/de/portocale","fresh","suc","suc/portocale","fresh/portocale");
$LimonadaSimpla=array("Limonada%20simpla","Limonada/simpla","limonada/simpla","limonada");
$LimonadaMenta=array("Limonada%20cu%20menta","limonada/cu/menta","limonada/menta");
$LimonadaFructe=array("Limonada%20cu%20fructe","limonada/cu/fructe","limonada/fructe");

$CroistantUnt=array("Croissant%20cu%20unt","croissant/cu/unt","croissant/unt", "croissant");
$CookiesCiocolata=array("Cookies%20cu%20ciocolata","cookies/cu/ciocolata","cookies/ciocolata","cookies");
$BananaBread=array("Banana%20Bread","banana/bread","bread");
$LavaCake=array("Lava%20Cake%20cu%20inghetata%20de%20vanilie","lava/cake/cu/inghetata/de/vanilie","lava/cake","inghetata");
$TortCiocolata=array("Tort%20de%20ciocolata","tort/de/ciocolata","tort","tort/ciocolata");
$CheesecakeCatamel=array("Cheesecake%20cu%20caramel","cheesecake/cu/caramel","cheesecake/caramel","cheesecake");
$CheesecakeCapsuni=array("Cheesecake%20cu%20capsuni","cheesecake/cu/capsuni","cheesecake/capsuni");
$Pancakes=array("Pancakes%20cu%20ciocolata%20si%20banane","pancakes/cu/ciocolata/si/banane","pancakes","pancakes/cu/ciocolata","pancakes/cu/banana");

$produse = array(
    $TropicalFruit,
    $SummerPassion,
    $RaspberrieOrchids,
    $SanchaLemon,
    $EspressoDublu,
    $EspressoMacchiato,
    $Americano,
    $FlatWhite,
    $Cappucino,
    $CaffeLatte,
    $Cortado,
    $IceCoffee,
    $RedCocktail,
    $GreenCocktail,
    $CranberryCocktail,
    $SummerCochtail,
    $FreshPortocale,
    $LimonadaSimpla,
    $LimonadaMenta,
    $LimonadaFructe,
    $CroistantUnt,
    $CookiesCiocolata,
    $BananaBread,
    $LavaCake,
    $TortCiocolata,
    $CheesecakeCatamel,
    $CheesecakeCapsuni,
    $Pancakes,
    $SweetCherry,
    $RoibsDelight,
    $CranberryVanilla,
    $SweetApple
);

function searchWordInArrays($word,$arrays) {
    foreach ($arrays as $array) {
        foreach($array as $key){
            if (strpos($word, $key) !== false) {
                return true;
            }
        }
    }
    return false;
}

function arrayIn($word,$arrays) {
    foreach ($arrays as $array) {
        foreach($array as $key){
            if (strpos($word, $key) !== false) {
                return $array;
            }
        }
    }
    return null;
}

?>