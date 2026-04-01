<?php
// Include the database connection file
require_once 'db.php';

/**
 * Example of a simple query with error handling
 * We use the $conn variable from db.php
 */
$sql = "SELECT * FROM users LIMIT 5";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Process the data    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "User: " . $row['email'] . "<br>";
    }
} else {
    // Handle query-specific errors
    error_log("Query Error: " . mysqli_error($conn));
    echo "An error occurred while fetching data.";
}

// Close the connection at the end of the script
mysqli_close($conn);
?>