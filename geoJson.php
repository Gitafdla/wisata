<?php
    // Sesuaikan dengan setting MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pgweb8";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM kecamatan";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row; 
            
        }
    }
    
    $conn->close();
    
    
    echo json_encode($data);
?>

