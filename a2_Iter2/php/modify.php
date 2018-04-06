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


//NEW RECORD

//else {

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    /*$Description = $_POST['Description'];
    $Birth = $_POST['Birth'];
    $Death = $_POST['Death'];
    $Living = $_POST['Living'];
    $Genres = $_POST['Genres'];
    $Famous = $_POST['Famous'];*/

    //, Description, Birth, Death, Living, Genres, Famous
    //, $Description, $Birth, $Death, $Living, $Genres, $Famous
    
    $conn->query("INSERT Artists (Name) VALUES ($Name)");
    

} else {
    renderForm();
}
//}

$conn->close();
?>