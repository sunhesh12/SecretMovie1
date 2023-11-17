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
                </div>
                <div class="transparent-box" id="element" style="height: 500px; width: 500px;">
                    <div>
                        <h1 style="text-align: center; color: rgb(35, 34, 36); font-weight: bold;">SIGN UP</h1>
                    </div>
                    <div>
                        <form action="singupDb.php" method="post" name="myForm" onsubmit="return validateForm()" required>

                            <div class="singupDiv">
                                <input type="text" class="pass" id="cusUName" name="cusUName" placeholder="Enter your user-name">
                            </div>

                            <div class="singupDiv">
                                <input type="text" class="pass" id="cusName" name="cusName" placeholder="Enter your name" >
                            </div>

                            <div class="singupDiv">
                                <input type="email" class="pass" id="cusEmail" name="cusEmail" placeholder="Enter your E-mail" >
                            </div>

                            <div class="singupDiv">
                                <input type="password" class="pass" name="password" placeholder="Enter your password" id="passwordField1">
                                <div style="text-align: center; width: 40px; height: 40px; position: absolute; left: 78%;">
                                    <img style="margin-top: 30%;" src="images/cloesEye.png" alt="Show Password" class="toggle-password" id="togglePassword1" onclick="togglePasswordVisibility1()">
                                </div>
                            </div>

                            <div class="singupDiv">
                                <input type="password" class="pass" name="ConPassword" placeholder="Enter your Confirm password" id="passwordField2">
                                <div style="text-align: center; width: 40px; height: 40px; position: absolute; left: 78%;">
                                    <img style="margin-top: 30%;" src="images/cloesEye.png" alt="Show Password" class="toggle-password" id="togglePassword2" onclick="togglePasswordVisibility2()">
                                </div>
                            </div>

                            <div style="height: 50px; width: 450px; margin-top: 20px; margin-left: 25px; display: flex; justify-content: center; align-items: center;">
                            <button class="logIn" value="singupButton" type="submit" id="register-button" >Register</button>
                        </form>
                    </div>                
                </div>                
            </div>
            <?php include 'neonLogo.php'; ?>
        <script src="SingUpPageValidation.js"></script>
    </body>
</html>