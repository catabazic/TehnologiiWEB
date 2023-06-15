<?php
include ("database.php");
// Retrieve the item details from the query parameters
$name = $_GET['name'];

//cauta id-ul clientului
$sql = "SELECT * FROM Clienti WHERE referer=? and cookie_id=?";
$stmt = mysqli_prepare($conn, $sql);
$referer = $_SESSION['my_referer'];
$clientID = $_COOKIE['client_id'];
mysqli_stmt_bind_param($stmt, "ss", $referer, $clientID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$clientID = $row['ID'];

//adauga id-ul clientului in baza de date
$stmt1 = mysqli_prepare($conn, "INSERT INTO Comenzi (ID_Client) VALUES (?)");
mysqli_stmt_bind_param($stmt1, "i", $clientID);
mysqli_stmt_execute($stmt1);

$insertedID = mysqli_insert_id($conn);

//cauta id-ul produsului
$sql = "SELECT * FROM Produse WHERE Nume = ?";
$stmt3 = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt3, "s", $name);
mysqli_stmt_execute($stmt3);
$result = mysqli_stmt_get_result($stmt3);
$row = mysqli_fetch_assoc($result);


//adauga produsul cerut in baza de date
$sql = "INSERT INTO Comanda_produse (id_comanda,id_produs) values (?,?)";
$stmt2 = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt2, "ii", $insertedID, $row["ID"]);
mysqli_stmt_execute($stmt2);

if (mysqli_stmt_affected_rows($stmt1) > 0 && mysqli_stmt_affected_rows($stmt2) > 0) {
    // Item added to the database successfully
    header("Location: ../meniu.php"); // Replace "../success.php" with the relative path to the desired page
    exit();
} else {
    // Error occurred while adding the item to the database
    header("Location: ../meniu.php"); // Replace "../error.php" with the relative path to the desired page
    exit();
}

mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt1);
mysqli_stmt_close($stmt2);
mysqli_close($conn);
?>
