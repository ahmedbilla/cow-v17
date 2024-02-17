<?php

$id_cow = $_POST["id_cow"];
$cow_name = $_POST["cow_name"];
$certificateNumber = $_POST["certificateNumber"];
$iaDate = $_POST["iaDate"];
$inseminator = $_POST["inseminator"];
$bullName = $_POST["bullName"];
$ord = $_POST["ord"];
$price = $_POST["price"];




$host = "localhost";
$ia_details = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $ia_details
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO ia_details (id_cow, cow_name, certificateNumber, iaDate, inseminator, bullName, ord, price)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}
mysqli_stmt_bind_param(
    $stmt,
    "ssssssss",
    $id_cow,
    $cow_name,
    $certificateNumber,
    $iaDate,
    $inseminator,
    $bullName,
    $ord,
    $price,
);

mysqli_stmt_execute($stmt);

header("Location: ../index.php");
exit;
