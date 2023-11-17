<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECRET MOVIE</title>
    <link rel="icon" href="images\3841825_cinema_film_movie_multimedia_player_icon.ico" type="image/x-icon"/>
    <?php include "styleSheet\styleConnectio.php"; ?>
    <style>
        p {
            color:black;
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
            <!-- Your content goes here -->
            <h1 style="text-align: center; color: white; font-weight: bold;">Contact Details</h1>
            <p>If you have any questions or need to reach us, please feel free to contact us:</p>

            <h2 style="text-align: center; color: white; font-weight: bold;">Contact Information</h2>
            <p><strong>Email:</strong> <a href="mailto:mrsecreti2022@gmail.com" style="text-decoration:none; color:black">mrsecreti2022@gmail.com</a></p>
            <p><strong>Phone:</strong> +94 76 330 6301</p>

            <h2 style="text-align: center; color: white; font-weight: bold;">Address</h2>
            <p><strong>Street:</strong> 123 Main Street</p>
            <p><strong>City:</strong> Downtown</p>
            <p><strong>State:</strong> Colombo</p>
            <p><strong>Zip Code:</strong> 12345</p>
            <p><strong>Country:</strong> Sri Lanka</p>

            <h2 style="text-align: center; color: white; font-weight: bold;">Business Hours</h2>
            <p><strong>Monday - Friday:</strong> 9:00 AM - 5:00 PM</p>
            <p><strong>Saturday- Sunday:</strong> 10:00 AM - 2:00 PM</p>

            <h2 style="text-align: center; color: white; font-weight: bold;">Map</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.867905626732!2d79.86804107404848!3d6.906395118597373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259790bddd389%3A0x18b651ed7fc62f32!2sNIBM%20Colombo!5e0!3m2!1sen!2slk!4v1698210346161!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <h2 style="text-align: center; color: white; font-weight: bold;">Contact Form</h2>
            <form action="submit.php" method="post">
                <!-- <label for="name" class="pass">Name:</label> -->
                <input type="text" id="name" name="name" required class="pass" style="width:400px;height:15px; padding:20px;" placeholder="Enter your name"><br><br>
                <!-- <label for="email">Email:</label> -->
                <input type="email" id="email" name="email" required class="pass" style="width:400px ;height:15px; padding:20px;" placeholder="Enter your Email"><br><br>
                <!-- <label for="message">Message:</label><br> -->
                <textarea id="message" name="message" rows="4" cols="50" required class="pass" style="width:600px ;height:200px; padding:20px; font-size:15px;" placeholder="Enter your Message"></textarea><br><br>
                <input type="submit" value="Submit" class="singUp">
            </form>
            <br><br>
        </div>
    </div>


    <!-- Add the necessary JavaScript for the flip card effect here -->
</body>
</html>
