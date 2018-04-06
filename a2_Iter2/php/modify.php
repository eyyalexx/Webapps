<?php
    include("../DbConnect.php");
    function renderForm($Name = '', $Description ='', $Birth = '', $Death = '', $Living = '', $Genres = '', $Famous = '')
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

            Birth: <input type="text" name="Birth"
            value="<?php echo $Birth; ?>"/><br/>

            Death: <input type="text" name="Death"
            value="<?php echo $Death; ?>"/><br/>

            Living: <input type="text" name="Living"
            value="<?php echo $Living; ?>"/><br/>

            Genres: <input type="text" name="Genres"
            value="<?php echo $Genres; ?>"/><br/>

            Famous: <input type="text" name="Famous"
            value="<?php echo $Famous; ?>"/><br/>

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

// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit'])) {
    echo "<script type='text/javascript'>alert('EDIT');</script>";
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Birth = $_POST['Birth'];
    $Death = $_POST['Death'];
    $Living = $_POST['Living'];
    $Genres = $_POST['Genres'];
    $Famous = $_POST['Famous'];

    if ($stmt = $conn->prepare("UPDATE Artists SET Name = ?, Description = ?, Birth = ?, Death = ?, Living = ?, Genres = ?, Famous = ? WHERE Name = $Name")) {
        $stmt->bind_param("sssssss", $Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "ERROR: could not prepare SQL statement.";
    }
    header("Location: maintain.php");
}
}

//NEW RECORD

else {

if (isset($_POST['submit'])) {
    echo "<script type='text/javascript'>alert('NEW');</script>";
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Birth = $_POST['Birth'];
    $Death = $_POST['Death'];
    $Living = $_POST['Living'];
    $Genres = $_POST['Genres'];
    $Famous = $_POST['Famous'];

    if ($stmt = $conn->prepare("INSERT Artists (Name, Description, Birth, Death, Living, Genres, Famous) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
        $stmt->bind_param("sssssss", $Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
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