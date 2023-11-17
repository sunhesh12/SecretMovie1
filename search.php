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
<?php
$search="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'DataBaseFile\contodb.php';

    // Get the search term from the form input
    $search = $_POST["search"];

    // Use a prepared statement to avoid SQL injection
    $sql = "SELECT Movie_name, Movie_img_pic, Movie_Description, Movie_url FROM movies WHERE Movie_name LIKE ?";
    $stmt = $conn1->prepare($sql);
    $searchTerm = "%" . $search . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $movieName = $row["Movie_name"];
            $imageSrc = $row["Movie_img_pic"];
            $description = $row["Movie_Description"];
            $movieUrl = $row["Movie_url"];

            // Output the Movie_name
            echo '<div class="flip-card" style="width: 200px; height: 300px; perspective: 1000px;">';
            echo '   <div class="flip-card-inner">';
            echo '       <div class="flip-card-front">';
            echo "           <img src=\"$imageSrc\" alt=\"$movieName\" style=\"width: 100%; height: 100%;\">";
            echo '       </div>';
            echo '       <div class="flip-card-back">';
            echo "           <h3 style=\"color: #eef3f0;\">$movieName</h3>";
            echo '             <div style="width:200px;height:130px; justify-content: center;
                                align-items: center; Overflow-y:scroll; Overflow-x:scroll; 
                                overflow: auto;margin-top:-20px;">';
            echo "                   <p style=\"color: #eef3f0;\">$description</p>";
            echo "              </div>";
            echo '           <form action="LogInPage.php">';
            echo '               <button class="add-to-cart">Save Movie</button>';
            echo '           </form>';
            echo "           <form action=\"playMovie.php\" method=\"get\">";
            echo '               <a href="'.$movieUrl.'" style="text-decoration:none;"><button class="Watch-Now" type="submit" name="playVideo">Watch Now</button></a>';
            echo '           </form>';
            echo '       </div>';
            echo '   </div>';
            echo '</div>';
        }
    } else {
        echo "No records found";
    }

    $stmt->close();
    $conn1->close();
}
?>
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


