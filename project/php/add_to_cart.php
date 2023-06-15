<?php
include("database.php");
// Retrieve the item details from the query parameters
$name = $_GET['name'];
session_start();

// Search for the client's ID
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

// Search for the product's ID
$sql = "SELECT * FROM Produse WHERE Nume = ?";
$stmt3 = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt3, "s", $name);
mysqli_stmt_execute($stmt3);
$result = mysqli_stmt_get_result($stmt3);
$row = mysqli_fetch_assoc($result);

// Add the requested product to the database
$sql = "INSERT INTO Comanda_produse (id_comanda, id_produs) VALUES (?, ?)";
$stmt2 = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt2, "ii", $insertedID, $row["ID"]);
mysqli_stmt_execute($stmt2);


header("Location: ../meniu.php");
exit();
// Close all statements and the database connection
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt2);
mysqli_stmt_close($stmt3);
mysqli_close($conn);

?>