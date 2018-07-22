<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 17-07-2018
 * Time: 10:13
 */

if(empty($_SESSION['uname'])){
    header("location: login.php");
}

include "header.php";
include "admin/dbConfig.php";
if(isset($_POST['addCart'])) {

    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $img = $_POST['image'];
    $user = $_SESSION['uname'];
    $date = date("y-m-d  h:i:s");
    $quantity = $_POST['quantity_input'];
    $total = $price * $quantity;
    $query_insert = "Insert Into cart(Category,P_Name,User_name,Quantity,Price,Image,Date,SubTotal) Values('$cat','$name','$user','$quantity','$price','$img','$date','$total')";
    $result_insert = mysqli_query($db, $query_insert) or die("Query Failed");
}
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
    $username = $_SESSION['uname'];
    $query_select = "Select * from cart WHERE User_name ='$username' ";
    $result_select = mysqli_query($db,$query_select) or die("Query Failed");
    while($row = mysqli_fetch_assoc($result_select)) {
        //print_r($row);
        $id = $row['id'];
        $img = $row['Image'];
        $name = $row['P_Name'];
        $cat = $row['Category'];
        $price = $row['Price'];
        $quantity  = $row['Quantity'];
        $subtotal = $row['SubTotal'];

        ?>

        <div style="background-color: #afd9ee;margin-bottom: 2%;" class="bestsellers_item discount">

            <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                <div class="bestsellers_image"><img src="uploads/<?php echo $img . " "; ?>" alt=""></div>
                <div class="bestsellers_content">
                    <div class="bestsellers_category"><?php echo $cat ?></div>
                    <div class="bestsellers_name"><?php echo $name ?></div>
                    <div class="bestsellers_name"><?php echo "Quantity :".$quantity ?></div>
                    <div><a href="delete_cart.php?id=<?php echo $id ?>">
                            Remove
                        </a></div>
                    <!--<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
                    <div class="bestsellers_price discount"><?php echo"Price : Rs." .$price ?></div>
                    <div class="bestsellers_price discount"><?php echo"SubTotal : Rs." .$subtotal ?></div>
                </div>
            </div>
            <!--    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
            <ul class="bestsellers_marks">
                <!--        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                <!--        <li class="bestsellers_mark bestsellers_new">new</li>
            </ul>-->
        </div>

        <?php
    }?>
    <div style="background-color: #afd9ee;margin-bottom: 2%;" class="bestsellers_item discount">
        <div class="bestsellers_price discount"><?php
            $query_total = "Select sum(SubTotal) as 'Total' from cart Where User_name='$username'";
            $result_total = mysqli_query($db,$query_total) or die("Query Failed");
            $row = mysqli_fetch_assoc($result_total);
            echo "Grand Total : Rs. ".$row['Total'];
            ?>
        </div>
        <div>
            <?php

            ?>
           <a href="checkout.php">
               <button style="padding: 2%; color: #df3b3b;background-color: #0d82d3;float: right;">Proceed To Checkout >></button>
           </a>
        </div>
    </div>
    

        <?php
    include "footer.php";
    ?>

