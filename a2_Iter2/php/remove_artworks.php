<?php
include('../DbConnect.php');
//echo $_GET['Name'];
if (isset($_GET['Name'])) {    
    $Name = $_GET['Name'];
    if ($stmt = $conn->prepare("DELETE FROM ArtWork WHERE Name = ?")) {
        $stmt->bind_param("s", $Name);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "ERROR: could not prepare SQL statement.";
    }
    $conn->close();

    header("Location: maintain.php");
}

?>