<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/cow-removebg.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>







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

        /* Initially invisible */

        /* Animation definition */
    }



    /*****************************************(((((((add button))))))) *******************************************/
    .add-button-health {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 55px;
        height: 55px;
        font-size: 16px;
        background-color: #287bff;
        color: white;
        font-size: 40px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
        position: fixed;
        bottom: 30px;
        right: 30px;


    }

    .icon {
        position: relative;
        right: -2px;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /*************************(((((((((((((add button container))))))))))))) ******************************************/
    /* Common styles for all devices */
    /* Common styles for all devices */
    .add-button-health,
    .add-button-health:hover {
        animation: fadeIn 0.5s ease;
    }

    .add-button-health:hover {
        background-color: #2980b9;
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;

    }

    ::-webkit-scrollbar {
        width: 0px;
        height: 4px;
    }

    .modal-content {
        background-color: #3498db;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        position: relative;
        width: 90%;
        max-width: 600px;
        height: 98%;
        animation: fadeInOut 0.3s ease-in-out;
        z-index: 99;
        overflow: auto;
    }

    @media only screen and (max-width: 768px) {
        .modal-content {
            width: 100%;
            max-width: none;
        }
    }

    /* Add more media queries as needed for different screen sizes */


    .close-button,
    .iconeClose {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        color: #fff;
    }

    .close-button:hover {
        color: #2980b9;
    }

    .save-button {
        background-color: #27ae60;
        color: white;
        border: none;
        padding: 12px 20px;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .save-button:hover {
        background-color: #219653;
    }

    form {
        display: grid;
        grid-gap: 10px;
    }

    label {
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="number"]:focus,
    textarea:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    input::placeholder,
    textarea::placeholder {
        color: #aaa;
    }

    .Add-New-Medicine,
    .Medicine-lable {
        color: white;
        font-family: 'Ubuntu', sans-serif;
    }

    @keyframes fadeInOut {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @media screen and (max-width: 768px) {
        .modal-content {
            width: 95%;
            padding: 15px;
            height: 90vh;
            /* Set the height to 90% of the viewport height */
            overflow-y: auto;
            /* Add scroll if content overflows */
        }

        .modal-content::-webkit-scrollbar {
            width: 0px;
            /* Set the width of the scrollbar */
        }

        .modal-content::-webkit-scrollbar-thumb {
            background-color: #888;
            /* Set the color of the scrollbar thumb */
            border-radius: 4px;
            /* Set the border radius of the scrollbar thumb */
        }

        .close-button {
            top: 5px;
            right: 5px;
            font-size: 20px;
        }

        .save-button {
            padding: 10px 15px;
            font-size: 14px;
        }
    }


    #customOptionContainer {
        display: none;
        margin-top: 10px;
    }

    #customDateInput {
        padding: 8px;
    }

    #addCustomOptionButton {
        padding: 11px 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        margin-left: 5px;
    }

    #addCustomOptionButton:hover {
        background-color: #45a049;
    }

    /***************************************((((((((((TITLE OFF THE PAGE)))))))))) ******************************/


    #error-message {
        color: red;
        font-size: 16px;
        margin-top: 10px;
        display: none;
        animation: fadeIn 1s ease-out;
        text-align: center;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /***************************************************************************************style off view  ****************************************************************/
    .custom-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-left: auto;
        margin-right: auto;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .custom-th,
    .custom-td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .custom-th {
        background-color: #4CAF50;
        color: white;
    }

    .custom-tr:hover {
        background-color: #f5f5f5;
    }

    .custom-icon {
        color: #4CAF50;
    }

    /******************************************************************************************medcine information++++++++++++++++++++++++++++++++++++++++++++++++++ */


    /* Default styles for the table */
    table {
        width: 95%;
        border-collapse: collapse;
        margin-bottom: 20px;
        margin-top: 20px;
        font-family: var(--bs-btn-font-family);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0.25rem 1.125rem rgba(75, 70, 92, 0.1);
        margin-left: auto;
        margin-right: auto;
        margin-top: 40px;

        z-index: -1;
        /* Initially invisible */

    }

    th,
    td {
        padding: 15px;
        text-align: left;
        background-color: #fff;
    }

    th {
        background-color: #7367f0;
        color: #fff;
    }

    tbody tr:hover {
        background-color: #7367f0;
    }

    tbody tr:nth-child(even) {
        background-color: #ecf0f1;
    }

    tbody td {
        color: #333;
    }

    tbody td:last-child {
        color: #e74c3c;
        font-weight: bold;
    }

    .creative-text {
        font-style: italic;
        color: #2ecc71;
    }

    .three-dots-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: white;
        color: #7f7c8c;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .three-dots-btn i {
        font-size: 18px;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 600px) {
        table {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
            overflow-x: auto;
        }

        th,
        td {
            padding: 10px;
        }
    }


    /***************************************************icons and style off bar********************* */
    .iconify-hover {
        position: absolute;

        justify-content: space-between;
    }



    #notificationWindow {
        display: none;
        position: fixed;
        top: 5%;
        right: 5%;
        background-color: #fff;
        padding: 15px;
        border: none;
        border-radius: 7px;
        box-shadow: 0 .25rem 1rem rgba(165, 163, 174, .45);
        z-index: 99;
        max-height: 90%;
        max-width: 90%;
        overflow: auto;
    }

    #notificationWindow .notification-content {
        width: 40%;
        /* Default width for large screens */
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    @media screen and (max-width: 400px) {
        #notificationWindow .notification-content {
            width: 80%;
            /* Adjusted width for smaller screens (e.g., phones) */
        }
    }

    #notificationWindow::-webkit-scrollbar {
        width: 0px;
        /* Width of the scrollbar */
    }

    #notificationWindow::-webkit-scrollbar-thumb {
        background-color: #2c3e50;
        /* Color of the scrollbar thumb */
        border-radius: 10px;
    }

    #notificationWindow::-webkit-scrollbar-track {
        background-color: #ecf0f1;
        /* Color of the scrollbar track */
    }

    ::-webkit-scrollbar {
        width: 0px;
        height: 4px;
    }

    /***********************************************window off delete and edite in the table ********** */
    .delete-button a svg {
        width: 1.2em;
        /* Set your desired width */
        height: 1.2em;
        /* Set your desired height */
    }

    .edit-button svg {
        width: 1.2em;
        /* Adjust the width to your desired size */
        height: 1.2em;
        /* Adjust the height to your desired size */
        margin-right: 0.5em;
        /* Optional: Add margin to the right of the SVG for spacing */
    }

    .popup {
        display: none;
        position: absolute;
        right: 15px;
        width: 160px;
        height: 90px;
        background-color: white;
        border: none;
        border-radius: 6px;
        padding: 10px;
        box-shadow: 0 .25rem 1rem rgba(165, 163, 174, .45);
    }



    .popup button {

        border: none;
        padding: 0px 10px;
        color: #5d596c;
        text-align: start;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition-duration: 0.4s;
        cursor: pointer;
        background-color: white;
        width: 140px;
        height: 34px;
        border-radius: 5px;
        font-size: 18px;
    }

    .popup button:hover {
        background-color: rgba(115, 103, 240, 0.08);
        color: #7367f0;
    }

    .popup .edit-icon::before {
        content: '\270E';
        /* Unicode character for edit pencil */
        margin-right: 5px;
    }

    .popup .delete-icon::before {
        content: '\2716';
        /* Unicode character for cross mark */
        margin-right: 5px;
    }

    .icon-link {
        text-decoration: none;
        color: #5d596c;
    }

    .icon-link:hover {
        color: #7367f0;
        /* You can keep the same color or specify a different one for hover */
    }

    #popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: white;
        color: #ffffff;
        border-radius: 10px;
        width: 30%;
        height: 45%;
        display: none;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        transition: transform 0.3s ease-out;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .iconedanger {
        font-size: 30px;
        color: black;
        margin-bottom: 20px;
        /* Adjust the margin as needed */
    }

    .Are_you_sure {
        text-align: center;
        color: black;
    }

    .This_action_p {
        color: #6f6b7d;
        font-weight: 400;
        text-align: center;
    }

    .icon-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border: none;
        color: red;
        border-radius: 10px;
    }

    .confirm_delete_NO,
    .confirm_delete_YES {
        display: inline-block;
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .confirm_delete_NO a {
        color: #fff;
        text-decoration: none;
    }

    .confirm_delete_NO:hover,
    .confirm_delete_YES:hover {
        background-color: #2980b9;
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
            <span>Cow Information/</span> <span style="color: #5D596C;">Health notebook</span>
        </h4>

    </Div>

    <!--------------------------------------------- display information ---------------------------------------------------------------------->
    <?php
    $currentDate = date('Y-m-d');

    $host = "localhost";
    $db_name = "cow_farmer_ahmed_billa";
    $username = "root";
    $password = "";

    $healthNotebook = "";

    if (isset($_GET["cowinformation"])) {
        $healthNotebook = $_GET["cowinformation"];
    }

    $remainingTimeFormat = 'days';
    $referenceTime = strtotime('8:00:00');

    $conn = mysqli_connect($host, $username, $password, $db_name);

    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $query = "SELECT id, medicineName, dateOfUse, reasonForUse, quantity, alertName, reminderDate, id_cow FROM health_notebook WHERE id_cow = ? ORDER BY CASE WHEN reminderDate = '0000-00-00' THEN '9999-12-31' ELSE reminderDate END ASC";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $healthNotebook);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $medcine_id = '';
    $medicineNameToSend = '';
    $alertNameToSend = '';
    $dateOfUseToSend = '';
    $quantityToSend = '';
    $reminderDateToSend = '';
    $additionalFieldToSend = '';
    $id_cow = '';

    ?>

    <table>

        <thead>
            <tr>
                <th>Medicine Name</th>
                <th>Date of Use</th>
                <th>Reason for Use</th>
                <th>Quantity</th>
                <th>Alert Name</th>
                <th>Reminder Date</th>
                <th>Remaining Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dataArray = array();
            $reminderDataArray = array();
            $referenceTime = time();
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $reminderDate = $row['reminderDate'] !== '0000-00-00' ? $row['reminderDate'] : '';

                    if (!empty($reminderDate)) {
                        $reminderDateTime = strtotime($reminderDate);
                        $remainingPeriod = $reminderDateTime - $referenceTime;

                        if ($remainingPeriod <= 0) {
                            $remainingTime = 'Deadline passed';
                            $remainingTimeClass = 'deadline-passed';
                        } else {
                            if ($remainingTimeFormat === 'hours') {
                                $remainingHours = floor($remainingPeriod / (60 * 60));
                                $remainingMinutes = floor(($remainingPeriod % (60 * 60)) / 60);
                                $remainingTime = "$remainingHours h $remainingMinutes m";
                            } else {
                                $remainingDays = floor($remainingPeriod / (60 * 60 * 24));
                                $remainingTime = "$remainingDays days";
                            }
                            $remainingTimeClass = '';
                        }
                    } else {
                        $remainingTime = '';
                        $remainingTimeClass = '';
                    }
            ?>
                    <script>
                        function getParameterByName(name, url) {
                            if (!url) url = window.location.href;
                            name = name.replace(/[\[\]]/g, "\\$&");
                            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                                results = regex.exec(url);
                            if (!results) return null;
                            if (!results[2]) return '';
                            return decodeURIComponent(results[2].replace(/\+/g, " "));
                        }

                        var cowIdValue = getParameterByName('cowinformation');
                        var idCowInputsend = document.getElementById("idCowInputsend");
                        idCowInputsend.value = cowIdValue;
                    </script>
                    <?php

                    if ($reminderDate === $currentDate) {
                        // Store relevant data in an array
                        $reminderDataArray[] = array(
                            'medcine_id' => $row['id'],
                            'medicineNameToSend' => $row['medicineName'],
                            'alertNameToSend' => $row['alertName'],
                            'dateOfUseToSend' => $row['dateOfUse'],
                            'quantityToSend' => $row['quantity'],
                            'id_cow_send' => $row['id_cow'],
                            'reminderDateToSend' => $reminderDate
                        );
                    }

                    ?>
                    <tr>
                        <td><?= $row['medicineName'] ?></td>
                        <td><?= $row['dateOfUse'] ?></td>
                        <td><?= $row['reasonForUse'] ?></td>
                        <td><?= $row['quantity'] ?>ml</td>
                        <td><?= $row['alertName'] ?></td>
                        <td><?= $reminderDate ?></td>
                        <td class="<?= $remainingTimeClass ?>"><?= $remainingTime ?></td>
                        <td>
                            <button class="three-dots-btn" onclick="showPopup(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                    <rect x="0" y="0" width="16" height="16" fill="none" stroke="none" />
                                    <path fill="currentColor" d="M8 2a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m0 4.5a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m1.5 6a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0" />
                                </svg>
                            </button>
                            <!-- Popup with edit and delete buttons -->
                            <div class="popup">
                                <button onclick="editItem()" class="edit-button" id="editButton">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>

                                    Edit
                                </button>


                                <button onclick="deleteItem(<?php echo $row['id']; ?>)" class="delete-button">
                                    <a href='#' class='icon-link' title=''>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="2 -1.9 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                        Delete
                                    </a>
                                </button>

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
                                            // If user clicks "Yes"
                                            if (result.isConfirmed) {
                                                // Redirect to the delete URL
                                                window.location.href = '../../php/delete_medcine.php?id=' + itemId;
                                            }
                                        });
                                    }
                                </script>











                            </div>
                    <?php

                }
                mysqli_free_result($result);
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
            mysqli_close($conn);
                    ?>

        </tbody>
    </table>
    <form id="healthForm" action="../../php/reminder_health.php" method="post" onsubmit="return validateForm()">
        <?php
        if (isset($reminderDataArray) && is_array($reminderDataArray)) {
            $index = 0; // Initialize index for unique IDs
            foreach ($reminderDataArray as $reminderData) :
        ?>
                <input name="id_cow_send[]" type="hidden" id="idCowInputsend<?= $index ?>" value="<?= $reminderData['id_cow_send'] ?>">
        <?php
                $index++; // Increment index for unique IDs
            endforeach;
        } else {
            echo "Error: \$reminderDataArray is not set or is not an array.";
        }
        ?>

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

        $query = "SELECT id, Cow_Name FROM cow_information WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $cowinformation);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $cowName = $row['Cow_Name'];
            mysqli_free_result($result);
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>

        <?php
        foreach ($reminderDataArray as $reminderData) :
            $reminderDate = new DateTime($reminderData['reminderDateToSend']);
            $dateOfUse = new DateTime($reminderData['dateOfUseToSend']);
            $dateDifference = $reminderDate->diff($dateOfUse)->format('%a days');
        ?>

            <?php
            $dateOfUseTimestamp = strtotime($reminderData['dateOfUseToSend']);
            $currentTimestamp = time();
            $dateDifferenceInSeconds = $currentTimestamp - $dateOfUseTimestamp;
            $dateDifference = floor($dateDifferenceInSeconds / (60 * 60 * 24));
            ?>

            <input name="Message_for_healt[]" type="hidden" value="<?= $reminderData['alertNameToSend'] ?> for the cow with number <?= $cowName; ?>, who received a dose of medication (<?= $reminderData['medicineNameToSend'] ?>) on <?= $reminderData['dateOfUseToSend'] ?>. The quantity is <?= $reminderData['quantityToSend'] ?>ml, Before <?= $dateDifference ?> days">
            <input name="medcine_id[]" type="hidden" id="medicineIdInput" value="<?= $reminderData['medcine_id'] ?>">

        <?php endforeach; ?>

        <button class="save-button" type="submit" id="saveButton" onclick="savemessage()" style="display: none;">Save</button>

    </form>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var lastMedicineId = null;

            function checkAndSubmit() {
                var medicineId = document.getElementById('medicineIdInput').value;
                var isFilled = medicineId && medicineId !== '0';

                if (isFilled && medicineId !== lastMedicineId) {

                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            var response = JSON.parse(xhr.responseText);
                            if (response.exists) {

                                lastMedicineId = medicineId;
                            } else {

                                lastMedicineId = null;

                                document.getElementById('saveButton').removeEventListener('click',
                                    saveButtonClick);

                                document.getElementById('saveButton').click();


                                document.getElementById('saveButton').addEventListener('click',
                                    saveButtonClick);
                            }
                        }
                    };

                    var url = '../../php/check_medcine_id.php';
                    var params = 'medicineId=' + encodeURIComponent(medicineId);
                    xhr.open('POST', url, true);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.send(params);
                }
            }

            function saveButtonClick(event) {
                checkAndSubmit();


                if (lastMedicineId === null) {

                    document.getElementById('healthForm').submit();
                } else {

                    console.log('Medicine ID already exists in the database. Please enter a different ID.');

                    event.preventDefault();
                }
            }


            document.getElementById('medicineIdInput').addEventListener('input', function() {
                checkAndSubmit();
            });


            document.getElementById('saveButton').addEventListener('click', saveButtonClick);

            setInterval(checkAndSubmit, 1000);
        });
    </script>

    <script>
        // Function to show the popup
        function showPopup(button) {
            // Get the parent row
            var row = button.parentNode.parentNode;

            // Get the popup element
            var popup = row.querySelector('.popup');

            // Toggle the display of the popup
            if (popup.style.display === 'none' || popup.style.display === '') {
                popup.style.display = 'block';
            } else {
                popup.style.display = 'none';
            }
        }
    </script>






    <!------------------------------------- Button to open the medicine modal ---------------------------------------->
    <button class="add-button-health" onclick="openMedicineModal()">
    <svg class="svg-inline--fa fa-plus fa-w-14 icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
    </button>

    <!--------------------------------------------- Medicine Modal ---------------------------------------------------->

    <div class="modal" id="medicineModal">
        <div class="modal-content">
            <span class="close-button" onclick="closeMedicineModal()">
                <i class="fas fa-times iconeClose"></i>
            </span>
            <h2 class="Add-New-Medicine">Add treatment</h2>
            <form action="../../php/health_notebookInsert.php" method="post" onsubmit="return validateForm()">
                <form>

                    <label class="Medicine-lable" for="medicineName"><i class="fas fa-prescription-bottle"></i>
                        Medicine Name:</label>

                    <input type="text" id="medicineName" name="medicineName" placeholder="Enter medicine name" required>


                    <label class="Medicine-lable" for="dateOfUse"><i class="far fa-calendar-alt"></i> Date of
                        Use:</label>

                    <input type="date" id="dateOfUse" name="dateOfUse">

                    <label class="Medicine-lable" for="reasonForUse"><i class="fas fa-pencil-alt"></i> Reason
                        for
                        Use:</label>

                    <textarea id="reasonForUse" name="reasonForUse" placeholder="Enter reason for use" rows="1"></textarea>

                    <label class="Medicine-lable" for="quantity"><i class="fas fa-flask"></i> Quantity
                        (ml):</label>

                    <input type="number" id="quantity" name="quantity" placeholder="Enter quantity">

                    <label class="Medicine-lable" for="dateOptions"><i class="fas fa-clock"></i> Alert
                        Period:</label>



                    <!------------------------------------------------------SEND ID COW-------------------------------------------------->
                    <input name="id_cow" type="hidden" id="idCowInput">
                    <script>
                        // Function to get URL parameters
                        function getParameterByName(name, url) {
                            if (!url) url = window.location.href;
                            name = name.replace(/[\[\]]/g, "\\$&");
                            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                                results = regex.exec(url);
                            if (!results) return null;
                            if (!results[2]) return '';
                            return decodeURIComponent(results[2].replace(/\+/g, " "));
                        }

                        // Get the cowId value from the URL
                        var cowIdValue = getParameterByName('cowinformation');

                        // Find the input element by its ID
                        var idCowInput = document.getElementById("idCowInput");

                        // Set the value of the input field to the cowId
                        idCowInput.value = cowIdValue;
                    </script>
                    <!-------------------------------------------------THE ID COW SEND-------------------------------------------------->



                    <select id="dateOptions" name="dateAlertSelect" onchange="handleDateOption()">
                        <option value="without">Without</option>
                        <option value="7">After 7 days</option>
                        <option value="30">After 30 days</option>
                        <option value="60">After 60 days</option>
                        <option value="other">Other</option>
                    </select>

                    <div id="customOptionContainer">
                        <input type="number" id="customDateInput" name="customDateInput" placeholder="Enter custom days (two, three, or four digits)">
                        <button type="button" id="addCustomOptionButton" onclick="addCustomOption()">
                            <i class="fa fa-check"></i>
                        </button>


                    </div>

                    <p id="reminderDate">Reminder Date: </p>
                    <input type="hidden" id="reminderDateInput" name="reminderDate" readonly>

                    <div id="error-message">Please enter the date for the reminder.</div>

                    <script>
                        function handleDateOption() {
                            var dateOptions = document.getElementById("dateOptions");
                            var customOptionContainer = document.getElementById("customOptionContainer");
                            var customDateInput = document.getElementById("customDateInput");
                            var reminderDate = document.getElementById("reminderDate");
                            var reminderDateInput = document.getElementById("reminderDateInput");
                            var errorMessage = document.getElementById("error-message");
                            var selectedDate = document.getElementById("dateOfUse").valueAsDate;

                            if (!selectedDate) {
                                reminderDate.textContent = "Reminder Date: ";
                                reminderDateInput.value = "";
                                errorMessage.style.display = "inline-block"; // Show the error message
                                return; // Exit the function if no date is entered
                            }

                            if (dateOptions.value === "other") {
                                customOptionContainer.style.display = "flex";
                                customDateInput.focus();
                                reminderDate.textContent =
                                    "Reminder Date: "; // Clear the reminder date when 'Other' is selected
                                reminderDateInput.value = "";
                            } else {
                                customOptionContainer.style.display = "none";

                                var daysToAdd = parseInt(dateOptions.value, 10);
                                var reminderDateValue = new Date(selectedDate.getTime() + daysToAdd * 24 * 60 * 60 *
                                    1000);
                                reminderDate.textContent = "Reminder Date: " + reminderDateValue.toDateString();
                                reminderDateInput.value = reminderDateValue.toISOString().split("T")[0];
                                errorMessage.style.display = "none"; // Hide the error message
                            }
                        }

                        // Function to handle adding a dynamic option based on custom days


                        function addCustomOption() {
                            var customDateInput = document.getElementById("customDateInput");
                            var dateOptions = document.getElementById("dateOptions");

                            // Check if the custom input is empty
                            if (customDateInput.value.trim() === "") {
                                return;
                            }

                            if (/^\d{1,9}$/.test(customDateInput.value)) {
                                // Remove the existing "Other" option if it exists
                                var otherOption = dateOptions.querySelector('option[value="other"]');
                                if (otherOption) {
                                    dateOptions.remove(otherOption.index);
                                }

                                // Check if the custom option already exists
                                var customOptionExists = Array.from(dateOptions.options).some(function(option) {
                                    return option.value === customDateInput.value;
                                });

                                if (!customOptionExists) {
                                    var customDays = parseInt(customDateInput.value, 10);
                                    var customOption = new Option("After " + customDays + " days", customDays);
                                    dateOptions.add(customOption);
                                }

                                // Add the "Other" option back as the last option
                                var otherOption = new Option("Other", "other");
                                dateOptions.add(otherOption);

                                dateOptions.value = customDateInput.value; // Select the newly added option
                                handleDateOption(); // Update the reminder date immediately
                            }
                        }
                    </script>






                    <label class="Medicine-lable" for="alert">
                        <i class="fas fa-file-signature"></i> Alert Name:
                    </label>
                    <input type="text" id="alert" name="alertName" placeholder="Enter alert message">



                    <button class="save-button" onclick="saveMedicine()">Save</button>
                </form>
            </form>
        </div>
    </div>




    <script>
        function openMedicineModal() {
            var modal = document.getElementById("medicineModal");
            modal.style.display = "flex";
        }

        function closeMedicineModal() {
            var modal = document.getElementById("medicineModal");
            modal.style.display = "none";
        }

        function saveMedicine() {
            // Add logic to save medicine details here

            // Close the modal after saving
            var modal = document.getElementById("medicineModal");
            modal.style.display = "none";
        }
    </script>
    <!--------------------------------------------- end Medicine Modal ---------------------------------------------------------------------->






    <!------------------------------------------------------- Scripts Files ----------------------------------------------------------------->
    <script src="../js/all.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="../js/mycharts.js"></script>

    <script src="../js/main.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>