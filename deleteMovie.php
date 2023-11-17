<?php
include 'DataBaseFile\contodb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $movieId = $_POST["delete"];

    // Perform the SQL query to delete the movie with the given "moviid"
    $query = "DELETE FROM savedMovies WHERE Movie_id = $movieId";
    if ($conn1->query($query) === TRUE) {
        // echo "Movie deleted successfully";
        header('Location: savedMoviePage.php');
        $conn1->close();
        exit();
    } else {
        echo "Error deleting movie: " . $conn1->error;
    }

    $conn1->close();
}
?>
