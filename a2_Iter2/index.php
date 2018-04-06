<!DOCTYPE html>
<html lang="en">
<?php
include('pages/headers/header_main.php');
include('DbSelect.php');
?>
<body>

    <!-- Nav bar START -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Art Store</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="pages/about.php">About us</a></li>
                <li><a href="pages/blogs.php">Blogs</a></li>
            </ul>

            <button type="button" class="btn btn-default btn-sm pull-right" id="cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
            </button>

            <button type="button" class="btn btn-default btn-sm pull-right" style="margin-right: 2pt" id="searchBtn">
                <span class="glyphicon glyphicon-search"></span> Search
            </button>

            <button type="button" class="btn btn-default btn-sm pull-right" style="margin-right: 2pt" id="manage_button">
                Manage
            </button>

        </div>
    </nav>
    <!-- Nav bar END -->

     <!-- The Dialog  -->
    <div id="dialog" title="Shopping Cart">
        <div class="container">
            <h3 id="ptitle">He </h3>
            <form action="#">
                <div class="form-group">
                        <label for="quantity">Quantity:</label><br>
                        <input type="number" class="form-control" id="quantity" value="1" min="1" max="5">
                </div>
                <div class="form-group">
                    <label for="quantity">Shipping Plan:</label><br>
                    <select class="form-control" id="shipping">
                            <option value="1">Standard</option>
                            <option value="2">Express</option>
                    </select>
                </div>
                <p style="display:inline"><b>Price: </b></p>
                <p style="display:inline" id="price"></p>
                <br>
                <p style="display:inline"><b>Tax: </b></p>
                <p style="display:inline" id="tax"></p>
                <br>
                <p style="display:inline"><b>Shipping: </b></p>
                <p style="display:inline" id="shipPrice"></p>
                <br><br>
                <p style="display:inline"><b>Total: </b></p>
                <p style="display:inline" id="total"></p>
                <br><br>
                <input type="submit" onClick="closeDialog();return false;" class="btn btn-default" value="Purchase">
            </form> 
        </div>
    </div>

    <div id="dialog2" title="Error">
        <p>Please select a painting</p>
    </div>

      <!-- The Dialog for SEARCH  -->

        <div id="search-dialog" title="Search">
            <div class="container">
                <input class="form-control" type="search" id="search-input">
                <br>
                <button type="submit" class="btn btn-default btn-sm" id="search-submit">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </div>
        </div>

      <!-- The Dialog for SEARCH END  -->


      <!-- The Dialog END  -->

    <?php
    $artworks = getArtWorkNames();
    $artists = getArtistNames();
    $museums = getMuseumNames();
    
    ?>

    <div class="menues">
        <select class="form-control" id="artwork">
            <option value="0" selected disabled>Art Work</option>

            <?php
                for($i = 0; $i < sizeof($artworks); $i++){
                    echo "<option value='".($i+1)."'>".$artworks[$i]."</option>";
                }
            ?>
        </select>

        <select class="form-control" id="artist">
            <option value="0" selected disabled>Artists</option>
            <?php
                for($i = 0; $i < sizeof($artists); $i++){
                    echo "<option value='".($i+1)."'>".$artists[$i]."</option>";
                }
            ?>
        </select>

        <select class="form-control" id="museum">
            <option value="0" selected disabled>Museum</option>
            <?php
                for($i = 0; $i < sizeof($museums); $i++){
                    echo "<option value='".($i+1)."'>".$museums[$i]."</option>";
                }
            ?>
        </select>
    </div>

    <div class="container">
			<div class="row">
				<div class="col-md-6">
					<div id="image" class="thumbnail">
					
					</div>
				</div>

				<div class="col-md-6">
					<div id="info" class="thumbnail">
						
					</div>
				</div>
			</div>
    </div>

    
</body>
</html>