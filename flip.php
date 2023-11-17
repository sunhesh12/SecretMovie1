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
            <div class="box">
                <section class="cart" style="height: 100%; border: none;">
                    <?php include 'mainMovieWindow.php' ?>
                </section>
            </div>
        </div>
    </div>
    <!-- Add the necessary JavaScript for the flip card effect here -->
    <script>
        // JavaScript to handle the Add to Cart button click events and update item counts
        const addToCartButtons = document.querySelectorAll('.addToCartButton');

        addToCartButtons.forEach(button => {
            button.addEventListener("click", function() {
                const countElement = this.getAttribute('data-count');
                const itemCount = parseInt(countElement);
                this.setAttribute('data-count', itemCount + 1);
                document.getElementById("cartItemCount").textContent = getTotalItemCount();
            });
        });

        function getTotalItemCount() {
            let total = 0;
            addToCartButtons.forEach(button => {
                total += parseInt(button.getAttribute('data-count'));
            });
            return total;
        }
    </script>
</body>
</html>
