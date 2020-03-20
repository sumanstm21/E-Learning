<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_learning";

try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM homepage";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo $row["homepage"];
            }
        } else {
            echo "0 results";
        }
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    
?>