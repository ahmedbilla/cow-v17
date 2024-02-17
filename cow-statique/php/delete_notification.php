<?php
// Connection credentials
$host = "localhost";
$reminder_health = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $reminder_health);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the record
    $query = "DELETE FROM reminder_health WHERE id = $id";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}

// Close the connection
mysqli_close($conn);

// Refresh the referring page
echo false;
