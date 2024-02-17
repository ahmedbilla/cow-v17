<?php
$host = "localhost";
$database = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}


$medicineId = isset($_POST['medicineId']) ? $_POST['medicineId'] : null;

if ($medicineId !== null) {
    $query = "SELECT COUNT(*) as count FROM reminder_health WHERE medcine_id = ?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $medicineId);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    $response = ['exists' => ($row['count'] > 0)];
    echo json_encode($response);

    mysqli_stmt_close($stmt);
} else {
    $response = ['exists' => false];
    echo json_encode($response);
}

mysqli_close($conn);
