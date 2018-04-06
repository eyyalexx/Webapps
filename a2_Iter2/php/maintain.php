

<!DOCTYPE html>
<html>
<head>
<?php
include('../pages/headers/header_main.php');
?>
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
    echo "<br>";

    include('view_artwork.php');
    echo "<a href='modify_artworks.php'>Add New ArtWorks Record</a>";
    echo "<br>";
    
    include('view_museums.php');
    echo "<a href='modify_museums.php'>Add New Museums Record</a>";
    echo "<br>";
    ?>

    
    
    

    
    
</body>
</html>