<!DOCTYPE html>
<html>
<head>
    <title>Blood bank</title>

    
   
</head>
<body>

    
   

    <?php
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "blood"; 

    $conn = new mysqli($servername, $username, $password, $database);

  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $bloodtype = $_POST['bloodtype'];

    
    $sql = "SELECT * FROM donor WHERE bloodtype = '$bloodtype'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Donors with Blood Type $bloodtype:</h2>";
        echo "<table border='5'>";
        echo "<tr><th>Name</th><th>Blood Type</th><th>Gender</th><th>Phone</th></tr>";
        

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
           
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["bloodtype"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            
            
         
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No donors found with Blood Type $bloodtype.";
    }

    
    $conn->close();



   
    ?>
   <br><br>
   <center> <button><a href="Blood Stock.html" >GO BACK</a></button></center>


</body>
</html>
