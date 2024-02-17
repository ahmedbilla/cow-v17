<?php
$medcine_id = $_POST["medcine_id"];
$Messages_for_health = $_POST["Message_for_healt"];
$id_cow_send = $_POST["id_cow_send"];

$host = "localhost";
$reminder_health = "cow_farmer_ahmed_billa";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $reminder_health);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO reminder_health (medcine_id, Message_for_healt, id_cow_send) VALUES (?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

$count = count($medcine_id);

for ($i = 0; $i < $count; $i++) {
    $medcine_id_temp = $medcine_id[$i];
    $Messages_for_health_temp = $Messages_for_health[$i];
    $id_cow_send_temp = $id_cow_send[$i];

    mysqli_stmt_bind_param(
        $stmt,
        "isi", // Adjust data type specifiers based on your database schema
        $medcine_id_temp,
        $Messages_for_health_temp,
        $id_cow_send_temp
    );

    mysqli_stmt_execute($stmt);
}

header("Location: ../view cow information/Health notebook/health_notbook.php?cowinformation=" . urlencode(implode(",", $id_cow_send)));
exit;
?>
