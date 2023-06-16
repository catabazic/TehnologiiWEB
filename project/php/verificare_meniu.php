<?php
include 'meniu.php';

//Obtin URL-ul solicitat
$url = $_SERVER['REQUEST_URI'];

$meniu = array(
    "ceai" => array(
        "nume" => "ceai",
        "optiuni" => array(
            array(
                "nume" => "Sweet Cherry",
                "pret" => 15
            ),
            array(
                "nume" => "Rooibos Delight",
                "pret" => 15
            ),
            array(
                "nume" => "Cranberry Vanilla",
                "pret" => 15
            ),
            array(
                "nume" => "Sweet Apple",
                "pret" => 15
            ),
            array(
                "nume" => "Tropical Fruit",
                "pret" => 15
            ),
            array(
                "nume" => "Summer Passion",
                "pret" => 15
            ),
            array(
                "nume" => "Raspberries & Orchids",
                "pret" => 15
            ),
            array(
                "nume" => "Sancha Lemon",
                "pret" => 15
            ),
        )
    ),
    "cafea" => array(
        "nume" => "cafea",
        "optiuni" => array(
            array(
                "nume" => "Espresso Dublu",
                "pret" => 8
            ),
            array(
                "nume" => "Espresso Macchiato",
                "pret" => 7
            ),
            array(
                "nume" => "Americano",
                "pret" => 7
            ),
            array(
                "nume" => "Flat White",
                "pret" => 10
            ),
            array(
                "nume" => "Cappucino",
                "pret" => 9
            ),
            array(
                "nume" => "Caffe Latte",
                "pret" => 10
            ),
            array(
                "nume" => "Cortado",
                "pret" => 11
            ),
            array(
                "nume" => "Ice Coffe",
                "pret" => 14
            ),
        )
    ),
    "ceva-rece" => array(
        "nume" => "ceva-rece",
        "optiuni" => array(
            array(
                "nume" => "Red Cocktail",
                "pret" => 20
            ),
            array(
                "nume" => "Green Cocktail",
                "pret" => 20
            ),
            array(
                "nume" => "Cranberry Cocktail",
                "pret" => 20
            ),
            array(
                "nume" => "Summer Cocktail",
                "pret" => 20
            ),
            array(
                "nume" => "Fresh de portocale",
                "pret" => 20
            ),
            array(
                "nume" => "Limonadă simplă",
                "pret" => 12
            ),
            array(
                "nume" => "Limonadă cu mentă",
                "pret" => 15
            ),
            array(
                "nume" => "Limonadă cu fructe",
                "pret" => 17
            ),
        )
    ),
    "desert" => array(
        "nume" => "desert",
        "optiuni" => array(
            array(
                "nume" => "Croissant cu unt",
                "pret" => 8
            ),
            array(
                "nume" => "Cookies cu ciocolata",
                "pret" => 8
            ),
            array(
                "nume" => "Banana Bread",
                "pret" => 10
            ),
            array(
                "nume" => "Lava Cake cu înghțată de vanilie",
                "pret" => 15
            ),
            array(
                "nume" => "Tort de ciocolată",
                "pret" => 18
            ),
            array(
                "nume" => "Cheesecake cu caramel",
                "pret" => 18
            ),
            array(
                "nume" => "Cheesecake cu căpșuni",
                "pret" => 18
            ),
            array(
                "nume" => "Pancakes cu ciocolată și banane",
                "pret" => 20
            ),
        )
    ),

);
?>
