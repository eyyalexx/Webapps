<!DOCTYPE html>
<html lang="en">
<?php
include('headers/header_main.php');
?>
<body>

    <!-- Nav bar START -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.html">Art Store</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="../index.html">Home</a></li>
                <li class="active"><a href="#">About us</a></li>
                <li><a href="blogs.html">Blogs</a></li>
            </ul>

            <button type="button" class="btn btn-default btn-sm pull-right" id="cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
            </button>

        </div>
    </nav>
    <!-- Nav bar END -->

      
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 home">
            <h1>About Us</h1>
            <p>
                This team consists of Kevin Nguyen, Taranpreet Saini, and Alex Grigorev; The Dream Team. They were asked to create an Art
                Store Website.
            </p>
            <br>
            <div id="images">
                <img class="profile-pics" src="../images/artists/Kevin.jpg">
                <img class="profile-pics" src="../images/artists/Taranpreet.jpg">
                <img class="profile-pics" src="../images/artists/Alex.jpg">
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>