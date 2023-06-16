<?php
    include "database.php";

    if (isset($_GET['setTable']) && isset($_GET['setSeat'])) {
        $table = $_GET['setTable'];
        $seat = $_GET['setSeat'];
    
        $sql = "SELECT * FROM Mese WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $table);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $ocupat = $row["ocupate"];
    
        if ($ocupat>=$seat) {
            echo "true";
        } else {
            echo "false";
        }

    } else {
        echo "Invalid request";
    }
?>