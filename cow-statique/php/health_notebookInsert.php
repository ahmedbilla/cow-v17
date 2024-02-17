<?php
$medicineName = $_POST["medicineName"];
$dateOfUse = $_POST["dateOfUse"];
$reasonForUse = $_POST["reasonForUse"];
$quantity = $_POST["quantity"];
$alertName = $_POST["alertName"];
$reminderDate = $_POST["reminderDate"];
$id_cow = $_POST["id_cow"];






$host = "localhost";
$health_notebook = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $health_notebook
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO health_notebook (medicineName, dateOfUse, reasonForUse, quantity, alertName, reminderDate, id_cow)
        VALUES (?, ?, ?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}
mysqli_stmt_bind_param(
    $stmt,
    "sssdsss",
    $medicineName,
    $dateOfUse,
    $reasonForUse,
    $quantity,
    $alertName,
    $reminderDate,
    $id_cow,
);

mysqli_stmt_execute($stmt);

header("Location: ../view cow information/Health notebook/health_notbook.php?cowinformation=" . urlencode($id_cow));

exit;
