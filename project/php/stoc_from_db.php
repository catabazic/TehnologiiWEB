<?php
include("database.php");

session_start();

// Selectez toate produsele din baza de date
$sql = "SELECT ID, Cantitate_in_stoc, Nume FROM Produse";
$result = mysqli_query($conn, $sql);

$stoc = array();

if (mysqli_num_rows($result) > 0) {
    // Parcurg rezultatele și afișez starea de disponibilitate pentru fiecare produs
    while ($row = mysqli_fetch_assoc($result)) {
        $nume = $row["Nume"];
        $cantitate = $row["Cantitate_in_stoc"];
        $stoc[$nume] = $cantitate;

        if ($cantitate > 0) {
            echo "Produsul \"$nume\"  este în stoc.<br>";
        } else {
            echo "Produsul \"$nume\"  nu este în stoc.<br>";
        }
    }
} else {
    echo "Nu există produse în baza de date.";
}

mysqli_close($conn);

// Pasăm rezultatul ca JSON pentru a putea fi accesat în JavaScript
echo json_encode($stoc);
?>
