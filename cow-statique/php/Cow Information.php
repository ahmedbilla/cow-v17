<?php

$id = $_POST["id"];
$Cow_Name = $_POST["Cow_Name"];
$Date_of_Birth = $_POST["Date_of_Birth"];
$Gender = $_POST["Gender"];
$Weight_kg = $_POST["Weight_kg"];
$Mother_of_the_Cow = $_POST["Mother_of_the_Cow"];
$Father_of_the_Cow = $_POST["Father_of_the_Cow"];
$Breed = $_POST["Breed"];
$Number_of_Births = $_POST["Number_of_Births"];
$Seller_Name = $_POST["Seller_Name"];
$Date_of_Purchase = $_POST["Date_of_Purchase"];



$host = "localhost";
$cow_information = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $cow_information
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO cow_information (id, Cow_Name, Date_of_Birth, Gender, Weight_kg, Mother_of_the_Cow, Father_of_the_Cow, Breed, Number_of_Births, Seller_Name, Date_of_Purchase)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}
mysqli_stmt_bind_param(
    $stmt,
    "sssssssssss",
    $id,
    $Cow_Name,
    $Date_of_Birth,
    $Gender,
    $Weight_kg,
    $Mother_of_the_Cow,
    $Father_of_the_Cow,
    $Breed,
    $Number_of_Births,
    $Seller_Name,
    $Date_of_Purchase,
);

mysqli_stmt_execute($stmt);

header("Location: ../index.php");
exit;
