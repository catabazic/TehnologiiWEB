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

$sql = "SELECT ID FROM Comenzi where ID_Client = ? AND Status IS NULL";
$stmt1 = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt1, "i", $clientID);
mysqli_stmt_execute($stmt1);
$result = mysqli_stmt_get_result($stmt1);
$row = mysqli_fetch_assoc($result);
if($row)
{
    $id_comanda = $row['ID'];
}


if(isset($_POST))
{
    // $sql = "DELETE FROM Comanda_produse WHERE id_comanda = ?";
    // $stmt2 = mysqli_prepare($conn, $sql);
    // mysqli_stmt_bind_param($stmt2, "i",$id_comanda);
    // mysqli_stmt_execute($stmt2);

    $sql = "UPDATE comenzi SET Status = 'platit' WHERE ID = ? AND id_client = ? ";
    $stmt3 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt3, "ii",$id_comanda, $clientID);
    mysqli_stmt_execute($stmt3);
    if (mysqli_stmt_affected_rows($stmt3) > 0) {
        echo json_encode("Produsele au fost sterse!");

        } else {
           echo json_encode( "Produsele nu au fost sterse!");

        }

    // mysqli_stmt_close($stmt2);
    mysqli_stmt_close($stmt3);
}
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt1);
mysqli_close($conn);
?>