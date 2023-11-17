<?php
        include 'DataBaseFile\contodb.php';
        $query1 = "SELECT CAST(MAX(id) AS SIGNED) AS max_id FROM movies";
        $result1 = $conn1->query($query1);
        
        if ($result1) {
            $row1 = $result1->fetch_assoc(); // Fetch the result into an associative array
        
            if ($row1) {
                $x = (int)$row1['max_id']; // Cast the 'max_id' column value to an integer
                // echo "Number of movies: $x"; // Output the count
            }
        } else {
            echo "Query failed: " . $conn1->error;
        }
        
        $result1->close();
        for ($i = 1; $i <=$x; $i++) {
            $query2 = "SELECT Movie_img_pic FROM movies WHERE id = $i";
            $result2 = $conn1->query($query2);
            $query3 = "SELECT Movie_Description FROM movies WHERE id = $i";
            $result3 = $conn1->query($query3);
            $query4 = "SELECT Movie_name FROM movies WHERE id = $i";
            $result4 = $conn1->query($query4);
            $query5 = "SELECT Movie_url FROM movies WHERE id = $i";
            $result5 = $conn1->query($query5);
            $id=$i;
            // $query20 = "SELECT id FROM movies WHERE id = $i";
            // $result20 = $conn1->query($query20);
        
            if ($result2) {
                $row2 = $result2->fetch_assoc();
                $row3 = $result3->fetch_assoc();
                $row4 = $result4->fetch_assoc();
                $row5 = $result5->fetch_assoc();
                // $row20 = $result20->fetch_assoc();
        
                if ($row2 && $row3 && $row4 && $row5 ) {
                    $imageSrc = $row2['Movie_img_pic']; // Fetch the image source
                    $productName = $row4['Movie_name']; // Create product name
                    $description = $row3['Movie_Description']; 
                    $movie_Url = $row5['Movie_url'];  
                    // $id =(int) $row20['id'];  
                    createProduct($imageSrc, $productName, $description,$movie_Url,$id);
                } else {
                    echo "No data found for ID $i";
                }
            } else {
                echo "Query failed: " . $conn1->error;
            }
        }


        function createProduct($imageSrc, $productName, $description,$movie_Url,$id) {
            echo '<div class="flip-card" style="width: 200px; height: 300px; perspective: 1000px;">';
            echo '   <div class="flip-card-inner">';
            echo '       <div class="flip-card-front">';
            echo "           <img src=\"$imageSrc\" alt=\"$productName\" style=\"width: 100%; height: 100%;\">";
            echo '       </div>';
            echo '       <div class="flip-card-back">';
            echo "           <h3 style=\"color: #eef3f0;\">$productName</h3>";
            echo '             <div style="width:200px;height:130px; justify-content: center;
                                align-items: center; Overflow-y:scroll; Overflow-x:scroll; 
                                overflow: auto;margin-top:-20px;">';
            echo "                   <p style=\"color: #eef3f0;\">$description</p>";
            echo "              </div>";
            include "saveItem.php";
            echo "           <form action=\"playMovie.php\" method=\"get\">";
            echo '               <a href="'.$movie_Url.'" style="text-decoration:none;"><button class="Watch-Now" type="submit" name="playVideo">Watch Now</button></a>';
            echo '           </form>';
            echo '       </div>';
            echo '   </div>';
            echo '</div>';
        }
        $conn1->close();
        
        ?>
