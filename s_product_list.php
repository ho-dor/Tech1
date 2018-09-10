
<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 15-07-2018
 * Time: 18:00
 */
if(empty($_GET['id'])){
    header("location: a_product_list.php");
}
include "header.php";
include "admin/dbConfig.php";
?>
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<body>

<?php

$id = $_GET['id'];
$query = "SELECT * from products WHERE products.Category IN (SELECT level2_category.level2_name from level2_category WHERE level2_category.level1_id = $id)";
$result = mysqli_query($db,$query);
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $img = $row['Image'];
    $cat = $row['Category'];
    $name = $row['Name'];
    $price = $row['Price'];
    $details = $row['Details'];
    ?>
    <div style="background-color: #afd9ee;margin-bottom: 2%;" class="bestsellers_item discount">

        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
            <div class="bestsellers_image"><a href="product.php?id=<?php echo $id ?>"><img src="<?php echo 'uploads/'.$row['Image']."" ?>" alt=""></a></div>
            <div class="bestsellers_content">
                <div class="bestsellers_category"><a href="#"><?php echo $row['Category'] ?></a></div>
                <div class="bestsellers_name"><a href="product.php?id=<?php echo $id ?>"><?php echo $name ?></a></div>
                <!--            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
                <div class="bestsellers_price discount"><?php echo"Rs.". $row['Price'] ?></div>
            </div>
        </div>
        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
        <ul class="bestsellers_marks">
            <li class="bestsellers_mark bestsellers_discount">-25%</li>
            <li class="bestsellers_mark bestsellers_new">new</li>
        </ul>
    </div>
    </a>
    <?php
}
include "footer.php";
?>


</body>
