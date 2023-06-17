<?php
    include "database.php";


    $query = "SELECT * FROM Mese";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        $json_data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $json_data[] = $row;
        }

        echo "<pre>";
        print_r($json_data);
        echo "</pre>";
    } else {
        echo "Error fetching data from the database.";
    }
    $entries = '';
    foreach ($json_data as $entry) {
        $id = $entry['id']; 
        $numar_locuri = $entry['numar_locuri']; 
        $ocupate = $entry['ocupate']; 
        
        $entries .= '
            <entry>
                <title>' . $id . '</title>
                <content>Numar locuri: ' . $numar_locuri . ', Ocupate: ' . $ocupate . '</content>
            </entry>';
    }

    // Construirea documentului Atom
    $atom_data = '<?xml version="1.0" encoding="UTF-8"?>
    <feed xmlns="http://www.w3.org/2005/Atom">
        <title>My Atom Feed</title>
        <link href="https://example.com/feed.xml" rel="self"/>
        <updated>' . date(DATE_ATOM) . '</updated>
        ' . $entries . '
    </feed>';
    $file_directory = 'json';
    $file_path = $file_directory . '/mese_atom.xml';

    // Create the directory if it doesn't exist
    if (!is_dir($file_directory)) {
        mkdir($file_directory, 0755, true);
    }

    // Scrierea datelor Atom în fișier
    $file_path = 'json/mese_atom.xml';
    $file_written = file_put_contents($file_path, $atom_data);

    // Verificarea dacă fișierul a fost scris cu succes
    if ($file_written !== false) {
        echo "Datele Atom au fost scrise în fișier cu succes.";
    } else {
        echo "Eroare la scrierea datelor Atom în fișier.";
    }

    header("Location: json/mese_atom.xml");
    exit(); 
?>
