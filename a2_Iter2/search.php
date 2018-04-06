<?php
$searchText = $_POST["text"]; 
include 'DbConnect.php';


$sql = "SELECT DISTINCT Name FROM ArtWork WHERE LOWER(Name) LIKE LOWER('%$searchText%')";
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