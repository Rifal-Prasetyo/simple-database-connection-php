<?php
// Database configuration
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'nama_database_anda';

// Attempt to establish a connection
// The @ operator suppresses default warnings to handle them manually
$conn = @mysqli_connect($host, $username, $password, $dbname);

// Error Handling
if (!$conn) {
    /**
     * Log the error internally and show a user-friendly message
     * mysqli_connect_error() contains technical details
     */
    error_log("Connection failed: " . mysqli_connect_error());
    
    // Stop script execution if connection fails
    die("Internal Server Error: Could not connect to the database.");
} else {
    echo "Koneksi Database Berhasil:)";
}

// Set charset to avoid encoding issues
mysqli_set_charset($conn, "utf8mb4");
?>