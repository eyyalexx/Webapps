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
                <a class="navbar-brand" href="../index.php">Art Store</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li class="active"><a href="#">Blogs</a></li>
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
            <h1>Blogs</h1>
            <p>
                This is the blogs section.
            </p>
            <br>

        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>