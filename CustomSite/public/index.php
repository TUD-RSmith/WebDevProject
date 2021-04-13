<?php include "../templates/header.php"; ?>


    <div class="mainarea">
        <h4>Status: You are logged in <?php echo $_SESSION['Username'];?> </h4>
        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    </div>


    <!-- Featured Products -->
    <div class="container">
        <h1 class="text-center">New & Popular Games</h1>
        <div class="row">

            <!-- Product 1 -->
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail featured-product">
                    <a href="#">
                        <img src="../images/rocket.jfif" alt="">
                    </a>
                    <div class="caption">
                        <h3>Rocket League - Starter Kit</h3>
                        <p>Genre - Driving/Action</p>
                        <p class="price">$15.00</p>

                        <!-- Input Group -->
                        <div class="input-group">
                            <input type="number" class="form-control" value="1">
                            <span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									Add to Cart
								</button>
							</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail featured-product">
                    <a href="#">
                        <img src="../images/fifa.jfif" alt="fifa">
                    </a>
                    <div class="caption">
                        <h3>Fifa 21</h3>
                        <p>Genre - Sport</p>
                        <p class="price"><s>$70.00</s> $36.99</p>

                        <!-- Input Group -->
                        <div class="input-group">
                            <input type="number" class="form-control" value="1">
                            <span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									Add to Cart
								</button>
							</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail featured-product">
                    <a href="#">
                        <img src="../images/minecraft.jpg" alt="minecraft">
                    </a>
                    <div class="caption">
                        <h3>Minecraft - Java Edition</h3>
                        <p>Genre - Adventure/Kids</p>
                        <p class="price">$20.00</p>

                        <!-- Input Group -->
                        <div class="input-group">
                            <input type="number" class="form-control" value="1">
                            <span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									Add to Cart
								</button>
							</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail featured-product">
                    <a href="#">
                        <img src="../images/coldwar.jpeg" alt="">
                    </a>
                    <div class="caption">
                        <h3>Call Of Duty - Cold War</h3>
                        <p>Genre - Shooter</p>
                        <p class="price">$69.99</p>

                        <!-- Input Group -->
                        <div class="input-group">
                            <input type="number" class="form-control" value="1">
                            <span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									Add to Cart
								</button>
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->


    <div class="container text-center">
        <h1>Grahamz Gamez - Great Gaming, Great Price</h1>
        <p class="lead">Please have a look at our wonderful stock available.</p>
        <img class="img-responsive img-circle center-block" src="images/service.jpg" alt="">
    </div><!--/.container-->


<?php include "../templates/footer.php"; ?>