<?php
// Connection credentials
$host = "localhost";
$cow_information = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $cow_information);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the record
    $query = "DELETE FROM cow_information WHERE id = $id";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "ID not provided";
}

// Close the connection
mysqli_close($conn);

// Refresh the referring page
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
<script>
    function deleteRecord(id) {
        if (confirm('Are you sure you want to delete this record?')) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'delet_vacctination.php?id=' + id, true);
            xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Handle the response, perhaps update the table or show a message
                    console.log('Record deleted');
                    // Refresh data here
                }
            };
            xhr.send();
        }
    }
</script>