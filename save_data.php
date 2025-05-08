<?php
    $data = json_decode(file_get_contents("php://input"), true);
    $logfile = "log.html";
    $logEntry = "<p>Latitude: " . $data['latitude'] . " | Longitude: " . $data['longitude'] . "</p>\n";

    file_put_contents($logfile, $logEntry, FILE_APPEND);
    echo "Location logged successfully!";
?>
