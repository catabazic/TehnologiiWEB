<?php
include("database.php");

$clientsID = [];
$sql = "SELECT ID FROM Comenzi WHERE Status IS NULL";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($result)) {
    $i = $row['ID'];
    $clientsID[] = $i;
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

$response = array(
    "id_comanda"=> $id_comanda,
    "id_client"=> $clientID,
    "products"=> $products
);

echo json_encode($response);


?>
