<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECRET MOVIE</title>
    <link rel="icon" href="images\3841825_cinema_film_movie_multimedia_player_icon.ico" type="image/x-icon"/>
    <?php include "styleSheet\styleConnectio.php"; ?>
</head>
<body>
    <div class="container">
        <div class="transparent-box" style="top: 15px; height: 70px; width: 96%; left: 2%;">
            <div style="margin-top: 10px; width: 200px;">
                <img class="img1" src="images/1.png" style="width: 200px; height: 50px;">
            </div>
            <div style="width: 70%; height: 50px; position: absolute; left: 260px;">
                <?php include "navigation.php";?>
            </div>
            <?php include 'loginLogOut.php' ?>
        </div>

        <div class="transparent-box" id="element">
            <!-- Your content goes here -->
            <!-- <div class="saved-movie-cart"></div> -->
            <?php include 'saveItemMain.php';
            ?>

        </div>

    </div>
    <!-- Add the necessary JavaScript for the flip card effect here -->

</body>
</html>
