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
        echo '           <form action="LogInPage.php">';
        echo '               <button class="add-to-cart">Save Movie</button>';
        echo '           </form>';
    } else {
        echo '           <form action="saveItemDb.php" method="POST">';
        echo '               <button class="add-to-cart" type="submit" name="saveMovie" value="'.$id.'">Save Movie</button>';
        echo '           </form>';
    }   
?>
