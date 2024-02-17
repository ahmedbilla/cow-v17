<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/cow-removebg.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LC5a2ts2na4Utdav7lNCiHosKX39k7bB/bm5vXcZ/GNQ4pDXo5z0yWXOsquJggCMEHYGQJhKswN8aN7dNX/0bw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-3e5D4+MXQ0kdllMaoCFB/SOy5jt1pNU/izXYM8fPOm3Rv6N5Uewmpbl5d6TiRxkeA0Tl2VvjbV5czPf+JX8b6kA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-3e5D4+MXQ0kdllMaoCFB/SOy5jt1pNU/izXYM8fPOm3Rv6N5Uewmpbl5d6TiRxkeA0Tl2VvjbV5czPf+JX8b6kA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyD8Dt3V/Jb5Lm0l6U5nhI8xa1dIRddTb" crossorigin="anonymous">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-3e5D4+MXQ0kdllMaoCFB/SOy5jt1pNU/izXYM8fPOm3Rv6N5Uewmpbl5d6TiRxkeA0Tl2VvjbV5czPf+JX8b6kA==" crossorigin="anonymous" referrerpolicy="no-referrer" />





    <title>Dashboard Template</title>
    <!-------------------------------------------------------style of the table--------------------------------------------------->
    <style>
        .title-page {
            text-align: center;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
            font-family: 'Roboto', sans-serif;
            /* Choose a modern and widely supported font */
            font-size: 2em;
            color: #3498db;
            /* Modern blue color, you can choose based on your preference */
            margin-bottom: 20px;
            /* Adjust the margin as needed */
        }

        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #287bff;
            color: #555;
        }

        /* Table Styles */

        /* Creative Styles */
        body {
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
        }

        /* Table Styles */
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 0 10px #dbdade;
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            z-index: -1;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s;
        }

        th {
            background-color: #287bff;
            color: white;
            text-align: center;
        }

        td {
            background-color: white;
            text-align: center;
        }

        tr:hover {
            background-color: #f0f0f0;
        }

        .highlight {
            color: #333;
            font-weight: bold;
        }

        .table-container {
            overflow-x: auto;
            position: relative;
            top: -19px;
        }



        .popup {
            display: none;
            position: fixed;
            background-color: #3498db;
            /* Modern color */
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        /* Overlay to cover the background */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .icon-link {
            color: #3498db;
            /* Color for the link */
            text-decoration: none;
            cursor: pointer;
            margin-right: 10px;
        }

        /************************************edit and view*********************************************/
        .icon-link {
            margin-right: 10px;
            /* Adjust the spacing between icons if needed */
            color: #3498db;
            /* Set the icon color */
            text-decoration: none;
            /* Remove the default underline */
        }

        .icon-link:hover {
            color: #2980b9;
            /* Change the color on hover if desired */
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
            z-index: 1;
        }

        .select_button {
            width: 10px;
        }

        /************************************popap***********************************************/
        /* Your styles for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 2px solid #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        /* Overlay to cover the background */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .total_number {
            text-align: center;
        }

        ::-webkit-scrollbar {
            width: 0px;
            height: 4px;
        }

        .selected-cows-container {
            width: 95%;
            background-color: white;
            margin: 40px auto;
            border-radius: 15px;
            padding: 20px;
            color: #4d4d4d;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .select-all-label {
            display: flex;
            align-items: center;
        }

        .select-all-checkbox {
            margin-right: 10px;
            cursor: pointer;
        }

        .select-all-text {
            font-size: 18px;
            font-weight: bold;
        }

        .selected-cows-info {
            margin-top: 15px;
            display: flex;
            align-items: center;
        }

        .selected-cows-label {
            font-size: 16px;
            margin-right: 20px;
        }

        .selected-cows-count {
            font-size: 18px;
            font-weight: bold;
            color: #ff9900;
        }

        .action-label {
            display: block;
            margin-top: 15px;
            font-size: 16px;
        }

        .action-select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
            color: #333;
            margin-top: 5px;



            /**mooooooooooooooooooooooooodeeeeeeeeeeeeeeeeeeeeeeeeeeelllllll */
        }

        /* Modal Overlay */
        .modal-overlay {
            display: none;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 7;
        }

        /* Modal Content */
        .modal-content {
            background-color: #3498db;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            height: 95%;
            /* Adjusted for responsiveness */
            max-width: 500px;
            /* Maximum width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: auto;
            overflow: auto;
            /* Handle overflow */
        }

        /* Typography */
        .modal-content h2 {
            color: white;
            font-size: 20px;
            margin-bottom: 18px;
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            z-index: auto;
            text-align: center;
        }

        .modal-content label {
            display: block;
            margin-bottom: 4px;
            color: white;
            font-size: 13px;
            font-family: 'Ubuntu', sans-serif;
            z-index: auto;
            text-align: center;
        }

        /* Input Fields */
        .modal-content input[type="text"],
        .modal-content input[type="number"],
        .modal-content input[type="date"] {
            width: 100%;
            padding: 9px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            z-index: auto;
        }

        /* Save Button */
        .modal-content button,
        .cancel-button {
            background-color: #27ae60;
            color: white;
            padding: 2% 4%;
            /* Adjust as needed */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 20%;

            margin-bottom: 8px;
            margin-right: 10px;
            /* Make the button full-width */
            transition: background-color 0.3s;
        }

        /* Hover effect on Save Button */
        .modal-content button:hover {
            background-color: #219653;
        }

        .cancel-button {
            background-color: #f1f1f2;
            color: #333333;
            width: 100%;
        }

        .cancel-button:hover {
            background-color: #e0e0e1;
        }

        /* Hover effect on Cancel Button */
        .cancel-button:hover {
            background-color: #dcdcdc;
        }

        /* Responsive Adjustments */
        @media only screen and (max-width: 768px) {
            .modal-content {
                width: 90%;
                height: 99%;
            }

            .modal-content h2 {
                font-size: 18px;
                margin-bottom: 20px;
            }
        }

        @media only screen and (max-width: 600px) {
            .modal-content {
                width: 95%;
            }

            .modal-content h2 {
                font-size: 18px;
                margin-bottom: 20px;
            }
        }
    </style>

</head>

<body style="background-color: #f8f7fa;">


    <div class="container">
        <!-- Navigation Section -->
        <?php include('../IncludeTheFile/sideBarAllCow.php'); ?>
        <!-- Main Section -->
        <div class="main">
            <?php include('../IncludeTheFile/notification_bar.php');?>
            <?php include('../IncludeTheFile/profile.php'); ?>

        </div>
        <Div style="display: flex; justify-content: start; margin-left: auto; margin-right: auto; width: 93%; margin-top: 45px; font-family: 30px;">
            <h4 class="TitleLocation" style="color: #A5A3AE; font-family: Arial, Tahoma, Geneva, Verdana, sans-serif;">
                <span>Cow Statistics/</span> <span style="color: #5D596C;">Cow list</span>
            </h4>

        </Div>
        <!--add icone-->
        <button class="add-button" onclick="showCard()">
            <i class="fas fa-plus icon" style="color: white;margin: auto;"></i>
        </button>

        <!------------------------------------------------------------- LIST OF ADDED COWS ----------------------------------------------------------->

        <?php
        $host = "localhost";
        $cow_information = "cow_farmer_ahmed_billa";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($host, $username, $password, $cow_information);

        if (mysqli_connect_errno()) {
            die("Connection error: " . mysqli_connect_error());
        }

        $query = "SELECT id, Cow_Name, Gender, Breed, Date_of_Birth FROM cow_information";
        $result = mysqli_query($conn, $query);

        $tableDisplayed = false;
        ?>

        <div class="selected-cows-container">
            <label class="select-all-label">
                <input type="checkbox" id="selectAllCheckbox" class="select-all-checkbox">
                <span class="select-all-text">🐄 Select All Cows</span>
            </label>

            <div class="selected-cows-info">
                <span class="selected-cows-label">Selected Cows:</span>
                <span id="countDisplay" class="selected-cows-count">0</span>
            </div>

            <label for="selectAction" class="action-label">Select Action</label>
            <select id="selectAction" name="selectAction" class="custom-select">
                <option value="insemination"></option>
                <option value="insemination">Artificial Insemination</option>
                <option value="Periodic vaccination">Periodic vaccination</option>
                <!-- Add more options as needed -->
            </select>

        </div>
        <form action="php/insert_IA_details.php" method="post" onsubmit="return validateForm()">
            <div class="modal-overlay" id="inseminationModal">
                <div class="modal-content">
                    <h2>Artificial Insemination Details</h2>
                    <input name="id_cow" type="hidden">
                    <input name="cow_name" type="hidden">
                    <label for="certificateNumber"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 -5 24 24">
                            <path fill="currentColor" d="M4.75 3A2.75 2.75 0 0 0 2 5.75V11a5 5 0 0 1 8 6v1h9.25A2.75 2.75 0 0 0 22 15.25v-9.5A2.75 2.75 0 0 0 19.25 3zm2 4h10.5a.75.75 0 0 1 0 1.5H6.75a.75.75 0 0 1 0-1.5M12 12.75a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 0 1.5h-4.5a.75.75 0 0 1-.75-.75M6 10a4 4 0 1 0 0 8.001A4 4 0 0 0 6 10m3 8.001c-.835.628-1.874 1-3 1a4.978 4.978 0 0 1-3-.998v3.246c0 .57.605.92 1.09.669l.09-.055L6 20.592l1.82 1.272a.75.75 0 0 0 1.172-.51L9 21.249z" />
                        </svg>Certificate Number:</label>
                    <input type="number" id="certificateNumber" name="certificateNumber">

                    <label for="iaDate"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 -3 24 24">
                            <path fill="currentColor" d="M7.75 2.5a.75.75 0 0 0-1.5 0v1.58c-1.44.115-2.384.397-3.078 1.092c-.695.694-.977 1.639-1.093 3.078h19.842c-.116-1.44-.398-2.384-1.093-3.078c-.694-.695-1.639-.977-3.078-1.093V2.5a.75.75 0 0 0-1.5 0v1.513C15.585 4 14.839 4 14 4h-4c-.839 0-1.585 0-2.25.013z" />
                            <path fill="currentColor" fill-rule="evenodd" d="M22 12c0-.839 0-1.585-.013-2.25H2.013C2 10.415 2 11.161 2 12v2c0 3.771 0 5.657 1.172 6.828C4.343 22 6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.172C22 19.657 22 17.771 22 14zm-8 .25A1.75 1.75 0 0 0 12.25 14v2a1.75 1.75 0 1 0 3.5 0v-2A1.75 1.75 0 0 0 14 12.25m0 1.5a.25.25 0 0 0-.25.25v2a.25.25 0 1 0 .5 0v-2a.25.25 0 0 0-.25-.25m-3.213-1.443a.75.75 0 0 1 .463.693v4a.75.75 0 0 1-1.5 0v-2.19l-.22.22a.75.75 0 0 1-1.06-1.06l1.5-1.5a.75.75 0 0 1 .817-.163" clip-rule="evenodd" />
                        </svg>I.A. Date:</label>
                    <input type="date" id="iaDate" name="iaDate">




                    <label for="inseminator"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 -4 24 24">
                            <path fill="currentColor" d="M12 3.75a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m-4 9.5A3.75 3.75 0 0 0 4.25 17v1.188c0 .754.546 1.396 1.29 1.517c4.278.699 8.642.699 12.92 0a1.537 1.537 0 0 0 1.29-1.517V17A3.75 3.75 0 0 0 16 13.25h-.34c-.185 0-.369.03-.544.086l-.866.283a7.251 7.251 0 0 1-4.5 0l-.866-.283a1.752 1.752 0 0 0-.543-.086z" />
                        </svg>Inseminator:</label>
                    <input type="text" id="inseminator" name="inseminator">

                    <label for="bullName"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 -65 512 512">
                            <path fill="currentColor" d="M68.596 28.182c-86.767 50.67-51.027 136.884 123.35 136.884l2.835-70.433c-71.07 14-169.105 15.57-126.184-66.45zm378.455 0c42.92 82.022-55.114 80.45-126.185 66.45l2.836 70.434c174.378 0 210.117-86.213 123.35-136.884zM174.206 220.768c-3.798.104-7.758.785-11.816 2.087c-1.887 29.822 11.63 50.308 48.516 39.88c-.462-26.26-16.194-42.53-36.7-41.967m167.213 0c-20.507-.563-36.24 15.707-36.7 41.966c36.886 10.43 50.404-10.057 48.518-39.88c-4.058-1.3-8.02-1.982-11.818-2.086m-53.123 162.7l-10.793 15.266c15.535 10.978 19.19 32.196 8.21 47.73C274.736 462 253.533 465.64 238 454.663c-15.535-10.978-19.19-32.193-8.21-47.728a34.16 34.16 0 0 1 7.288-7.543l-11.263-14.894a52.861 52.861 0 0 0-11.292 11.645c-16.805 23.784-11.098 56.982 12.685 73.788c23.784 16.806 56.956 11.098 73.762-12.686c16.806-23.783 11.11-56.967-12.672-73.773z" />
                        </svg>Bull Name:</label>
                    <input type="text" id="bullName" name="bullName">

                    <label for="ord"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 -3 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 17V7l7 10V7m4 10h5m-5-7a2.5 3 0 1 0 5 0a2.5 3 0 1 0-5 0" />
                        </svg>ORD:</label>
                    <input type="number" id="ord" name="ord">

                    <label for="ord"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1.2em" viewBox="0 -60 320 512">
                            <path fill="currentColor" d="M160 0c17.7 0 32 14.3 32 32v35.7c1.6.2 3.1.4 4.7.7c.4.1.7.1 1.1.2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9.8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32v-34.9c-.4-.1-.9-.1-1.3-.2h-.2c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2S44.9 353 61 360.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6.4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7c-28.5-7.6-63.5-16.9-89.5-33.9c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2c7.2-38.2 35.8-63 68.3-75.9c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32" />
                        </svg>price:</label>
                    <input type="number" id="ord" name="price">

                    <button style="font-weight: 500;" onclick="saveInseminationDetails()">Save</button>

                    <!-- Cancel button -->
                    <button class="cancel-button" style="background-color: #f1f1f2; color: #a8aaae; font-weight: 500;" onclick="cancelInseminationModal()">Cancel</button>

                </div>
            </div>
        </form>



        <script>
            // Function to display the modal when "Artificial Insemination" is selected
            function showInseminationModal() {
                const modal = document.getElementById('inseminationModal');
                modal.style.display = 'flex';
            }

            // Function to hide the modal
            function hideInseminationModal() {
                const modal = document.getElementById('inseminationModal');
                modal.style.display = 'none';
            }

            // Function to handle saving insemination details
            function saveInseminationDetails() {
                // Add your logic to save the details here
                // You can access the values using document.getElementById or other methods
                hideInseminationModal(); // Close the modal after saving
            }

            // Event listener to show the modal when "Artificial Insemination" is selected
            document.getElementById('selectAction').addEventListener('change', function() {
                if (this.value === 'insemination') {
                    showInseminationModal();
                }
            });

            function cancelInseminationModal() {
                var modal = document.getElementById("inseminationModal");

                // Your logic for canceling the insemination, assuming it was successful
                var inseminationCanceledSuccessfully = true; // Set this based on your specific condition

                if (inseminationCanceledSuccessfully) {
                    location.reload(); // Reload the page only if the operation was successful
                } else {
                    modal.style.display = "none"; // Close the modal if the operation was not successful
                }
            }
        </script>


        <!------------------------------------fill the input for the id automaticlly --------------------------->

        <script>
            // Function to display the modal when "Artificial Insemination" is selected
            function showInseminationModal() {
                const modal = document.getElementById('inseminationModal');
                const selectAction = document.getElementById('selectAction');
                const idCowInput = document.querySelector('input[name="id_cow"]');
                const cowNameInput = document.querySelector('input[name="cow_name"]');

                // Check if "Artificial Insemination" is selected
                if (selectAction.value === 'insemination') {
                    // Get the ID and Cow_Name of the selected cow (assuming the first one for simplicity)
                    const selectedCows = document.querySelectorAll('.modern_checkbox:checked');
                    if (selectedCows.length > 0) {
                        const selectedCowId = selectedCows[0].value;
                        const selectedCowName = document.querySelector(`.modern_checkbox[value="${selectedCowId}"]`)
                            .closest('tr')
                            .querySelector('.cow-name')
                            .innerText;

                        // Populate the id_cow input with the selected cow's ID
                        idCowInput.value = selectedCowId;

                        // Populate the cow_name input with the selected cow's Cow_Name
                        cowNameInput.value = selectedCowName;
                    }
                }

                modal.style.display = 'flex';
            }
        </script>

        <!------------------------------------------------------------------------------------------------------->



        <!----------------==============time automaticly script ========================-->
        <script>
            // Get the current date in the format "YYYY-MM-DD"
            function getCurrentDate() {
                const today = new Date();
                const year = today.getFullYear();
                const month = (today.getMonth() + 1).toString().padStart(2, '0');
                const day = today.getDate().toString().padStart(2, '0');
                return `${year}-${month}-${day}`;
            }

            // Set the default value of the date input to the current date
            document.getElementById('iaDate').value = getCurrentDate();
        </script>






        <?php
        if ($result) {
            echo "<div class='table-container'>";
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th class='select_button'>Select</th>"; // New column for selection
            echo "<th>Cow Name</th>";
            echo "<th>Gender</th>";
            echo "<th>Breed</th>";
            echo "<th>Date of Birth</th>";
            echo "<th>Actions</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='select-column'><input type='checkbox' class='modern_checkbox' name='selected_cows[]' value='{$row['id']}' style='width: 20px; height: 20px; background-color: #3498db; border: 1px solid #2980b9; color: #ffffff;'></td>";
                echo "<td class='highlight cow-name'>" . htmlspecialchars($row['Cow_Name']) . "</td>";
                echo "<td class='gender'>" . htmlspecialchars($row['Gender']) . "</td>";
                echo "<td class='highlight breed'>" . htmlspecialchars($row['Breed']) . "</td>";
                echo "<td class='date-of-birth'>" . htmlspecialchars($row['Date_of_Birth']) . "</td>";
                echo "<td class='actions-column'>";
                echo "<a href='view cow information/General_Information/index.php?cowinformation=" . urlencode($row['id']) . "' class='icon-link' title='View'><i class='fas fa-eye'></i> View</a>";
                echo "<a href='edit_page.php?id={$row['id']}' class='icon-link' title='Edit'><i class='fas fa-edit'></i> Edit</a>";
                echo " <a href='php/delete_cow_information.php?id=" . $row['id'] . "' class='icon-link' title='Delete' onclick='deleteFunction()'><i class='fas fa-trash'></i> Delete</a>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";

            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                var checkboxes = document.querySelectorAll('.modern_checkbox');
                var selectAllCheckbox = document.getElementById('selectAllCheckbox');
                var countDisplay = document.getElementById('countDisplay');
                var selectAction = document.getElementById('selectAction');
        
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('change', function() {
                        updateRowStyles();
                        checkCountAndDisableSelect();
                    });
                });
        
                selectAllCheckbox.addEventListener('change', function() {
                    checkboxes.forEach(function(checkbox) {
                        checkbox.checked = selectAllCheckbox.checked;
                    });
        
                    updateRowStyles();
                    checkCountAndDisableSelect();
                });
        
                function updateRowStyles() {
                    checkboxes.forEach(function(checkbox) {
                        var rowIndex = checkbox.closest('tr').rowIndex;
                        var cells = document.querySelectorAll('tr:nth-child(' + rowIndex + ') td.cow-name, tr:nth-child(' + rowIndex + ') td.gender, tr:nth-child(' + rowIndex + ') td.breed, tr:nth-child(' + rowIndex + ') td.date-of-birth, tr:nth-child(' + rowIndex + ') td.actions-column');
        
                        if (checkbox.checked) {
                            cells.forEach(function(cell) {
                                cell.style.backgroundColor = '#dedeee';
                                cell.style.color = 'black';
                            });
                        } else {
                            cells.forEach(function(cell) {
                                cell.style.backgroundColor = '';
                                cell.style.color = '';
                            });
                        }
                    });
        
                    var selectedCount = document.querySelectorAll('.modern_checkbox:checked').length;
                    countDisplay.textContent = selectedCount;
                }
        
                function checkCountAndDisableSelect() {
                    var selectedCount = document.querySelectorAll('.modern_checkbox:checked').length;
                    selectAction.disabled = (selectedCount === 0);
                }
        
                // Call the function on page load to disable the select initially
                checkCountAndDisableSelect();
            });
        </script>";

            echo "</div>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);

        // New connection for the count query
        $conn_count = mysqli_connect($host, $username, $password, $cow_information);

        if (!$conn_count) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $count_query = "SELECT COUNT(*) AS total_cows FROM cow_information";
        $count_result = mysqli_query($conn_count, $count_query);



        mysqli_close($conn_count);

        if (!$tableDisplayed) {
        }

        ?>







        <!-----------------------------------------------------THE END FOR GET DATA BASE ------------------------------------------!>

<!------------------------------------card off the cow------------------------------------------>

        <form action="php/Cow Information.php" method="post" onsubmit="return validateForm()">
            <div class="card-container">
                <div class="overlay" id="overlay"></div>

                <div class="card" id="cowCard">
                    <div class="card-header">
                        <h2>Cow Information</h2>
                        <i class="fas fa-times icon-card" onclick="hideCard()" style="cursor: pointer;"></i>
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <label for="name"><i class="fas fa-pen icon-card"></i> Name:</label>
                            <input name="Cow_Name" type="text" id="name" placeholder="Enter cow's name">
                        </div>
                        <div class="input-group">
                            <label for="dob"><i class="fas fa-calendar-alt icon-card"></i> Date of Birth:</label>
                            <input name="Date_of_Birth" type="date" id="dob">
                        </div>
                        <div class="input-group">
                            <label for="gender"><i class="fas fa-venus-mars icon-card"></i> Gender:</label>
                            <select id="gender" name="Gender">

                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="weight"><i class="fas fa-balance-scale icon-card"></i> Weight (kg):</label>
                            <input name="Weight_kg" type="number" id="weight" placeholder="Enter cow's weight">

                        </div>
                        <div class="input-group">
                            <label for="motherName"><i class="fas fa-venus icon-card"></i> Mother of the
                                Cow:</label>
                            <input name="Mother_of_the_Cow" type="text" id="motherName" placeholder="Enter mother's name">
                        </div>
                        <div class="input-group">
                            <label for="fatherName"><i class="fas fa-mars icon-card"></i> Father of the Cow:</label>
                            <input name="Father_of_the_Cow" type="text" id="fatherName" placeholder="Enter father's name">
                        </div>
                        <div class="input-group">
                            <label for="breed"><i class="fas fa-dna icon-card"></i> Breed:</label>
                            <select id="breed" name="Breed">
                                <option value="holstein">Holstein</option>
                                <option value="angus">Angus</option>
                                <option value="hereford">Hereford</option>
                                <option value="jersey">Jersey</option>
                                <option value="simmental">Simmental</option>
                                <option value="guernsey">Guernsey</option>
                                <option value="limousin">Limousin</option>
                                <option value="charolais">Charolais</option>
                                <option value="shorthorn">Shorthorn</option>
                                <option value="brownswiss">Brown Swiss</option>
                                <option value="ayrshire">Ayrshire</option>
                                <option value="dexter">Dexter</option>
                                <option value="galloway">Galloway</option>
                                <option value="beltedgalloway">Belted Galloway</option>
                                <option value="longhorn">Longhorn</option>
                                <option value="highland">Highland</option>
                                <option value="saler">Saler</option>
                                <option value="chianina">Chianina</option>
                                <option value="gelbvieh">Gelbvieh</option>
                                <option value="montbeliarde">Montbeliarde</option>
                                <option value="other">Other</option>
                                <!-- Add more breed options as needed -->
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="Number of Births"><i class="fas fa-baby icon-card"></i> Number of
                                Births:</label>
                            <select id="Number of Births" name="Number_of_Births">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>

                                <!-- Add more Number of Births options as needed -->
                            </select>
                        </div>


                        <div class="input-group">
                            <label for="sellerName"><i class="fas fa-user icon-card"></i> Seller Name:</label>
                            <input name="Seller_Name" type="text" id="sellerName" placeholder="Number of the exporting country or Seller Name">
                        </div>

                        <div class="input-group">
                            <label for="purchaseDate"><i class="fas fa-calendar-alt icon-card"></i> Date of
                                Purchase:</label>
                            <input name="Date_of_Purchase" type="date" id="purchaseDate">




                            <label for="">
                                <h3 class="second-page-card">
                                    <span class="icon">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                    Save it to add more information.
                                </h3>
                            </label>



                        </div>





                        <div id="dynamic-content-container"></div>




                        <!-- Add more input fields for other information -->
                        <button class="save-button" onclick="saveCow()">Save</button>

                    </div>
                </div>
            </div>
        </form>



        <!-- Scripts Files -->
        <script src="js/all.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
        <script src="js/mycharts.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-Y3nXGz/L+aMMAIl5TI43s6ZRrWM+xSQ6wBh06jFQhLjLhj/bWahj6QuLrAUiZ5ye" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyD8Dt3V/Jb5Lm0l6U5nhI8xa1dIRddTb" crossorigin="anonymous">
        </script>
</body>

</html>