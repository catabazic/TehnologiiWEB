<?php
    include("database.php");
    $name=urldecode($name);
    echo $name;
    
    // Search for the product's ID
    $sql = "SELECT * FROM Produse WHERE Nume = ?";
    $stmt3 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt3, "s", $name);
    mysqli_stmt_execute($stmt3);
    $result = mysqli_stmt_get_result($stmt3);
    $row = mysqli_fetch_assoc($result);
    $ProductId = $row["ID"];
    $cantitate = $row["Cantitate_in_stoc"];
    
    
    //verificam daca mai exista produsul in stoc, in caz ca nu, nu il vom adauga
    if($cantitate == 0) {
        echo "Nu e in stoc";
        mysqli_stmt_close($stmt3);
        mysqli_close($conn);
        exit();
    } else {
        echo "e in stoc";
        $newCantitate = $cantitate-1; // Assign the new value here
        $sql = "UPDATE Produse SET Cantitate_in_stoc = ? WHERE ID = ?";
        $stmt5 = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt5, "ii", $newCantitate, $ProductId);
        mysqli_stmt_execute($stmt5);
    }
    
    
    // Search for the client's ID
    $sql = "SELECT * FROM Clienti WHERE referer=? AND cookie_id=?";
    $stmt = mysqli_prepare($conn, $sql);
    $referer = $_SESSION['my_referer'];
    $clientID = $_COOKIE['client_id'];
    mysqli_stmt_bind_param($stmt, "ss", $referer, $clientID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    
    $clientID = $row['ID'];
    echo "id client...." . $clientID;
    
    $sql = "SELECT * FROM `Comenzi` WHERE ID_Client=? AND Status IS NULL LIMIT 0, 25";
    $stmt4 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt4, "i", $clientID);
    mysqli_stmt_execute($stmt4);
    $result = mysqli_stmt_get_result($stmt4);
    $row = mysqli_fetch_assoc($result);
    
    if ($row) {
        $insertedID = $row['ID'];
    } else {
        // Add the client's ID to the database
        $stmt1 = mysqli_prepare($conn, "INSERT INTO Comenzi (ID_Client) VALUES (?)");
        mysqli_stmt_bind_param($stmt1, "i", $clientID);
        mysqli_stmt_execute($stmt1);
    
        $insertedID = mysqli_insert_id($conn);
        mysqli_stmt_close($stmt1);
    }
    
    mysqli_stmt_close($stmt4);
    
    
    // Add the requested product to the database
    $sql = "INSERT INTO Comanda_produse (id_comanda, id_produs) VALUES (?, ?)";
    $stmt2 = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt2, "ii", $insertedID, $ProductId);
    mysqli_stmt_execute($stmt2);
    
    
    // Close all statements and the database connection
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);
    mysqli_stmt_close($stmt3);
    mysqli_close($conn);
?>