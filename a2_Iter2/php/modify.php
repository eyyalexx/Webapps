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

// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit'])) {


    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Birth = $_POST['Birth'];
    $Death = $_POST['Death'];
    $Living = $_POST['Living'];
    $Genres = $_POST['Genres'];
    $Famous = $_POST['Famous'];

// check that firstname and lastname are both not empty
if ($Name == '' || $Description == '' || $Birth == '' || $Death == '' || $Living == '' || $Genres == '' || $Famous == '') {
    $error = 'ERROR: Please fill in all required fields!';
    renderForm($Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
} else {
    if ($stmt = $conn->prepare("UPDATE Artists SET Name = ?, Description = ?, Birth = ?, Death = ?, Living = ?, Genres = ?, Famous = ?")) {
        $stmt->bind_param("sssssss", $Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "ERROR: could not prepare SQL statement.";
    }
    header("Location: view.php");
} else {
    echo "Error!";
}
}/* else {

    // get the recod from the database
    if($stmt = $conn->prepare("SELECT * FROM players WHERE Name=?"))
    {
    $stmt->bind_param("s", $Name);
    $stmt->execute();

    $stmt->bind_result($Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
    $stmt->fetch();

    renderForm($Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);

    $stmt->close();
    } else {
        echo "Error: could not prepare SQL statement";
    } else {
        header("Location: view.php");
    }
}
*/

//NEW RECORD

//else {

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Birth = $_POST['Birth'];
    $Death = $_POST['Death'];
    $Living = $_POST['Living'];
    $Genres = $_POST['Genres'];
    $Famous = $_POST['Famous'];



    if ($Name == '' || $Description == '' || $Birth == '' || $Death == '' || $Living == '' || $Genres == '' || $Famous == '') {
        $error = 'ERROR: Please fill in all required fields!';
        renderForm($Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
    }
    else {
        if ($stmt = $conn->prepare("INSERT Artists (Name, Description, Birth, Death, Living, Genres, Famous) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sssssss", $Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
            $stmt->execute();
            $stmt->close();
        }
        else {
            echo "ERROR: Could not prepare SQL statement.";
        }
    header("Location: maintain.php");
    }

} else {
    renderForm();
}
//}

$conn->close();
?>