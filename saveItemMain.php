<?php 
    include 'DataBaseFile\contodb.php';

    $query12 = "SELECT username FROM Currentlogin ORDER BY username DESC LIMIT 1";
    $result12 = $conn1->query($query12);
    
    if ($result12) {
        $row12 = $result12->fetch_assoc();
        
        if ($row12) {
            $lastUsername = $row12['username']; // Retrieve the last username
            // echo "Last username: " . $lastUsername;
        } else {
            echo "No data found";
        }
    } else {
        echo "Query failed: " . $conn1->error;
    }
                    
    $query1 = "SELECT CAST(count(*) AS SIGNED) AS max_id FROM movies AS m
                INNER JOIN (
                    SELECT DISTINCT Movie_id
                    FROM savedmovies
                    WHERE user_id = (
                        SELECT username
                        FROM Currentlogin
                        ORDER BY username DESC
                        LIMIT 1
                    )
                ) AS s ON m.id = s.Movie_id";
    $result1 = $conn1->query($query1);
    
    if ($result1) {
        $row1 = $result1->fetch_assoc(); // Fetch the result into an associative array
    
        if ($row1) {
            $y = (int)$row1['max_id']; // Cast the 'max_id' column value to an integer
            // echo "Number of movies: $x"; // Output the count
        }
    } else {
        echo "Query failed: " . $conn1->error;
    }
    
    $result1->close();
    $query = "SELECT DISTINCT Movie_id FROM savedmovies WHERE user_id = (SELECT username FROM Currentlogin ORDER BY username DESC LIMIT 1)";
    $result = $conn1->query($query);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $movieId = (int) $row['Movie_id'];
    
            // You can process the $movieId here, for example, display it or perform any other action
    
            $query2 = "SELECT Movie_img_pic FROM movies WHERE id = $movieId";
            $result2 = $conn1->query($query2);
            $query3 = "SELECT Movie_Description FROM movies WHERE id = $movieId";
            $result3 = $conn1->query($query3);
            $query4 = "SELECT Movie_name FROM movies WHERE id = $movieId";
            $result4 = $conn1->query($query4);
            $query5 = "SELECT Movie_url FROM movies WHERE id = $movieId";
            $result5 = $conn1->query($query5);
    
            if ($result2) {
                $row2 = $result2->fetch_assoc();
                $row3 = $result3->fetch_assoc();
                $row4 = $result4->fetch_assoc();
                $row5 = $result5->fetch_assoc();
    
                if ($row2 && $row3 && $row4 && $row5) {
                    $imageSrc = $row2['Movie_img_pic']; // Fetch the image source
                    $productName = $row4['Movie_name']; // Create product name
                    $description = $row3['Movie_Description'];
                    $movie_Url = $row5['Movie_url'];
                    createSavedMovie($imageSrc, $productName, $description,$movie_Url,$movieId);
                } else {
                    echo "No data found for Movie ID: $movieId";
                }
            } else {
                echo "Query failed for Movie ID: $movieId - " . $conn1->error;
            }
    
            // echo "Movie ID: $movieId<br>";
        }
    } else {
        echo "No movie IDs found";
    }
    
    // }
    function createSavedMovie($imageSrc, $productName,$description,$movie_Url,$movieId) {
        $mid=$movieId;
        echo "<div class=\"saved-movie-cart\">";
            echo"<div class=\"image-view\">";
                echo"<img src=\"$imageSrc\" alt=\"$productName\" style=\"width: 100%; height: 100%;\">";
            echo "</div>";
            echo"<div class=\"Movie-Name\">";
                echo"$productName";   
            echo "</div>";
            echo"<div class=\"Movie-description\">";
                echo"<p>$description</p>";   
            echo "</div>";
            echo'<div class="delete-watch-button">';
            echo'<div class="watch-button">';
            echo "           <form action=\"playMovie.php\" method=\"get\">";
            echo '               <a href="'.$movie_Url.'" style="text-decoration:none;"><button class="Watch-Now" type="submit" name="playVideo">Watch Now</button></a>';
            echo '           </form>';
                echo'</div>';
                echo'<div class="delete-button">';
            echo "           <form action=\"deleteMovie.php\" method=\"POST\">";
            echo '               <button class="delete-Now" type="submit" name="delete" value="'.$movieId.'">Delete</button>';
            echo '           </form>';
                echo'</div>';
            echo'</div>';
        echo "</div>";

    }
    $conn1->close();
?>