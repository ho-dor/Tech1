<?php
include "index_header.php";
include "admin/dbConfig.php";
?>
	
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">new era of smartphones</h1>
						<div class="banner_price">Rs.64000</div>
						<div class="banner_product_name">Apple Iphone 6s</div>
<!--						<div class="button banner_button"><a href="#">Shop Now</a></div>-->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Characteristics -->

	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from Rs.500</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from Rs.500</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from Rs.500</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from Rs.500</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot New Arrivals</div>
							<ul class="clearfix">
								<li class="active">Featured</li>
<!--								<li>Audio & Video</li>-->
<!--								<li>Laptops & Computers</li>-->
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

                                        <?php
                                        $query = "Select * from products Limit 20";
                                        $result = mysqli_query($db,$query);
                                        while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $img = $row['Image'];
                                        $cat = $row['Category'];
                                        $name = $row['Name'];
                                        $price = $row['Price'];
                                        $details = $row['Details'];
                                        ?>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/<?php echo $img ?>" alt=""></div>
												<div class="product_content">
													<div class="product_price"><?php echo $price ?></div>
													<div class="product_name"><div><a href="product.php?id=<?php echo $id ?>"><?php echo $name ?></a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
<!--                                                        <a href=""><button class="product_cart_button">Add to Cart</button></a>-->
													</div>
												</div>
<!--												<div class="product_fav"><i class="fas fa-heart"></i></div>-->
												<ul class="product_marks">
<!--													<li class="product_mark product_discount"></li>-->
<!--													<li class="product_mark product_new">new</li>-->
												</ul>
											</div>
										</div>
<?php
                                        }
?>

									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

						</div>

							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
								</div>
							</div>

						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot Best Sellers</div>
							<ul class="clearfix">
								<li class="active">Top 4</li>
<!--                                <li>Audio & Video</li>-->
<!--								<li>Laptops & Computers</li>-->
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
                        <?php
                        $query = "Select * from products where id=46;";
                        $result = mysqli_query($db,$query);
                        $row = mysqli_fetch_assoc($result);
                        $id = $row['id'];
                        $img = $row['Image'];
                        $cat = $row['Category'];
                        $name = $row['Name'];
                        $price = $row['Price'];
                        $details = $row['Details'];
                        ?>

                        <div class="bestsellers_panel panel active">


                            <div class="bestsellers_slider slider">
                                <!-- Best Seller Sliders-->

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="uploads/<?php echo $img ?>" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#"><?php echo $cat ?></a></div>
                                            <div class="bestsellers_name"><a href="product.php?id=<?php echo $id ?>"><?php echo $name ?></a>
                                            </div>
<!--                                            <div class="rating_r rating_r_4 bestsellers_rating">-->
<!--                                                <i></i><i></i><i></i><i></i><i></i></div>-->
                                            <div class="bestsellers_price discount"><?php echo $price ?></div>
                                        </div>
                                    </div>
<!--                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>-->
<!--                                    <ul class="bestsellers_marks">-->
<!--                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>-->
<!--                                        <li class="bestsellers_mark bestsellers_new">new</li>-->
<!--                                    </ul>-->
                                </div>

                                <?php
                                $query = "Select * from products where id=50;";
                                $result = mysqli_query($db,$query);
                                $row = mysqli_fetch_assoc($result);
                                $id = $row['id'];
                                $img = $row['Image'];
                                $cat = $row['Category'];
                                $name = $row['Name'];
                                $price = $row['Price'];
                                $details = $row['Details'];
                                ?>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="uploads/<?php echo $img ?>" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#"><?php echo $cat ?></a></div>
                                            <div class="bestsellers_name"><a href="product.php?id=<?php echo $id ?>"><?php echo $name ?></a>
                                            </div>
<!--                                            <div class="rating_r rating_r_4 bestsellers_rating">-->
<!--                                                <i></i><i></i><i></i><i></i><i></i></div>-->
                                            <div class="bestsellers_price discount"><?php echo $price ?></div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>-->
                                    <!--                                    <ul class="bestsellers_marks">-->
                                    <!--                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>-->
                                    <!--                                        <li class="bestsellers_mark bestsellers_new">new</li>-->
                                    <!--                                    </ul>-->
                                </div>

                                <?php
                                $query = "Select * from products where id=53;";
                                $result = mysqli_query($db,$query);
                                $row = mysqli_fetch_assoc($result);
                                $id = $row['id'];
                                $img = $row['Image'];
                                $cat = $row['Category'];
                                $name = $row['Name'];
                                $price = $row['Price'];
                                $details = $row['Details'];
                                ?>


                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="uploads/<?php echo $img ?>" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#"><?php echo $cat ?></a></div>
                                            <div class="bestsellers_name"><a href="product.php?id=<?php echo $id ?>"><?php echo $name ?></a>
                                            </div>
<!--                                            <div class="rating_r rating_r_4 bestsellers_rating">-->
<!--                                                <i></i><i></i><i></i><i></i><i></i></div>-->
                                            <div class="bestsellers_price discount"><?php echo $price ?></div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>-->
                                    <!--                                    <ul class="bestsellers_marks">-->
                                    <!--                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>-->
                                    <!--                                        <li class="bestsellers_mark bestsellers_new">new</li>-->
                                    <!--                                    </ul>-->
                                </div>

                                <?php
                                $query = "Select * from products where id=71;";
                                $result = mysqli_query($db,$query);
                                $row = mysqli_fetch_assoc($result);
                                $id = $row['id'];
                                $img = $row['Image'];
                                $cat = $row['Category'];
                                $name = $row['Name'];
                                $price = $row['Price'];
                                $details = $row['Details'];
                                ?>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="uploads/<?php echo $img ?>" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#"><?php echo $cat ?></a></div>
                                            <div class="bestsellers_name"><a href="product.php?id=<?php echo $id ?>"><?php echo $name ?></a>
                                            </div>
<!--                                            <div class="rating_r rating_r_4 bestsellers_rating">-->
<!--                                                <i></i><i></i><i></i><i></i><i></i></div>-->
                                            <div class="bestsellers_price discount"><?php echo $price ?></div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>-->
                                    <!--                                    <ul class="bestsellers_marks">-->
                                    <!--                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>-->
                                    <!--                                        <li class="bestsellers_mark bestsellers_new">new</li>-->
                                    <!--                                    </ul>-->
                                </div>

							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">

						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">

							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

						</div>

						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
    include "footer.php";
    ?>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>