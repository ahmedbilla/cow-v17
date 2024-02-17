<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/cow-removebg.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/all.css" type="text/css">
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Dashboard Template</title>
</head>
<style>
    /***************************************(((((((((((((INFO COW NAME))))))))))))) ******************************/
    .info-cow-name {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 21px;
        font-weight: 700;
        color: #2c3e50;
        margin-top: 80px;
    }
</style>

<body style="background-color: #f8f7fa;">

    <?php include('../../../IncludeTheFile/Side_Bar.php'); ?>


    <!-- Main Section -->
    <div class="main">
        <?php
        echo "<p class='info-cow-name'> " . $row['Cow_Name'] . "</p>";
        ?>
        <?php include('../../../IncludeTheFile/notification_bar.php'); ?>


        <div class="accountMenu">
            <h3>Ahmed Billa<br /><span>Farmer</span></h3>
            <ul>
                <li>
                    <img src="../img/user/user.png" alt="profile">
                    <a href="#">My Profile</a>
                </li>
                <li>
                    <img src="../img/user/edit.png" alt="profile">
                    <a href="#">Edit Profile</a>
                </li>
                <li>
                    <img src="../img/user/envelope.png" alt="profile">
                    <a href="#">Inbox</a>
                </li>
                <li>
                    <img src="../img/user/settings.png" alt="profile">
                    <a href="#">Settings</a>
                </li>
                <li>
                    <img src="../img/user/question.png" alt="profile">
                    <a href="#">Help</a>
                </li>
                <li>
                    <img src="../img/user/log-out.png" alt="profile">
                    <a href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </div>

    <Div style="display: flex; justify-content: start; margin-left: auto; margin-right: auto; width: 93%; margin-top: 45px; font-family: 30px;">
        <h4 class="TitleLocation" style="color: #A5A3AE; font-family: Arial, Tahoma, Geneva, Verdana, sans-serif;">
            <span>Cow Information/</span> <span style="color: #5D596C;">Milk Production</span>
        </h4>

    </Div>




    <div class="graphBox">
        <!-- First chart canvas -->
        <div class="box">
            <canvas id="myChart"></canvas>
        </div>
        <!-- Second chart canvas -->
        <div class="box">
            <canvas id="earning"></canvas>
        </div>
    </div>

  
           













    <!-- Scripts Files -->
    <script src="../js/all.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>


    <script src="statique.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>