<?php

$number_of_vactination = $_POST["number_of_vactination"];
$bull_name = $_POST["bull_name"];
$vactination_date = $_POST["vactination_date"];
$result = $_POST["result"];
$calf_name = $_POST["calf_name"];
$birth_date = $_POST["birth_date"];
$male_female = $_POST["male_female"];
$note = $_POST["note"];
$id_cow = $_POST["id_cow"];
$price = $_POST["price"];
$inseminator = $_POST["inseminator"];
$certificate_number = $_POST["certificate_number"];





$host = "localhost";
$vactination_information = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $vactination_information
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO vactination_information (number_of_vactination, bull_name, vactination_date, result, calf_name, birth_date, male_female, note, 	id_cow, price, inseminator, certificate_number)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}
mysqli_stmt_bind_param(
    $stmt,
    "ssssssssssss",
    $number_of_vactination,
    $bull_name,
    $vactination_date,
    $result,
    $calf_name,
    $birth_date,
    $male_female,
    $note,
    $id_cow,
    $price,
    $inseminator,
    $certificate_number,

);

mysqli_stmt_execute($stmt);

header("Location: ../view cow information/General_Information/index.php?cowinformation=" . urlencode($id_cow));



exit;
