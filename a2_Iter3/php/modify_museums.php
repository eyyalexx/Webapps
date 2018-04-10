<?php
    include("../DbConnect.php");
    function renderForm($Name = '', $Established ='', $Location = '', $People = '', $History = '', $ArtWorks = '', $Description = '')
    {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Modify
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
<body>

    <form action="" method="post">

        <div>
            Name: <input type="text" name="Name"
            value="<?php echo $Name; ?>"/><br/>

            Established: <input type="text" name="Established"
            value="<?php echo $Established; ?>"/><br/>

            Location: <input type="text" name="Location"
            value="<?php echo $Location; ?>"/><br/>

            People: <input type="text" name="People"
            value="<?php echo $People; ?>"/><br/>

            History: <input type="text" name="History"
            value="<?php echo $History; ?>"/><br/>

            ArtWorks: <input type="text" name="ArtWorks"
            value="<?php echo $ArtWorks; ?>"/><br/>

            Description: <input type="text" name="Description"
            value="<?php echo $Description; ?>"/><br/>

            <p>* required</p>

            <input type="submit" name="submit" value="Submit" />
        </div>
    </form>
</body>
</html>

<?php

}
//EDIT RECORD
if (isset($_GET['Name'])) {

    if (isset($_POST['submit'])) {

        $id = $_POST['Name'];
        $Name = $_POST['Name'];
        $Established = $_POST['Established'];
        $Location = $_POST['Location'];
        $People = $_POST['People'];
        $History = $_POST['History'];
        $ArtWorks = $_POST['ArtWorks'];
        $Description = $_POST['Description'];

        // if everything is fine, update the record in the database
        if ($stmt = $conn->prepare("UPDATE Museums SET Name = ?, Established = ?, Location = ?, People = ?, History = ?, ArtWorks = ?, Description = ? WHERE Name=?")) {
            $stmt->bind_param("ssssssss", $Name, $Established, $Location, $People, $History, $ArtWorks, $Description, $id);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "ERROR: could not prepare SQL statement.";
        }
        header("Location: maintain.php");
    } else {
        $id = $_GET['Name'];
        if($stmt = $conn->prepare("SELECT * FROM Museums WHERE Name=?")) {
            $stmt->bind_param("s", $id);
            $stmt->execute();

            $stmt->bind_result($id, $Name, $Established, $Location, $People, $History, $ArtWorks, $Description);
            $stmt->fetch();

            renderForm($id);

            $stmt->close();
        } else {
            header("Location: maintain.php");
        }
    }
} else {

//NEW RECORD

    if (isset($_POST['submit'])) {
        echo "<script type='text/javascript'>alert('NEW');</script>";
        $Name = $_POST['Name'];
        $Established = $_POST['Established'];
        $Location = $_POST['Location'];
        $People = $_POST['People'];
        $History = $_POST['History'];
        $ArtWorks = $_POST['ArtWorks'];
        $Description = $_POST['Description'];

        if ($stmt = $conn->prepare("INSERT Museums (Name, Established, Location, People, History, ArtWorks, Description) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sssssss", $Name, $Established, $Location, $People, $History, $ArtWorks, $Description);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "ERROR: Could not prepare SQL statement.";
        }
        header("Location: maintain.php");
    } else {
        renderForm();
    }

}
$conn->close();
?>