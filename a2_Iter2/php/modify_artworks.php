<?php
    include("../DbConnect.php");
    function renderForm($Name = '', $Description ='', $Type = '', $Dimensions = '', $Location = '', $Artist = '', $Price = '', $Artist = '', $Price = '')
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

            Description: <input type="text" name="Description"
            value="<?php echo $Description; ?>"/><br/>

            Type: <input type="text" name="Type"
            value="<?php echo $Type; ?>"/><br/>

            Dimensions: <input type="text" name="Dimensions"
            value="<?php echo $Dimensions; ?>"/><br/>

            Location: <input type="text" name="Location"
            value="<?php echo $Location; ?>"/><br/>

            Artist: <input type="text" name="Artist"
            value="<?php echo $Artist; ?>"/><br/>

            Price: <input type="text" name="Price"
            value="<?php echo $Price; ?>"/><br/>

            Genre: <input type="text" name="Genre"
            value="<?php echo $Genre; ?>"/><br/>

            DateCreated: <input type="text" name="DateCreated"
            value="<?php echo $DateCreated; ?>"/><br/>

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
        $Description = $_POST['Description'];
        $Type = $_POST['Type'];
        $Dimensions = $_POST['Dimensions'];
        $Location = $_POST['Location'];
        $Artist = $_POST['Artist'];
        $Price = $_POST['Price'];
        $Genre = $_POST['Genre'];
        $DateCreated = $_POST['DateCreated'];

        // if everything is fine, update the record in the database
        if ($stmt = $conn->prepare("UPDATE ArtWork SET Name = ?, Description = ?, Type = ?, Dimensions = ?, Location = ?, Artist = ?, Price = ?, Genre = ?, DateCreated = ? WHERE Name=?")) {
            $stmt->bind_param("ssssssssss", $Name, $Description, $Type, $Dimensions, $Location, $Artist, $Price, $Genre, $DateCreated, $id);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "ERROR: could not prepare SQL statement.";
        }
        header("Location: maintain.php");
    } else {
        $id = $_GET['Name'];
        if($stmt = $conn->prepare("SELECT * FROM ArtWork WHERE Name=?")) {
            $stmt->bind_param("s", $id);
            $stmt->execute();

            $stmt->bind_result($id, $Name, $Description, $Type, $Dimensions, $Location, $Artist, $Price, $Genre, $DateCreated);
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
        $Description = $_POST['Description'];
        $Type = $_POST['Type'];
        $Dimensions = $_POST['Dimensions'];
        $Location = $_POST['Location'];
        $Artist = $_POST['Artist'];
        $Price = $_POST['Price'];
        $Genre = $_POST['Genre'];
        $DateCreated = $_POST['DateCreated'];

        if ($stmt = $conn->prepare("INSERT ArtWork (Name, Description, Type, Dimensions, Location, Artist, Price, Genre, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sssssssss", $Name, $Description, $Type, $Dimensions, $Location, $Artist, $Price, $Genre, $DateCreated);
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