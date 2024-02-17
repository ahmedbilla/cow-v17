<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="icon" href="img/logo/cow-removebg.png">
    <title>Calves</title>
    <!-------------------------------------------------------style of the table--------------------------------------------------->
</head>
<style>
    table {
        width: 95%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
    }

    th,
    td {
        padding: 12px;
        color: #6f6b7d;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }

    th {
        background-color: #dcdcdc;
        color: #536878;
    }

    .title_Ia {
        font-family: 'Your Preferred Font', sans-serif;
        /* Choose a suitable font */
        font-size: 24px;
        /* Adjust the font size as needed */
        color: #3366cc;
        /* Choose a color that complements your overall color scheme */
        text-align: center;
        /* Center the text if desired */
        text-transform: capitalize;
        /* Capitalize the first letter of each word */
        /* Additional styling if needed */
        margin-top: 40px;
    }
</style>

<body style="background-color: #f8f7fa;">
    <div class="container">
        <!-- Navigation Section -->
        <?php include('../IncludeTheFile/sideBarAllCow.php'); ?>
        <!-- Main Section -->
        <div class="main">
            <?php include('../IncludeTheFile/notification_bar.php'); ?>
            <?php include('../IncludeTheFile/profile.php'); ?>
        </div>
        <Div style="display: flex; justify-content: start; margin-left: auto; margin-right: auto; width: 93%; margin-top: 45px; font-family: 30px;">
            <h4 class="TitleLocation" style="color: #A5A3AE; font-family: Arial, Tahoma, Geneva, Verdana, sans-serif;">
                <span>Cow Statistics/</span> <span style="color: #5D596C;">Insemination</span>
            </h4>
        </Div>
        <h3 class="title_Ia">Inseminated Cows</h3>
        <?php
        $host = "localhost";
        $database = "cow_farmer_ahmed_billa";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($host, $username, $password, $database);

        if (mysqli_connect_errno()) {
            die("Connection error: " . mysqli_connect_error());
        }

        $query = "SELECT id, id_cow, cow_name, certificateNumber, iaDate, inseminator, bullName, ord, price FROM ia_details";
        $result = mysqli_query($conn, $query);

        if ($result) {
        ?>
            <table>
                <thead>

                    <tr>

                        <th>ID Cow</th>
                        <th>Cow Name</th>
                        <th>Certificate Number</th>
                        <th>IA Date</th>
                        <th>Inseminator</th>
                        <th>Bull Name</th>
                        <th>Ord</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?= $row['id_cow'] ?></td>
                            <td><?= $row['cow_name'] ?></td>
                            <td><?= $row['certificateNumber'] ?></td>
                            <td><?= $row['iaDate'] ?></td>
                            <td><?= $row['inseminator'] ?></td>
                            <td><?= $row['bullName'] ?></td>
                            <td><?= $row['ord'] ?></td>
                            <td><?= $row['price'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
            mysqli_free_result($result);
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>



        <!-- Scripts Files -->
        <script src="js/all.js"></script>

        <script src="js/mycharts.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>