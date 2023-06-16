<?php
    include("database.php");

    $ocupat=0;

    for ($i = 1; $i <= 8; $i++) {
        $sql = "SELECT ocupate FROM Mese WHERE id = $i";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $ocupat = $ocupat + $row["ocupate"];
    }
    

    //echo $ocupat;
    
?>