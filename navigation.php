<?php
    include 'DataBaseFile\contodb.php';
    $query7 = "SELECT COUNT(*) AS count FROM Currentlogin";
    $result7 = $conn1->query($query7);

    if ($result7) {
        $row7 = $result7->fetch_assoc();

        if ($row7) {
            $count = $row7['count'];
        } else {
            echo "No data found";
        }
    } else {
        echo "Query failed: " . $conn1->error;
    }

    if ($count == 0) {
        echo '<nav>';
        echo '    <div class="navbar">';
        echo '        <a href="flip.php">Home</a>';
        // echo '        <a href="savedMoviePage.php" class="cart1">Saved Movie</a>';
        echo '        <a href="ContactPage.php">Contact</a>';
        echo '        <a href="AboutPage.php">About Us</a>';
        echo '        <form action="search.php" method="post">';
        echo '          <input type="text" class="search-bar" placeholder="Search" name="search"> ';
        echo '          <button class="search1" value="Search">🔍</button>';
        echo '        </form>';
        echo '    </div>';
        echo '</nav>';
    } else {
        echo '<nav>';
        echo '    <div class="navbar">';
        echo '        <a href="flip.php">Home</a>';
        echo '        <a href="savedMoviePage.php" class="cart1">Saved Movie</a>';
        echo '        <a href="ContactPage.php">Contact</a>';
        echo '        <a href="AboutPage.php">About Us</a>';
        echo '        <form action="search.php" method="post">';
        echo '          <input type="text" class="search-bar" placeholder="Search" name="search"> ';
        echo '          <button class="search1 " value="Search" >🔍</button>';
        echo '        </form>';
        echo '    </div>';
        echo '</nav>';
    }
?>

    
