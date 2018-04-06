<?php
    include("DbConnect.php");
    function renderForm($Name = '', $Description ='', $Birth = '', $Death = '', $Living = '', $Genres = '', $Famous = '')
    {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            <?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
<body>
    <h1>
        <?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?>
    </h1>

    <?php
    if ($error != '') {
        echo "<div>" . $error . "</div>";
    }
    ?>

    <form action="" method="post">

    <div>

        <?php
        if ($id != '') {
        ?>

    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p>ID: <?php echo $id; ?></p>
<?php } ?>

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



/*

EDIT RECORD

*/
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id']))
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// make sure the 'id' in the URL is valid
if (is_numeric($_POST['id']))
{
// get variables from the URL/form
$id = $_POST['id'];
$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);

// check that firstname and lastname are both not empty
if ($firstname == '' || $lastname == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($firstname, $lastname, $error, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $conn->prepare("UPDATE players SET firstname = ?, lastname = ?
WHERE id=?"))
{
$stmt->bind_param("ssi", $firstname, $lastname, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: view.php");
}
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// get 'id' from URL
$id = $_GET['id'];

// get the recod from the database
if($stmt = $conn->prepare("SELECT * FROM players WHERE id=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $firstname, $lastname);
$stmt->fetch();

// show the form
renderForm($firstname, $lastname, NULL, $id);

$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the view.php page
else
{
header("Location: view.php");
}
}
}




//NEW RECORD

else {

if (isset($_POST['submit'])) {
    $Name = htmlentities($_POST['Name'], ENT_QUOTES);
    $Description = htmlentities($_POST['Description'], ENT_QUOTES);
    $Birth = htmlentities($_POST['Birth'], ENT_QUOTES);
    $Death = htmlentities($_POST['Death'], ENT_QUOTES);
    $Living = htmlentities($_POST['Living'], ENT_QUOTES);
    $Genres = htmlentities($_POST['Genres'], ENT_QUOTES);
    $Famous = htmlentities($_POST['Famous'], ENT_QUOTES);



    if ($Name == '' || $Description == '' || $Birth == '' || $Death == '' || $Living == '' || $Genres == '' || $Famous == '') {
        $error = 'ERROR: Please fill in all required fields!';
        renderForm($Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
    }
    else {
        if ($stmt = $conn->prepare("INSERT Artists (Name, Description, Birth, Death, Living, Genres, Famous) VALUES (?, ?)")) {
            $stmt->bind_param("ss", $Name, $Description, $Birth, $Death, $Living, $Genres, $Famous);
            $stmt->execute();
            $stmt->close();
        }
        else {
            echo "ERROR: Could not prepare SQL statement.";
        }

// redirec the user
header("Location: maintain.php");
}

}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}
}

// close the conn connection
$conn->close();
?>