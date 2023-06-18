<?php
include("database.php");

if(isset($_POST))
{
    $data = json_decode(file_get_contents("php://input"));
    $id_command = $data->id_command;

    date_default_timezone_set('Europe/Bucharest');
    $dataCurenta = date("Y/m/d");
    $oraCurenta = date('H:i:s');
    $sql = "UPDATE comenzi SET Status = 'platit', Data = ?, Ora = ? WHERE ID = ?";
    $stmt3 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt3, "ssi", $dataCurenta, $oraCurenta, $id_comanda);
    mysqli_stmt_execute($stmt3);
    if (mysqli_stmt_affected_rows($stmt3) > 0) {
        echo json_encode("Actualizarea a fost efectuată cu succes!");
    } else {
        echo json_encode("Actualizarea nu a fost efectuată!");
    }

    mysqli_stmt_close($stmt3);
    mysqli_close($conn);

}
?>