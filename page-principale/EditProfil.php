<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/cow-removebg.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/all.css" type="text/css">
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.4.0/dist/css/ionicons.min.css" integrity="...">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <title>Dashboard Template</title>
</head>
<style>
    .EditProfilCrard {
        width: 95%;
        height: auto;
        background-color: black;
        margin-left: auto;
        margin-right: auto;
        margin-top: 70px;
        margin-bottom: 70px;
        border-radius: 15px;
        background-color: white;
        box-shadow: 0 0 10px #dbdade;

    }

    .ProfileDetails {
        font-size: 20px;
        color: #5d596c;
        position: relative;
        top: 20px;
        font-size: 1.125rem;
        font-weight: 500;
        right: -20px;
    }

    .addImgInput {
        margin-top: 57px;
        margin-left: 20px;
    }

    .avatar_img {
        border-radius: 10px;
    }

    /* Button styles */
    .btn-blue {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #007bff;
        /* Blue color */
        color: #fff;
        /* White text */
        border: 2px solid #007bff;
        /* Border color */
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Hover effect */
    .btn-blue:hover {
        background-color: #0056b3;
        /* Darker blue color on hover */
        border-color: #0056b3;
        cursor: pointer;
        /* Darker border color on hover */
    }

    .btn-label-secondary {
        color: #a8a8a8;
        background-color: #f1f1f2;
        border: none;
        width: 95px;
        border-radius: 5px;
        padding: 12px 20px;
        margin-left: 10px;
        cursor: pointer;

        /* Add a border to provide a clear boundary */
    }

    .btn-label-secondary:hover {
        background-color: #e0e0e1;
        /* Change the background color on hover if desired */
    }

    .text-muted {
        color: #a5a3ae;
    }

    .hrpremime {
        margin-top: 20px;
        margin-right: 20px;
        background-color: #5d596cc2;
    }

    /* Add any additional styling as needed */
    .user-info-container {
        display: flex;
        flex-wrap: wrap;
    }

    .input-group {
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        width: 48%;
        /* Adjust as needed */
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #5d596c;
        font-weight: 600;
        font-family: Arial, Helvetica, sans-serif;
    }

    input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 6px;
        height: 45px;
        margin-bottom: 10px;
    }

    .buttons-wrapper-tow {
        margin-top: 20px;
        margin-bottom: 30px;
        margin-left: 20px;
    }

    .btn {
        padding: 10px 20px;
        margin-right: 10px;
        cursor: pointer;

    }

    .btn-blue {
        background-color: #3498db;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
        border: none;
    }

    .btn-label-secondary {
        background-color: #ecf0f1;
        color: #a8aaae;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
    }
</style>

<body style="background-color: #f8f7fa;">

    <div class="container">
        <!-- Navigation Section -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <!-- Replace the ion-icon with an img tag -->
                            <img class="logo-cow" src="../img/logo/cow-removebg.png" alt="Icon">
                        </span>
                        <span class="title"></span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-9 -2 43 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14 12.25a3.75 3.75 0 1 1 3.75-3.75A3.75 3.75 0 0 1 14 12.25m0-6a2.25 2.25 0 1 0 2.25 2.25A2.25 2.25 0 0 0 14 6.25m7 13a.76.76 0 0 1-.75-.75c0-1.95-1.06-3.25-6.25-3.25s-6.25 1.3-6.25 3.25a.75.75 0 0 1-1.5 0c0-4.75 5.43-4.75 7.75-4.75s7.75 0 7.75 4.75a.76.76 0 0 1-.75.75M8.32 13.06H8a3 3 0 1 1 .58-6a.75.75 0 1 1-.15 1.49a1.46 1.46 0 0 0-1.09.34a1.47 1.47 0 0 0-.54 1a1.49 1.49 0 0 0 1.35 1.64a1.53 1.53 0 0 0 .93-.22a.75.75 0 0 1 .79 1.28a3 3 0 0 1-1.55.47M3 18.5a.76.76 0 0 1-.75-.75c0-2.7.72-4.5 4.25-4.5a.75.75 0 0 1 0 1.5c-2.35 0-2.75.75-2.75 3a.76.76 0 0 1-.75.75" />
                            </svg>
                        </span>
                        <span class="title">workers</span>
                    </a>
                </li>
                <li>
                    <a href="weather/index.html">
                        <span class="icon">
                            <!-- Replace "ion-icon" with your preferred icon library -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 48 48">
                                <path fill="currentColor" d="M21.502 40.027a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m-13.5-2a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3M26 12.01c6.337 0 9.932 4.194 10.455 9.26h.16c4.078 0 7.384 3.297 7.384 7.365S40.692 36 36.614 36h-21.23C11.306 36 8 32.703 8 28.635s3.306-7.365 7.384-7.365h.16c.526-5.099 4.118-9.26 10.455-9.26m0 2.495c-4.261 0-7.975 3.448-7.975 8.21c0 .755-.656 1.347-1.407 1.347h-1.421c-2.594 0-4.697 2.114-4.697 4.721c0 2.608 2.103 4.722 4.697 4.722h21.606c2.594 0 4.697-2.114 4.697-4.722c0-2.607-2.103-4.72-4.697-4.72h-1.42c-.752 0-1.408-.593-1.408-1.348c0-4.823-3.714-8.21-7.975-8.21M8.71 20.303a1.244 1.244 0 0 1-.558 1.57l-.115.055l-2.312.962a1.244 1.244 0 0 1-1.067-2.243l.115-.055l2.312-.962a1.244 1.244 0 0 1 1.625.673m13-9.64l-.061.019c-.925.302-1.785.702-2.571 1.19a5.5 5.5 0 0 0-6.826 7.95a9.275 9.275 0 0 0-2.126 1.086A7.883 7.883 0 0 1 21.71 10.662m-16.129.179l.127.046l2.32.989c.629.266.931.995.674 1.628c-.24.592-.882.89-1.48.711l-.126-.045l-2.319-.99a1.26 1.26 0 0 1-.675-1.628c.24-.591.883-.89 1.48-.711m7.369-6.174l.055.116l.96 2.306a1.25 1.25 0 0 1-2.255 1.072l-.055-.115l-.96-2.306a1.25 1.25 0 0 1 2.255-1.073m9.048-.56c.602.25.909.91.73 1.521l-.046.13l-.991 2.276a1.264 1.264 0 0 1-2.38-.837l.045-.13l.991-2.276a1.264 1.264 0 0 1 1.651-.684" />
                            </svg>
                        </span>
                        <span class="title">Weather</span>
                    </a>
                </li>

                <li>
                    <a href="medicine/index.html">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" d="M2 14c0-3.771 0-5.657 1.172-6.828C4.343 6 6.229 6 10 6h4c3.771 0 5.657 0 6.828 1.172c.654.653.943 1.528 1.07 2.828M22 14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172c-.654-.653-.943-1.528-1.07-2.828" />
                                    <path d="M16 6c0-1.886 0-2.828-.586-3.414C14.828 2 13.886 2 12 2c-1.886 0-2.828 0-3.414.586C8 3.172 8 4.114 8 6" />
                                    <path stroke-linecap="round" d="M13.5 14h-3m1.5-1.5v3" />
                                    <circle cx="12" cy="14" r="4" />
                                </g>
                            </svg>
                        </span>
                        <span class="title">Medicine</span>
                    </a>
                </li>


                <li>
                    <a id="logoutButton" href="../login.html">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" d="M8.002 7c.012-2.175.108-3.353.877-4.121C9.757 2 11.172 2 14 2h1c2.828 0 4.243 0 5.121.879C21 3.757 21 5.172 21 8v8c0 2.828 0 4.243-.879 5.121C19.243 22 17.828 22 15 22h-1c-2.828 0-4.243 0-5.121-.879c-.769-.768-.865-1.946-.877-4.121" />
                                    <path d="M8 19.5c-2.357 0-3.536 0-4.268-.732C3 18.035 3 16.857 3 14.5v-5c0-2.357 0-3.536.732-4.268C4.464 4.5 5.643 4.5 8 4.5" opacity=".5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H6m0 0l2 2m-2-2l2-2" />
                                </g>
                            </svg>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Main Section -->
        <div class="main">





            <?php include('../IncludeTheFile/notification_bar.php'); ?>
            <div class="accountMenu">
                <h3>Ahmed Billa<br /><span>Farmer</span></h3>
                <ul>
                    <li>
                        <img src="../img/user/user.png" alt="profile">
                        <a href="#">My Profile</a>
                    </li>
                    <li>
                        <img src="../img/user/edit.png" alt="profile">
                        <a href="EditProfil.php">Edit Profile</a>
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
                <span>Account Settings/</span> <span style="color: #5D596C;">Edit Profile</span>
            </h4>

        </Div>
        <!-- Cards -->
        <div class="EditProfilCrard">
            <h4 class="ProfileDetails">Profile Details</h4>
            <div class="addImgInput">
                <div class="addImgInput">
                    <div class="avatar-wrapper">
                        <img style="width: 91px; height: 91px;" id="userAvatar" src="../img/user/mi.png" alt="user-avatar" class="avatar_img">
                        <div class="overlay">
                            <label for="upload" class="btn btn-blue waves-effect waves-light">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="ti ti-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg" onchange="updateAvatar()">
                            </label>

                            <button type="button" class="btn btn-label-secondary account-image-reset waves-effect" onclick="resetAvatar()">
                                <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>
                        </div>
                    </div>

                    <div class="button-wrapper">
                        <div class="text-muted" id="imageDimensions">Allowed JPG, GIF, or PNG. Max size of 800KB</div>
                    </div>

                </div>

                <style>
                    .avatar_img {
                        border-radius: 10px;
                        width: 71px;
                        height: 71px;
                    }
                </style>

                <script>
                    // Variables to store original image data
                    var originalImageSrc = "../img/user/mi.png";
                    var originalImageDimensions = "Dimensions: 71 x 71";

                    function updateAvatar() {
                        var input = document.getElementById('upload');
                        var avatarImg = document.getElementById('userAvatar');
                        var imageDimensions = document.getElementById('imageDimensions');

                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                var image = new Image();
                                image.src = e.target.result;

                                image.onload = function() {
                                    var canvas = document.createElement('canvas');
                                    var ctx = canvas.getContext('2d');

                                    // Set the canvas size to the desired dimensions
                                    canvas.width = 81;
                                    canvas.height = 81;

                                    // Draw the image onto the canvas with the specified dimensions
                                    ctx.drawImage(image, 0, 0, 81, 81);

                                    // Update the image source with the canvas data URL
                                    avatarImg.src = canvas.toDataURL('image/png');

                                    // Update the displayed dimensions
                                    imageDimensions.textContent = "Dimensions: 71 x 71";
                                };
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    function resetAvatar() {
                        var avatarImg = document.getElementById('userAvatar');
                        var imageDimensions = document.getElementById('imageDimensions');

                        // Reset the image source and dimensions to the original values
                        avatarImg.src = originalImageSrc;
                        imageDimensions.textContent = originalImageDimensions;
                    }
                </script>
                <hr class="hrpremime">
            </div>
            <div class="user-info-container">
                <div class="input-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" placeholder="Enter your first name">
                </div>

                <div class="input-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Enter your last name">
                </div>

                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>

                <div class="input-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
                </div>

                <div class="input-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" placeholder="Enter your address">
                </div>

                <div class="input-group">
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country" placeholder="Enter your country">
                </div>



                <!-- Save and Cancel Buttons -->
                <div class="buttons-wrapper-tow">
                    <button class="btn btn-blue waves-effect waves-light" onclick="saveChanges()">Save Changes</button>
                    <button class="btn btn-label-secondary waves-effect" onclick="cancelChanges()">Cancel</button>
                </div>
            </div>


        </div>

        <script src="../js/all.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" integrity="..."></script>
        <script src="../js/mycharts.js"></script>
        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/main.js"></script>
</body>

</html>