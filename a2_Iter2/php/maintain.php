

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
</head>
<body>
    <?php
    include('view_artists.php');
    echo "<a href='modify_artist.php'>Add New Artist Record</a>";
    include('view_artwork.php');
    echo "<a href='modify_artworks.php'>Add New ArtWorks Record</a>";
    include('view_museums.php');
    echo "<a href='modify_museums.php'>Add New Museums Record</a>"";
    ?>

    
    
    

    
    
</body>
</html>