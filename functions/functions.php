<?php
// Establish Connection to Database
function connect() {
    static $conn;
    // Check if connection already exists
    if ($conn === NULL) {
        // Attempt to connect to the database
        $conn = mysqli_connect('localhost:3307', 'root', 'saichinnu', 'socialnetwork');
        
        // Check for connection errors
        if (mysqli_connect_errno()) {
            // Handle connection error
            die("Database connection failed: " . mysqli_connect_error());
        }
    }
    return $conn;
}
?>
