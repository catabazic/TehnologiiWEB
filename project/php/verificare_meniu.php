<?php
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
if (isset($_GET['add_to_cart'])) {
    // Get the product name from the URL
    $url = $_SERVER['REQUEST_URI'];
    $product = basename($url);

    // Check if the product exists in the menu
    if (!isset($meniu[$product])) {
        echo "Produsul nu există în meniu.";
        exit();
    }

    // Get the selected option from the URL
    $selectedOption = null;
    foreach ($meniu[$product]['optiuni'] as $option) {
        if (isset($_GET[$option['nume']])) {
            $selectedOption = $option;
            break;
        }
    }

    // Check if a valid option is selected
    if (!$selectedOption) {
        echo "Nu s-a selectat o opțiune validă.";
        exit();
    }

    // Check if the product is in stock
    $productName = $meniu[$product]['nume'];
    $sql = "SELECT ID, Cantitate_in_stoc FROM Produse WHERE Nume = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $productName);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $productId = $row["ID"];
    $quantityInStock = $row["Cantitate_in_stoc"];

    if ($quantityInStock <= 0) {
        echo "Produsul nu este în stoc.";
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../meniu.php");
        exit();
    }

    // Update the quantity in stock
    $newQuantity = $quantityInStock - 1;
    $sql = "UPDATE Produse SET Cantitate_in_stoc = ? WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $newQuantity, $productId);
    mysqli_stmt_execute($stmt);

    // Get the client ID
    $referer = isset($_SESSION['my_referer']) ? $_SESSION['my_referer'] : '';
    $clientId = isset($_COOKIE['client_id']) ? $_COOKIE['client_id'] : '';

    $sql = "SELECT ID FROM Clienti WHERE Referer = ? AND ClientID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $referer, $clientId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $clientId = $row ? $row["ID"] : null;

    // Get or create the order ID
    $orderId = null;
    if ($clientId) {
        $sql = "SELECT ID FROM Comenzi WHERE ClientID = ? AND Stare = 'deschis'";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $clientId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $orderId = $row ? $row["ID"] : null;
    }

    if (!$orderId) {
        $sql = "INSERT INTO Comenzi (ClientID) VALUES (?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $clientId);
        mysqli_stmt_execute($stmt);
        $orderId = mysqli_insert_id($conn);
    }

    // Insert the product and order IDs into the Comanda_produse table
    $sql = "INSERT INTO Comanda_produse (ComandaID, ProdusID) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $orderId, $productId);
    mysqli_stmt_execute($stmt);

    // Show success message and redirect to the menu page
    echo "Produsul a fost adăugat în coș.";
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../meniu.php");
    exit();
}
?>
