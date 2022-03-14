
<?php 

    // INCLUDO FILE DATABASE - ARRAY
    require __DIR__ . '/database.php';

    // LO RENDO COMPRENSIBILE A JS
    header('Content-Type: application/json');
   
    // STAMPO IN FORMATO JSON
    echo json_encode($database);

?>