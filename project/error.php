<?php
if (isset($_GET['message'])) {
    $errorMessage = $_GET['message'];
    echo '<script>alert("' . $errorMessage . '");</script>';
    //header("Location: ../index.php");
}
?>
