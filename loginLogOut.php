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

    if ($count <= 0) {
        echo '<div class="divHLog" > ';
        echo '    <form method="post" style="position:absolute;">';
        echo '    <button class="Hlogin" id="homeLogin"><a href="LogInPage.php" style="text-decoration:none;">LOG IN</a></button>';
        echo '    </form>';
        echo '</div>';
    } else {
        
        if (isset($_POST['deleteButton'])) {
            // Check if the button with name 'deleteButton' was clicked
            $query6 = "DELETE FROM Currentlogin";
            $result6 = $conn1->query($query6);

            if ($result6) {
                // Delete was successful
                // $_SESSION['logged_in'] = true;
                header('Location: flip.php');
                $conn1->close();
                exit();
            } else {
                echo "Query failed: " . $conn1->error;
            }
        }
        echo '<div class="divHLog">';
        echo '    <form method="post" style="position:absolute;">';
        echo '        <button class="HlogOut" id="homeLogin" name="deleteButton">LOG OUT</button>';
        echo '    </form>';
        echo '</div>';
    }
?>
                
                

            
                
                    

            