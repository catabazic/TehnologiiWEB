<?php
    $name = $_GET['name'];
    include "add_cart.php";

    header("Location: ../meniu.php");
    exit();
?>