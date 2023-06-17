<?php
include 'database.php';

if (isset($_GET['seatNumber']) && isset($_GET['isChecked'])) {
    $seatNumber = $_GET['seatNumber'];
    $isChecked = $_GET['isChecked'];

    $sql = "SELECT * FROM Mese WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $seatNumber);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $ocupat = $row["ocupate"];

    if ($isChecked == "true") {
        $ocupat = $ocupat + 1;
    } else {
        $ocupat = $ocupat - 1;
    }

    $updateSql = "UPDATE Mese SET ocupate = ? WHERE id = ?";
    $stmt1 = mysqli_prepare($conn, $updateSql);
    mysqli_stmt_bind_param($stmt1, "ii", $ocupat, $seatNumber);
    mysqli_stmt_execute($stmt1);

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt1);
    mysqli_close($conn);
} else {
    echo "Invalid request";
}
//include "jsonData.php"

?>
