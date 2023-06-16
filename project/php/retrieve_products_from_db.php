<?php
include("database.php");

session_start();
$referer = $_SESSION['my_referer'];
$clientID = $_COOKIE['client_id'];

// Search for the client's ID based on the referer and client ID
$sql = "SELECT ID FROM Clienti WHERE referer=? AND cookie_id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $referer, $clientID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $clientID = $row['ID'];
} else {

echo "A apărut o eroare. Vă rugăm să reveniți mai târziu.";

    exit();
}

$sql = "SELECT ID FROM Comenzi where ID_Client = ?";
$stmt1 = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt1, "i", $clientID);
mysqli_stmt_execute($stmt1);
$result = mysqli_stmt_get_result($stmt1);
$row = mysqli_fetch_assoc($result);
if($row)
{
    $id_comanda = $row['ID'];
}

$sql = "SELECT cp.id_produs, p.Nume, p.Descriere, p.Pret FROM comanda_produse cp
        INNER JOIN produse p ON cp.id_produs = p.Id
        WHERE cp.id_comanda = ?";
$stmt2 = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt2, "i", $id_comanda);
mysqli_stmt_execute($stmt2);
$result = mysqli_stmt_get_result($stmt2);

if(mysqli_num_rows($result) > 0)
{
    $products = array();
    while ($row = mysqli_fetch_assoc($result)) {
     $products[] = $row; 
    }   
}
else {
    $products = [];
}

mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt1);
mysqli_stmt_close($stmt2);
mysqli_close($conn);

echo json_encode($products);


?>
