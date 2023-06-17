<?php
    include "database.php";


    $query = "SELECT id, numar_locuri, ocupate FROM Mese";
    $result = $conn->query($query);

    // Construirea obiectului JSON
    $json_data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mesa = array(
                'id' => $row['id'],
                'numar_locuri' => $row['numar_locuri'],
                'ocupate' => $row['ocupate']
            );
            $json_data[] = $mesa;
        }
    }

    // Convertirea în format JSON
    $json_string = json_encode($json_data);

    // Write JSON data to a file
    $file_path = 'json/mese_json.json';
    $file_written = file_put_contents($file_path, $json_string);

    // Check if the file was written successfully
    if ($file_written !== false) {
        echo "JSON data written to the file successfully.";
    } else {
        echo "Failed to write JSON data to the file.";
    }
    mysqli_close($conn);
    header("Location: json/mese_json.json");
    exit(); 

?>