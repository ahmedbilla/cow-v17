<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Document</title>
    <script lang="js">
    function confirmDelete(id) {
        // Creating a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configuring the request: method (GET/POST), URL, and asynchronous flag (true/false)
        xhr.open('GET', '../../php/delete_notification.php?id=' + id, true);

        // Setting up a function that will be called whenever the readyState of the AJAX request changes
        xhr.onreadystatechange = function() {
            // Check if the request is complete (readyState 4) and was successful (status 200)
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response data here
                var res = xhr.responseText;

                console.log(res, 1);

                if (res === "1") {
                    document.getElementById("notif-" + id).remove()
                }
            }
        };

        // Sending the AJAX request
        xhr.send();

    }
    </script>
</head>


<style>
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
    z-index: auto;
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

.search-container {
    display: flex;
    border: 1px solid #ddd;
    border-radius: 25px;
    overflow: hidden;
}

.search-box {
    border: none;
    padding: 10px 20px;
    width: 300px;
    outline: none;
    font-size: 16px;
}

.search-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
}

.search-button:hover {
    background-color: #0056b3;
}

.search-container {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

#search-box {
    border: none;
    outline: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 50px 0 0 50px;
    width: 250px;
}

#search-button {
    padding: 10px;
    border: none;
    background: linear-gradient(45deg, #6e45e1, #88d3ce);
    color: white;
    border-radius: 0 50px 50px 0;
    cursor: pointer;
    outline: none;
}

#search-button svg {
    fill: white;
}

.search_bar {
    width: 20%;
    height: 70%;
    border-radius: 20px;
    margin-left: 30px;
    border: none;
}

.user {
    position: relative;
    width: 60px;
    height: 42px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
}
</style>

<body>
    <div class="topbar"
        style="width: 95%; height: 60px; margin-left: auto; margin-right: auto; background-color: white; margin-top: 18px; border-radius: 10px; box-shadow: 0 0 10px #dbdade;">

        <div class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="-5 -7 24 24">
                <path fill="currentColor"
                    d="M1 0h5a1 1 0 1 1 0 2H1a1 1 0 1 1 0-2m7 8h5a1 1 0 0 1 0 2H8a1 1 0 1 1 0-2M1 4h12a1 1 0 0 1 0 2H1a1 1 0 1 1 0-2" />
            </svg>

        </div>

        <input class="search_bar" type="search" placeholder="Search (Ctrl+/)">


        <!-- notificatio -->


        <div class="topbar" style="display: flex; align-items: center; justify-content: end; margin-right: 15px;">
            <iconify-icon id="notificationIcon" icon="mingcute:notification-line" class="iconify-hover"
                style="color: #6f6b7d; font-size: 2em; cursor: pointer; font-weight: 900; "
                onclick="toggleNotification()">
            </iconify-icon>

            <!-- Display the notification count -->
            <div id="notificationCount"
                style="border: 1px solid white; position: relative; top: -5px; color: white; font-weight: bold; width: 18px; height: 18px; border-radius: 100%; background-color: #EA5455; margin-left: -15px; margin-top: -10px; display: none; line-height: 18px; text-align: center;">
            </div>


        </div>

        <!-- Notification window (initially hidden) -->
        <div id="notificationWindow"
            style=" z-index: 7; display: none; position: absolute; top: 75px; right: 3%; background-color: #f8f8f8; padding: 20px; border: none; border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); max-width: 380px; min-width: 380px; min-height: 490px; max-height: 490px; overflow: auto;">
            <!-- Your notification content goes here -->
            <div>
                <h2 style="color: #4caf50; text-align: center; margin-bottom: 10px;">Notification</h2>

                <?php
                // Database connection setup
                $host = "localhost";
                $reminder_health = "cow_farmer_ahmed_billa";
                $username = "root";
                $password = "";

                $ReminderHealth = "";
                if (isset($_GET["cowinformation"])) {
                    $ReminderHealth = $_GET["cowinformation"];
                }
                $conn = mysqli_connect($host, $username, $password, $reminder_health);

                if (mysqli_connect_errno()) {
                    die("Failed to connect to MySQL: " . mysqli_connect_error());
                }

                $query = "SELECT id, Message_for_healt FROM reminder_health WHERE id_cow_send = '" . $ReminderHealth . "'";
                $result = mysqli_query($conn, $query);
                $messageCount = 0;

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $messageCount++;
                ?>
                <div id="notif-<?php echo $row['id']; ?>"
                    style="width: 100%; display: flex; align-items: center; padding: 10px; border-radius: 8px; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 15px; position: relative;">

                    <img style="width: 48px; height: 48px; border-radius: 50%; margin-right: 15px;"
                        src="../../../img/logo/LogoMilkdesign.jpeg" alt="">

                    <p style="flex-grow: 1; color: #555; text-align: start; font-size: 14px;">
                        <?php echo $row['Message_for_healt']; ?>
                    </p>

                    <a class="delete-button_notification" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                        <iconify-icon icon="ep:close-bold"
                            style="position: absolute; top: 2px; right: 2px; cursor: pointer; font-size: 20px; color: #888;">
                        </iconify-icon>
                    </a>
                </div>

                <?php
                    }
                    mysqli_free_result($result);
                } else {
                    echo "<p style='color: #f00; text-align: center;'>Error: " . mysqli_error($conn) . "</p>";
                }

                mysqli_close($conn);
                ?>
                <p style="text-align: center; color: #777; font-size: 12px;">Total Messages:
                    <?php echo $messageCount; ?></p>
            </div>
        </div>

        <script>
        function toggleNotification() {
            var notificationWindow = document.getElementById('notificationWindow');
            // Toggle the visibility of the notification window
            if (notificationWindow.style.display === 'block') {
                notificationWindow.style.display = 'none';
            } else {
                notificationWindow.style.display = 'block';
            }
            updateNotificationIcon();
        }

        function updateNotificationIcon() {
            var notificationIcon = document.getElementById('notificationIcon');
            var notificationCount = <?php echo $messageCount; ?>;

            // Check if the icon supports the data-badge attribute
            if (notificationIcon.hasAttribute('data-badge')) {
                notificationIcon.setAttribute('data-badge', notificationCount);
            } else {
                // If not, display the count in the separate element
                var notificationCountElement = document.getElementById('notificationCount');

                // Display or hide the count element based on the notification count
                if (notificationCount > 0) {
                    notificationCountElement.style.display = 'block';
                    notificationCountElement.innerText = notificationCount;
                } else {
                    notificationCountElement.style.display = 'none';
                }
            }
        }

        function handleIconClick() {
            // Add any additional logic for icon click
        }

        // Initial update of the notification icon
        updateNotificationIcon();
        </script>



        <!-- User Account -->
        <div class="user">

            <img src="../img/user/mi.png" alt="user image">


        </div>

</body>

</html>