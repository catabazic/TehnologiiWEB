<?php
include("database.php");

session_start();
$referer = $_SESSION['my_referer'];
$clientID = $_COOKIE['client_id'];

if (isset($_POST)) {
    // Caută ID-ul clientului bazat pe referer și client ID
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

    $sql = "SELECT ID FROM Comenzi WHERE ID_Client = ? AND Status IS NULL";
    $stmt1 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt1, "i", $clientID);
    mysqli_stmt_execute($stmt1);
    $result = mysqli_stmt_get_result($stmt1);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $id_comanda = $row['ID'];
    }

    date_default_timezone_set('Europe/Bucharest');
    $dataCurenta = date("Y/m/d");
    $oraCurenta = date('H:i:s');
    $sql = "UPDATE comenzi SET Status = 'platit', Data = ?, Ora = ? WHERE ID = ? AND id_client = ?";
    $stmt3 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt3, "ssii", $dataCurenta, $oraCurenta, $id_comanda, $clientID);
    mysqli_stmt_execute($stmt3);
    if (mysqli_stmt_affected_rows($stmt3) > 0) {
        echo json_encode("Actualizarea a fost efectuată cu succes!");
    } else {
        echo json_encode("Actualizarea nu a fost efectuată!");
    }

    mysqli_stmt_close($stmt3);
}
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt1);
mysqli_close($conn);
?>
