<!-----------------------------------------------downlod db--------------------------------------------------------->
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'cow_farmer_ahmed_billa';

$outputFile = 'database_backup.sql';


if (isset($_POST['download'])) {

    $command = "mysqldump --host=$host --user=$username --password=$password $database > $outputFile";


    exec($command, $output, $resultCode);


    if ($resultCode === 0) {

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $outputFile . '"');
        readfile($outputFile);


        unlink($outputFile);
        exit();
    } else {

        echo "Error executing command:<br>";
        echo "Command: $command<br>";
        echo "Result Code: $resultCode<br>";
        echo "Output: " . implode("<br>", $output) . "<br>";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Database</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button type="submit" name="download">Download Database</button>
    </form>

</body>

</html>