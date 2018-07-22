<?php
//session_start();
include_once "header.php";
//if(!empty($_SESSION['username']))
//    echo $_SESSION['username'];

include "admin/dbConfig.php";
?>


<body>
<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->

                        <?php
                        $id = $_GET['id'];
                        $q1 = "Select * from products WHERE id=$id";
                        $r1 = mysqli_query($db,$q1) or die("Query Failed");
                        $row = mysqli_fetch_assoc($r1);
                        $name = $row['Name'];
                        $details = $row['Details'];
                        $price = $row['Price'];
                        $image = $row['Image'];
                        $cat = $row['Category'];
                        ?>

                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <form action="cart.php" method="post">
						<li style="margin-top: 35%;" data-image='' ><img src="uploads/<?php echo $image ?>" alt=""></li>
                        <input type="hidden" name="image" value="<?php echo $image ?>">
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description"style="margin-top: 10%;">

                            <div class="product_category" id="cat"><?php echo $cat ?></div>
                            <input type="hidden" name="cat" value="<?php echo $cat ?>">
                            <div class="product_name" id="name"><?php echo $name ?></div>
                            <input type="hidden" name="name" value="<?php echo $name ?>">
     <!--<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
                            <div class="product_text" id="details"><p><?php echo $details ?></p></div>
                            <input type="hidden" name="details" value="<?php echo $details ?>">
                            <div class="order_info d-flex flex-row">

                                    <div class="clearfix">

                                        <!-- Product Quantity -->
                                        <div class="product_quantity clearfix" style="display: block">
                                            <span>Quantity: </span>
                                            <input name="quantity_input" id="quantity_input" type="text" pattern="[0-9]*" value="1">
<!--                                            <div class="quantity_buttons">-->
<!--                                                <div style="display: inline-block" id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>-->
<!--                                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>-->
<!--                                            </div>-->
                                        </div>


                                    </div>
                            </div>
                                    <div id="price" class="product_price"><?php echo 'Rs.'. $price ?></div>
                            <input type="hidden" name="price" value="<?php echo $price ?>">
                                    <div class="button_container">
                                            <button name="addCart" type="submit" class="button cart_button">Add to Cart</button>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                            </form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<?php
include "footer.php";
?>
</body>
