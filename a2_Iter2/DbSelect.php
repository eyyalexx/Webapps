<?php


function getArtWorkNames(){
    include 'DbConnect.php';

    $sql = "SELECT Name FROM ArtWork ORDER BY Name ASC";
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

function getArtistNames(){
    include 'DbConnect.php';

    $sql = "SELECT Name FROM Artists ORDER BY Name ASC";
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

function getMuseumNames(){
    include 'DbConnect.php';

    $sql = "SELECT Name FROM Museums ORDER BY Name ASC";
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


?>