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

        /* Animation definition */
    }

    #circularTool {
        position: relative;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background-color: #ffffff;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #circularCalendar {
        position: absolute;
        width: 90%;
        height: 90%;
        border-radius: 50%;
        background-color: #eaeaea;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
    }

    #cattleIcons {
        position: absolute;
        top: 10px;
        left: 10px;
        /* Add specific styles for cattle icons */
    }

    button {
        position: absolute;
        bottom: 10px;
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 50%;
        background-color: #4CAF50;
        color: white;
        font-size: 18px;
        cursor: pointer;
        outline: none;
    }

    button#prev {
        left: 10px;
    }

    button#next {
        right: 10px;
    }

    button:hover {
        background-color: #45a049;
    }


    /**********************************************calendar*****************************************************/
    .calendar {
        max-width: 600px;
        background-color: #f9f9f9;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
        margin-top: 60px;
    }

    .header {
        background-color: #3498db;
        color: #fff;
        padding: 20px;
        font-size: 28px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .months {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    .month {
        position: relative;
        width: 23%;
        margin-bottom: 20px;
        padding: 15px;
        background-color: #ecf0f1;
        border-radius: 8px;
        transition: background-color 0.3s ease-in-out;
        cursor: pointer;
    }

    .month:hover {
        background-color: #bdc3c7;
    }

    .dot {
        position: absolute;
        top: 5px;
        right: 5px;
        width: 10px;
        height: 10px;
        background-color: #e74c3c;
        border-radius: 50%;
    }

    /*********************************************************calander pomput**************************/

    .info-panel {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 377px;
        transform: translate(-50%, -50%);
        z-index: 1000;
        display: none;
        background-color: #3498db;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        color: #fff;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #fff;
    }

    .form-group input,
    .form-group textarea {
        width: calc(100% - 20px);
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #333;
        margin-top: 5px;
    }

    .save-button-milk-information {
        background-color: #2ecc71;
        /* Green color */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 76px;
        position: relative;
        top: 10px;
    }

    .save-button-milk-information:hover {
        background-color: #27ae60;
        /* Darker green color on hover */
    }

    .close-button {
        margin-right: 10px;
    }


    .milk-production-title {
        color: #3366cc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 36px;
        text-align: center;
        margin-bottom: 20px;
        position: relative;
    }

    .milk-production-title::after {
        content: '\2022';
        color: #ff9900;
        margin-left: 10px;
    }

    @keyframes titleAnimation {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .milk-production-title:hover {
        animation: titleAnimation 0.5s ease-in-out infinite;
    }

    /*******************************************************************chek mark off month***********************************************/

    /*********************************************************************style off view information************* */
    .milk-production-table {
        width: 95%;
        border-collapse: collapse;
        font-family: 'Arial', sans-serif;
        background-color: #3498db;
        border-radius: 15px;
        border: none;
    }

    .year-column {
        vertical-align: top;
        width: 50px;
        border: none;
    }

    .year-box {
        background-color: #82b64f;
        color: #fff;
        padding: 10px;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        font-size: 20px;
        font-weight: bold;
        height: 100%;
        border-radius: 15px;
        box-shadow: 1px 1px 15px gray;
        border: none;
        transform: rotate(180deg);
    }

    .month-record {
        margin-bottom: 10px;
        padding: 10px;
        background-color: white;
        box-shadow: 1px 1px 15px gray;
        border-radius: 15px;
        border: none;
    }

    .months_style,
    .amount_of_milk_style,
    .price_of_milk_style,
    .note_style {
        margin: 0;
        font-size: 16px;
        color: #333;

    }

    .icon-style {
        margin-right: 5px;
        color: #3498db;
        /* Modern blue color for the icon */
    }

    /*************************************************************valide to entre information***************** */
    /* Styling for the modal */
    .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #f44336;
        color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        animation: fadeInOut 3s ease-in-out;
    }

    /* Keyframe animation for fade in and out */
    @keyframes fadeInOut {

        0%,
        100% {
            opacity: 0;
        }

        10%,
        90% {
            opacity: 1;
        }
    }

    ::-webkit-scrollbar {
        width: 0px;
        height: 0px;
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

    <!--------------------------------------------------calander------------------------------------------------------>


    <form action="../../php/Milk_Production.php" method="post" onsubmit="return validateForm()">
        <div class="calendar" id="calendar">
            <div class="header" id="yearHeader"></div>
            <div class="months" id="monthsContainer"></div>
        </div>

        <div class="overlay" id="overlay" onclick="closeInfoPanel()"></div>

        <div class="info-panel" id="infoPanel">
            <div class="close-button" onclick="closeInfoPanel()"><i class="fas fa-times"></i></div>

            <h2 id="infoMonth"></h2>

            <!-- Input field where you want to display the cowId -->
            <input name="id_cow" type="hidden" id="idCowInput">

            <div class="form-group">
                <input name="months" type="hidden" id="selectedMonth">
                <input name="years" type="hidden">
                <label for="milkAmount">
                    <i class="fas fa-flask"></i> <!-- Font Awesome flask icon -->
                    Amount of Milk (liters)
                </label>
                <input name="amount_of_milk" type="number" id="milkAmount" placeholder="Enter amount of milk">
            </div>
            <div class="form-group">
                <label for="riceAmount">
                    <i class="fas fa-dollar-sign"></i> <!-- Font Awesome dollar sign icon -->
                    Milk Price
                </label>
                <input name="price_of_milk" type="number" step="0.01" id="riceAmount" placeholder="The price of milk per liter">

            </div>

            <div class="form-group">
                <label for="note">
                    <i class="fas fa-sticky-note"></i> <!-- Font Awesome sticky note icon -->
                    Note
                </label>
                <textarea name="note" id="note" placeholder="Enter a note"></textarea>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Get the textarea element
                    var noteTextarea = document.getElementById('note');

                    // Set default value to "nothing" if the textarea is empty
                    if (noteTextarea.value.trim() === '') {
                        noteTextarea.value = 'No note';
                    }
                });
            </script>
            <button class="save-button-milk-information" onclick="saveInfo()">Save</button>

        </div>

        <!-- Modal for displaying the message -->
        <div id="myModal" class="modal">
            <p>Please enter valid values for Amount of Milk and Milk Price.</p>
        </div>

        <!---------------------------------------------validtion to entre information------------------------------------------------------>
        <script>
            function validateForm() {
                // Get values from the form fields
                var milkAmount = document.getElementById('milkAmount').value;
                var milkPrice = document.getElementById('riceAmount').value;

                // Check if the values are empty or not numeric
                if (milkAmount === "" || isNaN(milkAmount) || milkPrice === "" || isNaN(milkPrice)) {
                    // Display the modal with an animation
                    var modal = document.getElementById('myModal');
                    modal.style.display = 'block';

                    // Hide the modal after 3 seconds
                    setTimeout(function() {
                        modal.style.display = 'none';
                    }, 3000);

                    // Return false to prevent the form from submitting
                    return false;
                }

                // If all checks pass, allow the form to be submitted
                return true;
            }
        </script>



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

            function openInfoPanel(month) {
                document.getElementById('overlay').style.display = 'block';
                document.getElementById('infoPanel').style.display = 'block';
                document.getElementById('infoMonth').innerText = month;

                // Set the selected month in the input field
                document.getElementById('selectedMonth').value = month;

                // Set the current year in the input field
                document.getElementsByName('years')[0].value = new Date().getFullYear();
            }

            function closeInfoPanel() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('infoPanel').style.display = 'none';
            }

            function saveInfo() {
                const milkAmount = document.getElementById('milkAmount').value;
                const riceAmount = document.getElementById('riceAmount').value;
                const note = document.getElementById('note').value;
                const selectedMonth = document.getElementById('selectedMonth').value;

                // You can save this information or perform any other actions with it
                console.log(`Milk Amount: ${milkAmount}, Rice of Milk: ${riceAmount}, Note: ${note}`);

                // Store the entered information for the selected month
                localStorage.setItem(`infoEntered_${selectedMonth}`, new Date().getMonth());

                // Close the info panel after saving
                closeInfoPanel();

                // Update the calendar to reflect the changes
                updateCalendar();
            }

            function updateCalendar() {
                const year = new Date().getFullYear();
                const currentMonth = new Date().getMonth();
                const calendar = document.getElementById('calendar');
                const yearHeader = document.getElementById('yearHeader');
                const monthsContainer = document.getElementById('monthsContainer');

                // Clear existing content
                yearHeader.innerHTML = '';
                monthsContainer.innerHTML = '';

                // Set the year and apply the corresponding year class
                yearHeader.innerText = year;
                calendar.className = `calendar year-${year}`;

                // Define the months array
                const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                    'September', 'October', 'November', 'December'
                ];

                // Create month elements
                months.forEach((month, index) => {
                    const monthElement = document.createElement('div');
                    monthElement.className = 'month';
                    monthElement.innerText = month;

                    // Add a red dot to the current month
                    if (index === currentMonth) {
                        const dot = document.createElement('div');
                        dot.className = 'dot';
                        monthElement.appendChild(dot);
                    }

                    // Check if the month is due for information entry
                    const monthDue = isMonthDue(month);
                    if (monthDue) {
                        monthElement.classList.add('danger');
                    } else {
                        monthElement.classList.add('entered'); // Add a class for entered months
                    }

                    monthElement.addEventListener('click', () => openInfoPanel(month));
                    monthsContainer.appendChild(monthElement);

                });
            }


            function isMonthDue(month) {
                const currentMonth = new Date().getMonth();
                const storedMonth = localStorage.getItem(`infoEntered_${month}`);

                // If the stored month is not the current month, it is due for information entry
                return !storedMonth || currentMonth > parseInt(storedMonth);
            }

            function checkAndUpdateYear() {
                const currentYear = new Date().getFullYear();
                const storedYear = localStorage.getItem('calendarYear');

                if (storedYear && currentYear > parseInt(storedYear)) {
                    // If stored year is outdated, update the calendar
                    localStorage.setItem('calendarYear', currentYear);
                    updateCalendar();
                } else if (!storedYear) {
                    // If no year is stored, set the current year and update the calendar
                    localStorage.setItem('calendarYear', currentYear);
                    updateCalendar();
                }
            }

            // Call the function to initialize the calendar
            updateCalendar();

            // Check and update the year every day
            setInterval(checkAndUpdateYear, 24 * 60 * 60 * 1000); // Check every 24 hours
            /*****************************************************chaque information ************************************* */
        </script>

    </form>


    <!----------------------------------------------end code off the insert from db------------------------------------>
    <!-----------------------------------------------------view code for milk------------------------------------------>

    <?php
    // Database connection setup
    $host = "localhost";
    $milk_production = "cow_farmer_ahmed_billa";
    $username = "root";
    $password = "";

    $milkproduction = "";
    if (isset($_GET["cowinformation"])) {
        $milkproduction = $_GET["cowinformation"];
    }
    $conn = mysqli_connect($host, $username, $password, $milk_production);

    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $query = "SELECT id, amount_of_milk, price_of_milk, note, years, months, id_cow FROM milk_production WHERE id_cow = '" . $milkproduction . "' ORDER BY years DESC";
    $result = mysqli_query($conn, $query);

    $currentYear = null;
    $totalMilk = 0;
    $totalIncome = 0;

    echo "<table class='milk-production-table'>";
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($currentYear !== $row['years']) {
                if ($currentYear !== null) {
                    // Close previous year's row if not the first year
                    echo "</td></tr>";
                }
                $currentYear = $row['years'];
                echo "<tr><td class='year-column'><div class='year-box modern-year-box'>" . $currentYear . "</div></td>";
                echo "<td class='month-info'>";
            }

            // Get the number of days in the month dynamically
            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, date("m", strtotime($row['months'])), $currentYear);

            echo "<div class='month-record modern-month-record'>";
            echo "<i class='icon-style fas fa-calendar-alt'></i>"; // Example icon
            echo "<h2 class='months_style modern-month-font' style='color: #333; font-family: Arial, sans-serif;'>" . $row['months'] . "</h2>";

            // Multiply the amount of milk by the number of days in the month
            $milkByDays = $row['amount_of_milk'] * $daysInMonth;

            echo "<p class='amount_of_milk_style' style='color: #555; font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif;'>Milk: " . $milkByDays . " Liters</p>";
            echo "<p class='price_of_milk_style' style='color: #777; font-family: 'Times New Roman', Times, serif;'>price: " . $row['price_of_milk'] . "DH</p>";
            echo "<p class='note_style' style='color: #999; font-family: 'Courier New', Courier, monospace;'>Note: " . $row['note'] . "</p>";
            echo "</div>";

            // Calculate totals
            $totalMilk += $milkByDays;
            $totalIncome += $milkByDays * $row['price_of_milk'];

            echo "</div>"; // Close month-record div
        }

        // Display totals
        echo "<tr><td colspan='2' class='totals-container'>";
        echo "<div class='total-milk-style' style='color: #FFFFFF; font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif;font-weight: 800;font-size: 20px'>Total Milk Production: {$totalMilk} Liters</div>";
        echo "<div class='total-income-style' style='color: #f9ff00; font-family: \"Times New Roman\",Trebuchet MS (sans-serif);font-weight: 800;font-size: 20px'>Total Income: {$totalIncome} DH</div>";

        echo "</td></tr>";

        mysqli_free_result($result);
        if ($currentYear !== null) {
            echo "</td></tr>"; // Close the last year's row
        }
    } else {
        echo "<tr><td>Error: " . mysqli_error($conn) . "</td></tr>";
    }

    echo "</table>";



    mysqli_close($conn);
    ?>














    <!-- Scripts Files -->
    <script src="../js/all.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="../js/mycharts.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>