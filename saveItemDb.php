<?php
include 'DataBaseFile\contodb.php';

$query12 = "SELECT username FROM Currentlogin ORDER BY username DESC LIMIT 1";
$result12 = $conn1->query($query12);

if ($result12) {
    $row12 = $result12->fetch_assoc();

    if ($row12) {
        $lastUsername = $row12['username']; // Retrieve the last username
    } else {
        echo "No data found";
    }
} else {
    echo "Query failed: " . $conn1->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["saveMovie"])) {
    $movieId = $_POST["saveMovie"]; // Assuming "saveMovie" is the ID of the movie to be saved

    // You should adjust the stored procedure call according to your database structure
    $query = "CALL InsertSaveMovie('$lastUsername', '$movieId')"; // Adjust the parameter names as needed

    if ($conn1->query($query) === TRUE) {
        // Redirect to another page or display a success message
        header('Location: flip.php');
        $conn1->close();
        exit();
    } else {
        echo "Error saving movie: " . $conn1->error;
    }
}

$conn1->close();
?>
