<?php
include("database.php");
session_start();

// Verifică dacă sesiunea este deja începută
if (isset($_SESSION['my_referer'])) {
    $referer = $_SESSION['my_referer'];
    //echo "Sesiunea este deja începută. Referer: " . $referer;
    $clientID = $_COOKIE['client_id'];
    //echo "Clientul este recunoscut după cookie. Client ID: " . $clientID;
} else {
    // Sesiunea nu a fost încă începută, salvează refererul și începe sesiunea
    if (isset($_SERVER['HTTP_REFERER'])) {
        $referer = $_SERVER['HTTP_REFERER'];
        $_SESSION['my_referer'] = $referer;
        //echo "Sesiunea a fost începută. Referer: " . $referer;

        $clientID = uniqid(); 
        setcookie("client_id", $clientID, time() + (86400 * 160), "/");

        $sql = "INSERT INTO clienti (referer, cookie_id) VALUES ('$referer', '$clientID')";
        try {
            mysqli_query($conn, $sql);
            //echo "Am adaugat in bd";
        } catch (mysqli_sql_exception $e) {
            //echo "Could not register user: " . $e->getMessage();
        }
    } else {
        $referer = "nu este setat";
        $_SESSION['my_referer'] = $referer;
        //echo "Sesiunea a fost începută. Referer: " . $referer;

        $clientID = uniqid(); 
        setcookie("client_id", $clientID, time() + (86400 * 160), "/");

        $sql = "INSERT INTO clienti (referer, cookie_id) VALUES ('$referer', '$clientID')";
        try {
            mysqli_query($conn, $sql);
            //echo "Am adaugat in bd";
        } catch (mysqli_sql_exception $e) {
            //echo "Could not register user: " . $e->getMessage();
        }
    }
}
mysqli_close($conn);
?>
