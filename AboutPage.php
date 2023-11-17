<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECRET MOVIE</title>
    <link rel="icon" href="images\3841825_cinema_film_movie_multimedia_player_icon.ico" type="image/x-icon"/>
    <?php include "styleSheet\styleConnectio.php"; ?>
    <style>
        p,ul {
            color:white;
            font-size: 18px;
        }
    </style>
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

        <div class="transparent-box" id="element" style="text-align: center;">
            <header>
            <h1 style="text-align: center; color: white; font-weight: bold;">Welcome to Our Website</h1>
            </header>

            <section id="about-us">
                <h2 style="text-align: center; color: white; font-weight: bold;">About Us</h2>
                <p>
                    We are a passionate team dedicated to providing quality services and products to our customers.<br> Our journey began in 2001 April 03, and since then, we have been committed to making a difference.
                </p>

                <h3 style="text-align: center; color: white; font-weight: bold;">Our Mission</h3>
                <p>
                Our mission is to celebrate the magic of cinema and connect film enthusiasts from all walks of life.
                <br> We strive to provide a platform where people can explore, appreciate, and discuss the art of filmmaking.
                <br> Our website is dedicated to bringing you the latest in the world of movies, from blockbusters to indie gems, classic films to contemporary masterpieces.
                <br> We aim to foster a vibrant community where film lovers can share their passion, engage in thoughtful conversations, 
                <br>and be inspired by the diverse stories and talents that make up the cinematic universe. 
                <br>Through our commitment to quality content, insightful reviews, and engaging discussions, 
                <br>we aspire to be your ultimate destination for everything related to the silver screen.. 
                <br>We aim to curate a diverse selection of films, ranging from blockbuster hits to hidden indie gems, 
                <br>timeless classics to contemporary masterpieces, with the intention of catering to the diverse tastes of every film enthusiast. 
                <br>Our goal is to provide insightful reviews, thought-provoking articles, and in-depth analyses, enriching your understanding and appreciation of the cinematic world. 
                <br>Additionally, we aspire to foster a vibrant community where film enthusiasts can come together, engage in meaningful conversations, 
                <br>and share their unwavering passion for the art of storytelling through film.
                </p>

                <h3 style="text-align: center; color: white; font-weight: bold;">Our Team</h3>
                <p>
                    Meet the individuals who drive our success
                </p>
                <ul style="list-style-type: none;">
                    <li><strong>Heshan Santush</strong> - Founder and CEO</li>
                    <li><strong>Kavi fernando</strong> - Marketing Director</li>
                    <li><strong>Pubudu Perera</strong> - Lead Developer</li>
                    <li><strong>Nisal</strong> - Customer Relations</li>
                    <li><strong>Vishan</strong> - Customer Relations</li>
                </ul>
            </section>

            <!-- You can add more sections, such as 'Our Values,' 'Our History,' etc. -->

            <footer>
                <br><br>
                <p style="text-align: center; color: white; font-weight: bold;">&copy; 2023 Our Website</p>
            </footer>
        </div>
    <!-- Add the necessary JavaScript for the flip card effect here -->
</body>
</html>
