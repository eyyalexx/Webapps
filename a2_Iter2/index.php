<!DOCTYPE html>
<html lang="en">
<?php
include('pages/headers/header_main.php');
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

        <div id="manage-dialog" title="manage">
            <div class="container">
                <input class="form-control" id="add-field">
                <button type="submit" class="btn btn-default btn-sm" id="manage-add">
                    Add
                </button>
                <br>
                <input class="form-control" id="delete-field">
                <button type="submit" class="btn btn-default btn-sm" id="manage-remove">
                    Delete
                </button>
                <br>
                <button type="submit" class="btn btn-default btn-sm" id="manage-modify">
                    Modify
                </button>
            </div>
        </div>
      <!-- The Dialog for MANAGE -->


      <!-- The Dialog for MANAGE END -->

      <!-- The Dialog END  -->

      

    <div class="menues">
        <select class="form-control" id="artwork">
            <option value="0" selected disabled>Art Work</option>
            <option value="1">The Starry Night</option>
            <option value="2">Mona Lisa</option>
            <option value="3">Guernica</option>
            <option value="4">The Last Supper</option>
            <option value="5">Sistine Chapel ceiling</option>
        </select>

        <select class="form-control" id="artist">
            <option value="0" selected disabled>Artists</option>
            <option value="1">Vincent Van Gogh</option>
            <option value="2">Pablo Picasso</option>
            <option value="3">Claude Monet</option>
            <option value="4">Leonardo da Vinci</option>
            <option value="5">Michelangelo</option>
        </select>

        <select class="form-control" id="museum">
            <option value="0" selected disabled>Museum</option>
            <option value="1">The Acropolis Museum</option>
            <option value="2">Le Louvre Museum</option>
            <option value="3">State Hermitage Museum</option>
            <option value="4">The British Museum</option>
            <option value="5">The Prado</option>
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