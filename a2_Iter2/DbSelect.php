<?php


function getArtWorkNames(){
    include 'DbConnect.php';

    $sql = "SELECT Name FROM ArtWork";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[] = $row['Name'];
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    return $data;
}
getArtWorkNames();

?>