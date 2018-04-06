<?php
include('DbConnect.php');

if (isset($_GET['Name'])) {
    $Name = $_GET['Name'];
    if ($stmt = $conn->prepare("DELETE FROM Artists WHERE Name = ? LIMIT 1")) {
        $stmt->bind_param("s",$Name);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "ERROR: could not prepare SQL statement.";
    }
    $conn->close();

    header("Location: maintain.php");
} else {
    header("Location: maintain.php");
}

?>