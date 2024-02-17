<style>
    .icon svg {
        width: 3em;
        height: 3em;
    }
</style>
<div class="container">

    <!-- Navigation Section -->
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <img class="logo-cow" src="../img/logo/cow-removebg.png" alt="Icon">
                    </span>
                    <span class="title"></span>
                </a>
            </li>

            <li>
                <a href="../../index.php">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-7 -5 39 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>

                    </span>
                    <span class="title">Return</span>
                </a>
            </li>

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

            $query = "SELECT id, Cow_Name FROM cow_information WHERE id = '" . $cowinformation . "'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $row = mysqli_fetch_assoc($result);

                // Close the PHP tag before the HTML structure
            ?>

                <li>
                    <a href="../General_Information/index.php?cowinformation=<?php echo urlencode($row['id']); ?>">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-8 -7 40 35" stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                            </svg>
                        </span>
                        <span class="title">Total information</span>
                    </a>
                </li>
                <li>
                    <a href="../Milk Production/milk_production.php?cowinformation=<?php echo urlencode($row['id']); ?>">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 -9 25 34">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M8 2h8M9 2v2.789a4 4 0 0 1-.672 2.219l-.656.984A4 4 0 0 0 7 10.212V20a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-9.789a4 4 0 0 0-.672-2.219l-.656-.984A4 4 0 0 1 15 4.788V2">
                                    </path>
                                    <path d="M7 15a6.472 6.472 0 0 1 5 0a6.47 6.47 0 0 0 5 0"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="title">Milk Production</span>
                    </a>
                </li>
                <li>
                    <a href="../Health notebook/health_notbook.php?cowinformation=<?php echo urlencode($row['id']); ?>">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-8 -3 40 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </span>
                        <span class="title">Health notebook</span>
                    </a>
                </li>
                <li>
                    <a href="../statique/statique.php?cowinformation=<?php echo urlencode($row['id']); ?>">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-8 -2 40 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                            </svg>
                        </span>
                        <span class="title">Statique</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="-5 -4 37 24">
                                <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                <path fill="currentColor" d="M17.503 1a4 4 0 0 0-4 4v3l-.95.8c-.307.26-.46.39-.507.491a.5.5 0 0 0 .242.662c.1.047.302.047.704.047h9.02c.403 0 .604 0 .705-.047a.5.5 0 0 0 .242-.662c-.047-.101-.2-.231-.508-.49L21.503 8V5a4 4 0 0 0-4-4m1.5 10c-.219.583-.808 1-1.5 1c-.693 0-1.282-.417-1.5-1zM22 16.75V11h-1.5v5.75l-.006.143A1.75 1.75 0 0 1 18.75 18.5H5.25l-.144-.006A1.75 1.75 0 0 1 3.5 16.75V9.374l8.15 4.29l.097.042a.75.75 0 0 0 .602-.042l3.101-1.633a2.472 2.472 0 0 1-.388-.68L14.931 11h-.742L12 12.152L3.5 7.68v-.43l.006-.144A1.75 1.75 0 0 1 5.25 5.5h7.249V5c0-.342.034-.677.1-1H5.25l-.184.005A3.25 3.25 0 0 0 2 7.25v9.5l.005.184A3.25 3.25 0 0 0 5.25 20h13.5l.184-.005A3.25 3.25 0 0 0 22 16.75" />
                            </svg>
                        </span>
                        <span class="title">Reminders</span>
                    </a>
                </li>
        </ul>

    </div>

<?php
                mysqli_free_result($result);
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_close($conn);
?>