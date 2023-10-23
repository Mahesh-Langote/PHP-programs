<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: " . $message;
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        echo "Logging to database: " . $message;
    }
}

$fileLogger = new FileLogger();
$fileLogger->log("An error occurred.");

echo "<br>";

$dbLogger = new DatabaseLogger();
$dbLogger->log("An error occurred.");
?>
