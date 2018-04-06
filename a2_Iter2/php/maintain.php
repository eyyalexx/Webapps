

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

    <!-- Nav bar START -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">Maintain Mode</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="../pages/about.php">About us</a></li>
                <li><a href="../pages/blogs.php">Blogs</a></li>
            </ul>

        </div>
    </nav>
    <!-- Nav bar END -->

    <?php
    include('view_artists.php');
    echo "<a href='modify_artist.php'>Add New Artist Record</a>";
    include('view_artwork.php');
    echo "<a href='modify_artworks.php'>Add New ArtWorks Record</a>";
    include('view_museums.php');
    echo "<a href='modify_museums.php'>Add New Museums Record</a>";
    ?>

    
    
    

    
    
</body>
</html>