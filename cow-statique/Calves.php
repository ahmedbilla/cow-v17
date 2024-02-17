<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">






        <title>Calves</title>
        <!-------------------------------------------------------style of the table--------------------------------------------------->


    </head>

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
                    <span>Cow Statistics/</span> <span style="color: #5D596C;">Calves</span>
                </h4>

            </Div>
            <!--add icone-->
            <button class="add-button" onclick="showCard()">
                <i class="fas fa-plus icon" style="color: white;margin: auto;"></i>
            </button>






            <!-- Scripts Files -->
            <script src="js/all.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
            <script src="js/mycharts.js"></script>
            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/main.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-Y3nXGz/L+aMMAIl5TI43s6ZRrWM+xSQ6wBh06jFQhLjLhj/bWahj6QuLrAUiZ5ye" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyD8Dt3V/Jb5Lm0l6U5nhI8xa1dIRddTb" crossorigin="anonymous"></script>
    </body>

    </html>
</body>

</html>