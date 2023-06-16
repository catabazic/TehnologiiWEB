<?php
include("database.php");

if(isset($_POST))
{
    $data = json_decode(file_get_contents("php://input"));
   
    $productID = $data->idProdus;
    $clientID = $data->idClient;
    $comandaID = $data->idComanda;
    //produsul este "returnat", il pun inapoi in stoc
    $sql = "UPDATE Produse SET Cantitate_in_stoc = Cantitate_in_stoc + 1 WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $productID);
    mysqli_stmt_execute($stmt);
    // if (mysqli_stmt_affected_rows($stmt) > 0) {
    //     echo json_encode("Cantitatea produsului a fost actualizată cu succes!");
    // } else {
    //     echo  json_encode("Eroare la actualizarea cantității produsului!");
    // }

    //sterg produsul din cosul clientului
    $sql = "DELETE FROM Comanda_produse WHERE id_comanda = ? and id_produs = ? LIMIT 1";
    $stmt1 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt1, "ii",$comandaID, $productID);
    mysqli_stmt_execute($stmt1);
    if (mysqli_stmt_affected_rows($stmt1) > 0) {
        echo json_encode("Produsul  a fost sters!");

        } else {
           echo json_encode( "Produsul nu a fost sters!");

        }
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt1);
    mysqli_close($conn);

}

?>