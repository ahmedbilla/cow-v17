<?php
$months = $_POST["months"];
$years = $_POST["years"];
$amount_of_milk = $_POST["amount_of_milk"];
$price_of_milk = $_POST["price_of_milk"];
$note = $_POST["note"];
$id_cow = $_POST["id_cow"];





$host = "localhost";
$milk_production = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $milk_production
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO milk_production (months, years, amount_of_milk, price_of_milk, note, id_cow)
        VALUES (?, ?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}
mysqli_stmt_bind_param(
    $stmt,
    "ssdsss",
    $months,
    $years,
    $amount_of_milk,
    $price_of_milk,
    $note,
    $id_cow,
);

mysqli_stmt_execute($stmt);

header("Location: ../view cow information/Milk Production/milk_production.php?cowinformation=" . urlencode($id_cow));

exit;
?>
