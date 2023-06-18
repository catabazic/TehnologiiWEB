<?php
include("database.php");

$id_comanda = [];
$sql = "SELECT * FROM Comenzi WHERE Status IS NULL";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        $id_comanda[] = $row['ID'];
    }

    $products = [];
    foreach ($id_comanda as $id) {
        $sql = "SELECT p.Nume FROM comanda_produse cp
                INNER JOIN produse p ON cp.id_produs = p.Id
                WHERE cp.id_comanda = ?";
        $stmt2 = mysqli_prepare($conn, $sql);
        if ($stmt2) {
            mysqli_stmt_bind_param($stmt2, "i", $id);
            mysqli_stmt_execute($stmt2);
            $result = mysqli_stmt_get_result($stmt2);

            $comanda = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $comanda[] = $row['Nume'];
            }
            $products[] = $comanda;

            mysqli_stmt_close($stmt2);
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $response = array(
        "id_comanda" => $id_comanda,
        "products" => $products
    );

    echo json_encode($response);
} else {
    echo "Error in preparing statement: " . mysqli_error($conn);
}
?>
