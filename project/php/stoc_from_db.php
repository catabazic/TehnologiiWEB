<?php
include("database.php");

session_start();

// Setează setul de caractere pentru conexiunea MySQL
mysqli_set_charset($conn, 'utf8');

// Selectez toate produsele din baza de date
$sql = "SELECT ID, Cantitate_in_stoc, Nume, Descriere, Pret FROM Produse";
$result = mysqli_query($conn, $sql);

$stoc = array();

if (mysqli_num_rows($result) > 0) {
    // Parcurg rezultatele și adaug informațiile fiecărui produs în $stoc
    while ($row = mysqli_fetch_assoc($result)) {
        $nume = $row["Nume"];
        $descriere = $row["Descriere"];
        $pret = $row["Pret"];
        $cantitate = $row["Cantitate_in_stoc"];

        $stoc[$nume] = array(
            'descriere' => $descriere,
            'pret' => $pret,
            'inStoc' => ($cantitate > 0)
        );

        if ($cantitate > 0) {
            echo "Produsul \"$nume\" este în stoc. Descriere: $descriere, Preț: $pret.<br>";
        } else {
            echo "Produsul \"$nume\" nu este în stoc. Descriere: $descriere, Preț: $pret.<br>";
        }
    }
} else {
    echo "Nu există produse în baza de date.";
}

mysqli_close($conn);

// Pasăm rezultatul ca JSON pentru a putea fi accesat în JavaScript
echo json_encode($stoc, JSON_UNESCAPED_UNICODE);


?>
