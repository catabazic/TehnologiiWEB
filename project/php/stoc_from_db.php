<?php
include("database.php");

session_start();

mysqli_set_charset($conn, 'utf8');

$sql = "SELECT ID, Tip, Cantitate_in_stoc, Nume, Descriere, Pret FROM Produse";
$result = mysqli_query($conn, $sql);

$stoc = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nume = $row["Nume"];
        $tip = $row["Tip"];
        $descriere = $row["Descriere"];
        $pret = $row["Pret"];
        $cantitate = $row["Cantitate_in_stoc"];

        $stoc[$nume] = array(
            'descriere' => $descriere,
            'tip' => $tip,
            'pret' => $pret,
            'inStoc' => ($cantitate > 0)
        );
    }
} else {
    echo "Nu există produse în baza de date.";
}

mysqli_close($conn);

echo json_encode($stoc, JSON_UNESCAPED_UNICODE);
?>
