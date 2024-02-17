<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo/cow-removebg.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/all.css" type="text/css">
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezHYue5t3WuP2ZTRvYY1q8ZfSRvb6L1aCCQRg8IChNXu1AXyr+YBhZqWxNQY87DL" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezj+J7UkLWm+pz8I9Lw3tbXeDpJITBwjRRBdA+BEOQ/lZ5Lgyb1+1sfYg9RlRbhK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">





    <title>Dashboard Template</title>

    <style>
        .cow-avatar {
            width: 95px;
            margin: 25px;
            border-radius: 100%;
            border: 1px solid #287bff;
            box-shadow: 1px 1px 5px black;
            position: relative;
            right: 0px;
            top: 0px;
        }

        .custom-line {
            border-left: 3px solid #555;
            /* You can adjust color, thickness, and style */
            height: 95px;
            /* Adjust the height as needed */
            margin-left: 20px;
            /* Adjust the margin as needed */
            margin-right: 20px;
            display: inline-block;
            position: relative;
            top: -25px;
            /* This ensures that the line doesn't take up the full width */
        }

        .info-cow-name {
            position: relative;
            top: -140px;
            right: -200px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 21px;
            /* You can adjust the font size as needed */
            font-weight: 700;
            color: #2c3e50;
            z-index: -1;
            /* Adjust the color as needed */
        }

        .info-birth {
            position: relative;
            top: -140px;
            right: -200px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 21px;
            z-index: -1;
        }

        @media only screen and (max-width: 600px) {
            .info-birth {
                top: -5%;
                /* Adjust the percentage as needed for smaller screens */
                right: -5%;
                /* Adjust the percentage as needed for smaller screens */
                font-size: 4vw;
                /* Adjust the viewport width (vw) as needed for smaller screens */
            }
        }

        .add_more_information {
            font-size: 1.5em;
            /* Adjust the font size as needed */
            animation: rotateColors 5s linear infinite;


            text-align: center;
        }

        @keyframes rotateColors {
            0% {
                color: #555;
            }

            /* Start color - Dark Gray */
            25% {
                color: #287bff;
            }

            /* Transition to next color - Blue */
            50% {
                color: #555;
            }

            /* Transition back to start color - Dark Gray */
            75% {
                color: #287bff;
            }

            /* Transition to next color - Blue */
            100% {
                color: #555;
            }

            /* Back to start color - Dark Gray */
        }

        .add_info {
            display: inline-block;
            padding: 10px 20px;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: 2px solid #3498db;
            color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .add_info:hover {
            background-color: #3498db;
            color: #ffffff;
        }

        .line_page {
            margin-top: 3px;
            border-top: 3px solid #555;
        }

        .premiem_line_page {
            margin-top: 51px;
            border-top: 3px solid #555;
        }

        .add-information-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            font-size: 16px;
            background-color: #287bff;
            /* Existing border */
            border: 1px solid #287bff;

            /* Additional border on the right */
            border-right: 1px solid white;
            border-left: 1px solid white;

            color: #287bff;
            font-size: 40px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            position: absolute;
            bottom: 853px;
            /* Adjust as needed */
            right: 30px;
            /* Adjust as needed */
            z-index: 9999;
            /* Adjust as needed; higher values appear above lower values */

        }

        #vaccinationNotes {
            width: 100%;
            height: 100px;
            /* Adjust the height as needed */
            padding: 8px;
            box-sizing: border-box;
            resize: vertical;
            /* Allow vertical resizing */
        }

        .vaccination-information {
            text-align: center;
            font-size: 30px;
            color: #2c3e50;
        }

        .delete-button {
            color: red;
            text-decoration: none;
        }

        /*table of general info*/

        .modern-table {
            width: 95%;
            /* Adjusted for better spacing */
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #ffffff;
            /* Crisp white background */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            /* Softer shadow for depth */
            border-radius: 8px;
            /* Rounded corners for a modern touch */
            overflow: hidden;
            /* Ensures the border-radius applies to children */
        }

        .modern-table td {
            padding: 20px;
            /* Increased padding for better readability */
            border-bottom: 1px solid #e0e0e0;
            /* Lighter border color */
            color: #333;
            /* Uniform text color for better consistency */
            font-family: 'Arial', sans-serif;
            /* Modern and clean font */
        }

        .title_of_premier_card {
            font-size: 26px;
            /* Slightly larger title size */
            color: #287bff;
            /* Eye-catching blue for title */
            text-align: left;
            /* Align to the left for a clean look */
            padding-left: 20px;
            /* Align title with table content */
            background-color: #f0f7ff;
            /* Light blue background for the title */
            border-bottom: 2px solid #287bff;
            /* Blue border for emphasis */
        }

        .info {
            font-size: 16px;
            color: #555;
            /* Keeping the info color subtle */
        }

        .icon-card {
            margin-right: 10px;
            color: #287bff;
            /* Matching icon color with the title */
            font-size: 18px;
            /* Slightly larger icons */
        }

        /* Add hover effect to rows for interactive feel */
        .modern-table tr:hover {
            background-color: #f4f8ff;
        }

        /* Responsive design for smaller screens */
        @media screen and (max-width: 768px) {
            .modern-table {
                width: 95%;
            }
        }

        .add_button_information {
            position: fixed;
            /* Fixed position relative to the viewport */
            bottom: 5px;
            /* Position from bottom of the viewport */
            right: 5px;
            /* Position from right of the viewport */
            background-color: transparent;
            /* Removes background */
            border: none;
            /* Removes border */
            cursor: pointer;
            /* Changes cursor to pointer on hover */
            padding: 10px;

            /* Adds some padding */
            transition: transform 0.3s ease;
            /* Smooth transition for hover effect */
            display: inline-block;
            /* Necessary for positioning and padding */

        }

        .add_button_information:hover {
            transform: scale(1.1);
            /* Slightly enlarges the button on hover */
        }

        .add_button_information img {
            width: 55px;
            /* Width of the icon */
            height: 55px;
            /* Height of the icon */
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.7;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .add-button {
            animation: pulse 2s infinite;
        }

        /*********************************delete messag********************************************/

        .delete-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #ff6347;
            /* Tomato color */
            border-radius: 8px;
            border: 2px solid #ff6347;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #ff4737;
            /* Slightly darker red */
            color: #fff;
        }

        .confirmation-modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            color: #333333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 999;
            animation: fadeIn 0.5s ease-out, shadowColorChange 2s infinite alternate;
            /* Added shadowColorChange animation */
            text-align: center;
            /* Center-align content */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes shadowColorChange {
            0% {
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            }

            50% {
                box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
                /* Change this to the desired shadow color */
            }

            100% {
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            }
        }


        .confirmation-modal i {
            display: block;
            color: #3498db;
            /* Color for the icon */
            margin-bottom: 20px;
            /* Adjust the spacing between the icon and the text */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .confirmation-modal button {
            font-size: 16px;
            background-color: #3498db;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .confirmation-modal button:hover {
            background-color: #1e87d0;
        }

        /****************************** button in the footer *********************************/
        .sell {
            display: inline-block;
            padding: 15px 25px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            outline: none;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            color: #fff;
            background-color: #4CAF50;
            /* Modern green color */
            box-shadow: 0 6px 12px rgba(76, 175, 80, 0.3);
            /* Slight green shadow */
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            width: 180px;
        }

        .sell:hover {
            background-color: #45a049;
            /* Darker green on hover */
            transform: scale(1.05);
            /* Slightly scale on hover for a subtle effect */
        }

        /* Money bag icon */
        .sell i {
            margin-right: 8px;
        }

        .div-fotter {
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
        }

        /************************************************died button*********************************8*/

        .died {
            display: inline-block;
            padding: 15px 25px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            outline: none;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            color: #000;
            background-color: #ddd;
            /* Light gray background */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            /* Slight black shadow */
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-bottom: 100px;
            width: 180px;
            height: 71px;

        }

        .died:hover {
            background-color: #aaa;
            /* Darker gray on hover */
            transform: scale(1.05);
            /* Slightly scale on hover for a subtle effect */
        }

        /* Skull icon */
        .died i {
            margin-right: 8px;
        }

        .div-did {
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
        }

        /*****************************************imprime button*************************************** */

        #responsiveButton {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: #f8f7fa;
            /* You can change the background color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            position: absolute;
            left: 89%;
            top: 454px;
            z-index: 0;
        }

        #responsiveButton svg {
            width: 24px;
            /* Adjust the size as needed */
            height: 24px;
            margin-right: 5px;
            /* Add some spacing between the icon and text */
        }

        @media print {
            #responsiveButton {
                display: none;
            }
        }







        ::-webkit-scrollbar {
            width: 0px;
            height: 4px;
        }

        .card-body {
            max-width: 600px;
            margin: 0 auto;
            z-index: 1;
        }


        .input-group {
            margin-bottom: 15px;
        }

        @media (min-width: 768px) {
            .card-body {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            #positiveFields {
                width: 100%;
            }

            #positiveFields div {
                width: 100%;
            }
        }
    </style>
</head>

<body style="background-color: #f8f7fa;">


    <?php include('../../../IncludeTheFile/Side_Bar.php'); ?>
    <!-- Main Section -->
    <div class="main">
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
            <span>Cow Information/</span> <span style="color: #5D596C;">Total information</span>
        </h4>

    </Div>
    <?php

    $host = "localhost";
    $cow_information = "cow_farmer_ahmed_billa";
    $username = "root";
    $password = "";

    $cowinformation = "";

    if (isset($_GET["cowinformation"])) {
        $cowinformation = $_GET["cowinformation"];
    }

    $conn = mysqli_connect($host, $username, $password, $cow_information);

    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
    $query = "SELECT id, Cow_Name, Date_of_Birth, Gender, Weight_kg, Mother_of_the_Cow, Father_of_the_Cow, Breed, Number_of_Births, Seller_Name, Date_of_Purchase FROM cow_information WHERE id = '" . $cowinformation . "'";
    $result = mysqli_query($conn, $query);
    if ($result) {


        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <img class="cow-avatar" src="../img/logo/cow-avatar6.jpg" alt="">
            <div class="custom-line"></div>
            <?php
            // ... existing PHP code ...
            echo "<script>var cowId = '" . $row['id'] . "';</script>";
            ?>
            <?php
            // Assuming $row['id'] contains the desired value
            echo "<script>var cowId = '" . $row['id'] . "';</script>";







            echo "<div class= 'card-information'>";
            echo "<p class='infotitle'></p>";
            echo "<p class='info-cow-name'> " . $row['Cow_Name'] . "</p>";

            // Assuming $row['Date_of_Birth'] contains the date of birth in the format 'YYYY-MM-DD'

            // Create a DateTime object from the date of birth
            $dateOfBirth = new DateTime($row['Date_of_Birth']);

            // Get the current date
            $currentDate = new DateTime();

            // Calculate the difference in years, months, and days
            $age = $currentDate->diff($dateOfBirth);

            // Display the age
            echo "<p class='info-birth'>Age: {$age->y} years, {$age->m} months, {$age->d} days</p>";
            ?>
            <!--------------------------------------------------imprimer----------------------------------------------------->

            <button id="responsiveButton">
                <svg style="color: #287bff;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                </svg>
            </button>

            <!-- Include the JavaScript code -->
            <script>
                // Add an event listener to the button
                document.getElementById('responsiveButton').addEventListener('click', function() {
                    // Print the content of the page
                    window.print();
                });
            </script>


            <!----------------------------------------------final imprime button-------------------------------------------->


            <table class="modern-table">
                <tr>
                    <td colspan="2">
                        <h2 class="title_of_premier_card">General Information</h2>
                    </td>
                </tr>
                <!-- Date of Birth -->
                <tr>
                    <td><label for="dob"><i class="fas fa-calendar-alt icon-card"></i> Date of Birth:</label></td>
                    <td><?php echo "<p class='info'>" . $row['Date_of_Birth'] . "</p>"; ?></td>
                </tr>
                <!-- Gender -->
                <tr>
                    <td><label for="gender"><i class="fas fa-venus-mars icon-card"></i> Gender:</label></td>
                    <td><?php echo "<p class='info'>" . $row['Gender'] . "</p>"; ?></td>
                </tr>
                <!-- Weight -->
                <tr>
                    <td><label for="weight"><i class="fas fa-balance-scale icon-card"></i> Weight (kg):</label></td>
                    <td><?php echo "<p class='info'>" . $row['Weight_kg'] . " Kg</p>"; ?></td>
                </tr>
                <!-- Mother of the Cow -->
                <tr>
                    <td><label for="motherName"><i class="fas fa-venus icon-card"></i> Mother of the Cow:</label></td>
                    <td><?php echo "<p class='info'>" . $row['Mother_of_the_Cow'] . "</p>"; ?></td>
                </tr>
                <!-- Father of the Cow -->
                <tr>
                    <td><label for="fatherName"><i class="fas fa-mars icon-card"></i> Father of the Cow:</label></td>
                    <td><?php echo "<p class='info'>" . $row['Father_of_the_Cow'] . "</p>"; ?></td>
                </tr>
                <!-- Breed -->
                <tr>
                    <td><label for="breed"><i class="fas fa-dna icon-card"></i> Breed:</label></td>
                    <td><?php echo "<p class='info'>" . $row['Breed'] . "</p>"; ?></td>
                </tr>
                <!-- Number of Births -->
                <tr>
                    <td><label for="Number of Births"><i class="fas fa-baby icon-card"></i> Number of Births:</label>
                    </td>
                    <td><?php echo "<p class='info'>" . $row['Number_of_Births'] . "</p>"; ?></td>
                </tr>
                <!-- Seller Name -->
                <tr>
                    <td><label for="sellerName"><i class="fas fa-user icon-card"></i> Seller Name:</label></td>
                    <td><?php echo "<p class='info'>" . $row['Seller_Name'] . "</p>"; ?></td>
                </tr>
                <!-- Date of Purchase -->
                <tr>
                    <td><label for="purchaseDate"><i class="fas fa-calendar-alt icon-card"></i> Date of
                            Purchase:</label></td>
                    <td><?php echo "<p class='info'>" . $row['Date_of_Purchase'] . "</p>"; ?></td>
                </tr>
            </table>






    <?php
        }
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>


















    <?php
    $host = "localhost";
    $vactination_information = "cow_farmer_ahmed_billa";
    $username = "root";
    $password = "";

    $vactination = "";

    if (isset($_GET["cowinformation"])) {
        $vactination = $_GET["cowinformation"];
    }

    $conn = mysqli_connect($host, $username, $password, $vactination_information);

    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $query = "SELECT id, number_of_vactination, bull_name, vactination_date, result, calf_name, birth_date, male_female, note, id_cow, price, inseminator, certificate_number FROM vactination_information WHERE id_cow = '" . $vactination . "'";
    $result = mysqli_query($conn, $query);

    // Start of CSS
    echo "<style>
            .table-container {
                width: 95%;
                margin: 20px auto;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
                border-radius: 8px;
                overflow-x: auto;
                background: white;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: left;
            }
            th, td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #007bff;
                color: white;
                font-weight: normal;
                letter-spacing: 0.5px;
            }
            tr:nth-child(even) {
                background-color: #f8f9fa;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            .info {
                margin: 5px 0;
                color: #333;
                font-size: 0.95em;
            }
            
           
        </style>";


    if ($result) {
    ?>
        <h2 class="vaccination-information">Information about Insemination</h2>
        <?php
        echo "<div class='table-container'>";
        echo "<table>";
        // Table header
        echo "<thead>";
        echo "<tr>";
        echo "<th>I.A</th>";
        echo "<th>Certificate N°</th>";
        echo "<th>Bull Name</th>";
        echo "<th>I.A Date</th>";
        echo "<th>Inseminator</th>";
        echo "<th>price</th>";
        echo "<th>Result</th>";
        echo "<th>Calf Name</th>";
        echo "<th>Birth Date</th>";
        echo "<th>Gender</th>";
        echo "<th>Note</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tfoot>";


        // Fetch and display each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['number_of_vactination'] . "</td>";
            echo "<td>" . $row['certificate_number'] . "</td>";
            echo "<td>" . $row['bull_name'] . "</td>";
            echo "<td>" . $row['vactination_date'] . "</td>";
            echo "<td>" . $row['inseminator'] . "</td>";
            echo "<td>" . $row['price'] . "DH</td>";
            echo "<td>" . $row['result'] . "</td>";
            echo "<td>" . $row['calf_name'] . "</td>";
            echo "<td>" . $row['birth_date'] . "</td>";
            echo "<td>" . $row['male_female'] . "</td>";
            echo "<td>" . $row['note'] . "</td>";
        




            echo "<td><a href='#' class='delete-button' onclick='return deleteItem(" . $row['id'] . ")'><i class='fas fa-trash-alt'></i> Delete</a></td>";

        ?>

            <script>
                function deleteItem(itemId) {
                    // Display a custom-styled confirmation dialog using SweetAlert2
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it',
                        cancelButtonText: 'Cancel',
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger ml-2'
                        }
                    }).then((result) => {
                        // If the user clicks "Yes"
                        if (result.isConfirmed) {
                            // Redirect to the delete URL
                            window.location.href = '../../php/delet_vacctination.php?id=' + itemId;
                        }
                    });

                    // Prevent the default behavior of the anchor tag
                    return false;
                }
            </script>



    <?php



            // Rest of the code...





            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";

        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>


    <!-----------------------------------------------------------ADD MORE INFORMATION---------------------------------------------------------->

    <h3 class="add_more_information">
        <span class="icon">
            <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">

            </svg><!-- <i class="fas fa-chevron-right"></i> -->
        </span>
        <button class="add-button" onclick="showCard()">
            <i class="fas fa-plus icon" style="color: white;margin: auto;"></i>
        </button>
    </h3>



    <!-----------------------------------------------------------ADD MORE INFORMATION card---------------------------------------------------------->
    <form action="../../php/vactination information.php" method="post" onsubmit="return validateForm()">
        <div class="card-container">
            <div class="overlay" id="overlay"></div>

            <div class="card" id="cowCard">
                <form action="../../php/vactination information.php" method="post" onsubmit="return validateForm()">
                    <!-- existing form elements -->

                    <input name="id_cow" type="hidden" id="cowIdInput">


                    <!-- rest of the form -->

                    <script>
                        window.onload = function() {
                            if (typeof cowId !== 'undefined') {
                                document.getElementById('cowIdInput').value = cowId;
                            }
                        };
                    </script>


                    <div class="card-header">
                        <h2>More Information</h2>
                        <i class="fas fa-times icon-card" onclick="hideCard()" style="cursor: pointer;"></i>
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <label for="vaccinationNumber">
                                <i class="fas fa-syringe icon-card"></i>Insemination Number:
                            </label>
                            <input name="number_of_vactination" type="number" id="vaccinationNumber" placeholder="Enter number of vaccinations" value="0">
                        </div>

                        <div class="input-group">
                            <label for="bullName">
                                <i class="fas fa-bullhorn icon-card"></i> Bull's Name:
                            </label>
                            <input name="bull_name" type="text" id="bullName" placeholder="Enter bull's name">
                        </div>

                        <div class="input-group">
                            <label for="vaccinationDate">
                                <i class="far fa-calendar-alt icon-card"></i> Date of Insemination:
                            </label>
                            <input name="vactination_date" type="date" id="vaccinationDate">
                            <div style="margin-top: 20px;" class="input-group">
                                <label for="price">
                                    <svg style="color: #287bff;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1.5em" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M160 0c17.7 0 32 14.3 32 32v35.7c1.6.2 3.1.4 4.7.7c.4.1.7.1 1.1.2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9.8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32v-34.9c-.4-.1-.9-.1-1.3-.2h-.2c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2S44.9 353 61 360.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6.4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7c-28.5-7.6-63.5-16.9-89.5-33.9c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2c7.2-38.2 35.8-63 68.3-75.9c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32" />
                                    </svg> Price:
                                </label>
                                <input name="price" type="number" id="price" placeholder="Enter Price">
                            </div>
                            <div style="margin-top: 20px;" class="input-group">
                                <label for="inseminator">
                                    <svg style="color: #287bff; font-weight: 900;" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                                            <circle cx="12" cy="6" r="4" />
                                            <path stroke-linecap="round" d="M19.998 18c.002-.164.002-.331.002-.5c0-2.485-3.582-4.5-8-4.5s-8 2.015-8 4.5S4 22 12 22c2.231 0 3.84-.157 5-.437" />
                                        </g>
                                    </svg> Inseminator:
                                </label>
                                <input name="inseminator" type="text" id="inseminator" placeholder="Enter Inseminator">
                            </div>

                        </div>

                        <div class="input-group">
                            <label for="vaccinationResult">
                                <i class="fas fa-check-circle icon-card"></i> Result:
                            </label>
                            <select style="height: 39px;" name="result" id="vaccinationResult" onchange="handleResultSelection()">
                                <option value="negative">Negative</option>
                                <option value="positive">Positive</option>
                            </select>
                            <div style="margin-top: 20px;" class="input-group">
                                <label for="certificateNumber">
                                    <svg style="color: #287bff;" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M15 19H2V1h16v4m0 0a5 5 0 1 1 0 10a5 5 0 0 1 0-10zm-3 9v8l3-2l3 2v-8M5 8h6m-6 3h5m-5 3h2M5 5h2" />
                                    </svg> Certificate Number:
                                </label>
                                <input name="certificate_number" type="number" id="certificateNumber" placeholder="Certificate N°">
                            </div>

                        </div>


                        <!-- Additional fields for positive result -->
                        <div id="positiveFields" style="display:none; margin-top: 20px;">
                            <div style="   display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px; width: 203%;">
                                <div class="input-group">
                                    <label for="calfName">
                                        <i class="fas fa-baby icon-card"></i> Calf's Name:
                                    </label>
                                    <input name="calf_name" type="text" id="calfName" placeholder="Enter calf's name">
                                </div>

                                <div class="input-group">
                                    <label for="birthDate">
                                        <i class="far fa-calendar-alt icon-card"></i> Birth Date:
                                    </label>
                                    <input name="birth_date" type="date" id="birthDate">
                                </div>

                                <div class="input-group" style="margin-top: 20px;" id="genderField">
                                    <label for="calfGender">
                                        <i class="fas fa-venus-mars icon-card"></i> Calf's Gender:
                                    </label>
                                    <select name="male_female" id="calfGender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <label for="vaccinationNotes">
                                        <i class="fas fa-sticky-note icon-card"></i> Notes:
                                    </label>
                                    <textarea style="height: 34px; border: 1px solid #ccc;" name="note" id="vaccinationNotes" placeholder="Enter additional notes"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <script>
                        function handleResultSelection() {
                            var resultDropdown = document.getElementById("vaccinationResult");
                            var positiveFields = document.getElementById("positiveFields");

                            // Display or hide additional fields based on the selected value
                            if (resultDropdown.value === "positive") {
                                positiveFields.style.display = "block";
                            } else {
                                positiveFields.style.display = "none";
                            }
                        }
                    </script>
















                    <div id="dynamic-content-container"></div>




                    <!-- Add more input fields for other information -->
                    <button class="save-button" onclick="saveCow('<?php echo urlencode($row['id']); ?>')" style="margin-left: auto; margin-right: auto;">Save</button>


            </div>
        </div>
        </div>
    </form>

    <div class="div-fotter">
        <button class="sell"><i class="fas fa-coins"></i> Selling the cow</button>

    </div>
    <div class="div-did">
        <button class="died"><i class="fas fa-skull"></i> The cow died</button>
    </div>




    <!-- Scripts Files -->
    <script src="js/all.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="../js/mycharts.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="../js/main.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>