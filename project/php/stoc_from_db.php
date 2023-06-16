<?php
include("database.php");

session_start();

// Selectez toate produsele din baza de date
$sql = "SELECT ID, Cantitate_in_stoc, Nume FROM Produse";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Parcurg rezultatele și afișez starea de disponibilitate pentru fiecare produs
    while ($row = mysqli_fetch_assoc($result)) {
        $productId = $row["ID"];
        $cantitate = $row["Cantitate_in_stoc"];
        $nume = $row["Nume"];

        if ($cantitate > 0) {
            echo "Produsul \"$nume\" cu ID-ul $productId este în stoc.<br>";
        } else {
            echo "Produsul \"$nume\" cu ID-ul $productId nu este în stoc.<br>";
        }
    }
} else {
    echo "Nu există produse în baza de date.";
}

mysqli_close($conn);
?>
