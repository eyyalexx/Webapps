<?php
$imageID = $_POST["imageID"]; 
include 'DbConnect.php';

$sql = "SELECT Link FROM Images where ImageID=$imageID";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "0 results";
    }

    echo json_encode($data);
    $conn->close();


?>