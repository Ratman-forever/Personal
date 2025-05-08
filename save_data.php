<?php
    $data = json_decode(file_get_contents("php://input"), true);
    $logfile = "log.html";
    $logEntry = "<p>IP: " . $data['ip'] . " | Location: " . $data['location'] . "</p>\n";

    file_put_contents($logfile, $logEntry, FILE_APPEND);
    echo "Logged successfully!";
?>