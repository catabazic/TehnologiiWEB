<?php
session_start();
include("database.php");

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

// Verificați dacă există un parametru 'add_to_cart' în URL
if(isset($_GET['add_to_cart'])){
    $url = $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    $segments = explode('/', $path);
    $product = end($segments);

    // Verificăm dacă produsul există în meniu
    if (!isset($meniu[$product])) {
        echo "Produsul nu există în meniu.";
        exit();
    }

    // Obținem detaliile produsului din meniu
    $productDetails = $meniu[$product];
    $productName = $productDetails['nume'];
    $productOptions = $productDetails['optiuni'];

     // Căutați opțiunile selectate în URL
     $selectedOption = null;
    foreach ($productOptions as $option) {
         if (isset($_GET[$option['nume']])) {
             $selectedOption = $option;
             break;
         }
    }

    // Verificați dacă s-a selectat o opțiune validă
    if (!$selectedOption) {
        echo "Nu s-a selectat o opțiune validă.";
        exit();
    }

    //Caut ID-ul produsului
    $sql = "SELECT * FROM Produse WHERE Nume = ?";
    $stmt3 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt3, "s", $productName);
    mysqli_stmt_execute($stmt3);
    $result = mysqli_stmt_get_result($stmt3);
    $row = mysqli_fetch_assoc($result);
    $ProductId = $row["ID"];
    $cantitate = $row["Cantitate_in_stoc"];

    //Verific daca mai exista produsul in stoc
    if($cantitate == 0) {
        echo "Nu e in stoc";
        mysqli_stmt_close($stmt3);
        mysqli_close($conn);
        header("Location: ../meniu.php");
        exit();
    } else {
        echo "e in stoc";
        $newCantitate = $cantitate-1; // Assign the new value here
        $sql = "UPDATE Produse SET Cantitate_in_stoc = ? WHERE ID = ?";
        $stmt5 = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt5, "ii", $newCantitate, $ProductId);
        mysqli_stmt_execute($stmt5);
    }

    //Caut ID-ul clientului
    $sql = "SELECT * FROM Clienti WHERE referer=? AND cookie_id=?";
    $stmt = mysqli_prepare($conn, $sql);
    $referer = $_SESSION['my_referer'];
    $clientID = $_COOKIE['client_id'];
    mysqli_stmt_bind_param($stmt, "ss", $referer, $clientID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    $clientID = $row['ID'];
    echo "id client...." . $clientID;

    $sql = "SELECT * FROM `Comenzi` WHERE ID_Client=? AND Status IS NULL LIMIT 0, 25";
    $stmt4 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt4, "i", $clientID);
    mysqli_stmt_execute($stmt4);
    $result = mysqli_stmt_get_result($stmt4);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $insertedID = $row['ID'];
    } else {
        // Add the client's ID to the database
        $stmt1 = mysqli_prepare($conn, "INSERT INTO Comenzi (ID_Client) VALUES (?)");
        mysqli_stmt_bind_param($stmt1, "i", $clientID);
        mysqli_stmt_execute($stmt1);

        $insertedID = mysqli_insert_id($conn);
        mysqli_stmt_close($stmt1);
    }

    mysqli_stmt_close($stmt4);

    // Adaug produsul in baza de date
    $sql = "INSERT INTO Comanda_produse (id_comanda, id_produs) VALUES (?, ?)";
    $stmt2 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt2, "ii", $insertedID, $ProductId);
    mysqli_stmt_execute($stmt2);

    echo "Produsul \"$productName\" a fost adăugat în coș.";

    // Close all statements and the database connection
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);
    mysqli_stmt_close($stmt3);
    mysqli_close($conn);

    header("Location: ../meniu.php");
    exit();
}

?>
