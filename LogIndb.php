<?php
include 'DataBaseFile\contodb.php';

$UName = $_POST["username"];
$Password = $_POST["password"];

// Use prepared statements to avoid SQL injection
$sql2 = "SELECT cusPassword FROM signup WHERE cusUsername = ?";
$stmt = $conn1->prepare($sql2);
$stmt->bind_param("s",$UName);
$stmt->execute();
$stmt->bind_result($storedPassword);
$stmt->fetch();
$stmt->close();

if ($Password === $storedPassword) {
    $sql11 = "INSERT INTO login (username) VALUES ('$UName') ";
    $sql12 = "INSERT INTO Currentlogin (username) VALUES ('$UName') ";

    if (mysqli_query($conn1, $sql11) && mysqli_query($conn1, $sql12)) {
        echo "<script>alert('Logging successfully')</script>";

    } else {
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn1);
    }

    $_SESSION['logged_in'] = true;
    header('Location: flip.php');
    $conn1->close();
    exit();
} else {
    // echo 'Authentication failed';
    // You might want to redirect to a login page here.
    include 'LogInPage.php';
}

$conn1->close();
?>




 