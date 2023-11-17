<?php
    $cusUName=$_POST["cusUName"];
    $cusName=$_POST["cusName"];
    $cusEmail=$_POST["cusEmail"];
    $cusPassword=$_POST["password"];
    $cusCOnPassword=$_POST["ConPassword"];

    if($cusCOnPassword==$cusPassword){
        include 'DataBaseFile\contodb.php';
        if (isset($cusUName)) {      
            // SQL query to check if the username already exists in the database
            $query = "SELECT * FROM singup WHERE username='$cusUName'";
            $result = $conn1->query($query);
        
            if ($result->num_rows > 0) {
                // Username already exists
                echo "<script>alert('Username is not available. Please choose a different username.')</script>";
                header("Location: SingUpPage.php");
                exit; // Ensure the script stops here to prevent further execution
            } else {
                // Username is available
                echo "<script>alert('Username is available. You can proceed with registration.')</script>";
            }
        }
        
        $sql1 = "INSERT INTO singup (cusUsername,cusName,cusEmail,cusPassword) 
        VALUES ('$cusUName','$cusName','$cusEmail','$cusPassword') ";

        if (mysqli_query($conn1, $sql1)) {
            echo "<script>alert('New record created successfully')</script>";
            include 'LoginPage.php';
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn1);
        }

        $conn1->close();
    }

?>
 