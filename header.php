<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 09-07-2018
 * Time: 14:58
 *
 */
//if(empty($_SESSION['username'])) {
//    session_start();
//}

include "admin/dbConfig.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tech1 shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_content ml-auto">
<!--                            <div class="top_bar_menu">-->
<!--                                <ul class="standard_dropdown top_bar_dropdown">-->
<!--                                    <li>-->
<!--<!--                                        <a href="admin_login.php">Admin<i class="fas fa-chevron-down"></i></a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="images/user.svg" alt=""></div>
                                <div><?php
                                    if(!empty($_SESSION['uname'])){
                                        echo "<a href='profile.php'>".$_SESSION['uname']."</a>";
                                    }else{
                                        echo "<a href='login.php'>"."Sign in"."</a>";
                                    }?>
                                </div>
                                <div><a href="register.php"><?php
                                        if(!empty($_SESSION['uname'])){
                                            echo "<a href='logout.php'>"."Log Out"."</a>";
                                        }else{
                                            echo "<a href='register.php'>"."Register".'</a>';

                                        }?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="search.php" class="header_search_form clearfix">
                                        <input type="search" required="required" name="s_query" class="header_search_input" placeholder="Search for products...">
                                        <div class="custom_dropdown">
<!--                                            <div class="custom_dropdown_list">-->
<!--                                                <span class="custom_dropdown_placeholder clc">All Categories</span>-->
<!--                                                <i class="fas fa-chevron-down"></i>-->
<!--                                                <ul class="custom_list clc">-->
<!--                                                    <li><a class="clc" href="#">All Categories</a></li>-->
<!--                                                    <li><a class="clc" href="#">Computers</a></li>-->
<!--                                                    <li><a class="clc" href="#">Laptops</a></li>-->
<!--                                                    <li><a class="clc" href="#">Cameras</a></li>-->
<!--                                                    <li><a class="clc" href="#">Hardware</a></li>-->
<!--                                                    <li><a class="clc" href="#">Smartphones</a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
                                        </div>
                                        <button type="submit" name="search" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
<!--                                <div class="wishlist_icon"><img src="images/heart.png" alt=""></div>-->
<!--                                <div class="wishlist_content">-->
<!--                                    <div class="wishlist_text"><a href="#">Wishlist</a></div>-->
<!--                                    <div class="wishlist_count">115</div>-->
<!--                                </div>-->
                            </div>

                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <img src="images/cart.png" alt="">
                                        <div class="cart_count"><span><?php
                                                if(isset($_SESSION['uname'])) {
                                                    $username = $_SESSION['uname'];
                                                    $q = "Select SUM(Quantity) as 'no' FROM cart WHERE User_name='$username'";
                                                    $r = mysqli_query($db, $q) or die("Query Failed");
                                                    $row = mysqli_fetch_assoc($r);
                                                    echo $row['no'];
                                                }else{
                                                    echo "0";
                                                }
                                                ?></span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="cart.php">Cart</a></div>
                                        <div class="cart_price"><?php
                                            if(isset($_SESSION['uname'])) {
                                                $username = $_SESSION['uname'];
                                                $query_total = "Select sum(SubTotal) as 'Total' from cart Where User_name='$username'";
                                                $result_total = mysqli_query($db, $query_total) or die("Query Failed");
                                                $row = mysqli_fetch_assoc($result_total);
                                                echo "Rs." . $row['Total'];
                                            }else{
                                                echo "Rs. 0";
                                            }
                                            ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="main_nav_content d-flex flex-row">

                            <!-- Categories Menu -->

                            <div class="cat_menu_container">
                                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                    <div class="cat_burger"><span></span><span></span><span></span></div>
                                    <div class="cat_menu_text">categories</div>
                                </div>

                                <ul class="cat_menu">

<!--                                    <li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>-->
<!--                                    <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                    <li class="hassubs">-->
<!--                                        <a href="#">Hardware<i class="fas fa-chevron-right"></i></a>-->
<!--                                        <ul>-->
                                    <?php
                                    $query = "Select * from level1_category ";
                                    $r = mysqli_query($db,$query);
                                    while($row = mysqli_fetch_assoc($r)){
                                        $name = $row['level1_name'];
                                        $id = $row['level1_id'];
                                        //$i = $_GET['$id'];
                                        echo" <li><a href='s_product_list.php?id=$id'>$name<i class='fas fa-chevron-right ml-auto'></i></a></li>";
                                    }
                                    ?>
<!--                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                    <li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                    <li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                    <li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                    <li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>-->
<!--                                    <li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>-->
                                </ul>
                            </div>

                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
                                    <li class="hassubs">
                                        <a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <?php
                                            $query = "Select * from level1_category Limit 5;";
                                            $r = mysqli_query($db,$query);
                                            while($row = mysqli_fetch_assoc($r)){
                                                $name = $row['level1_name'];
                                                $id = $row['level1_id'];
                                                //$i = $_GET['$id'];
                                                ?>
                                                <li>
                                                    <a href='s_product_list.php?id=<?php echo $id?>'><?php echo $name ?><i class="fas fa-chevron-down"></i></a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="hassubs">
                                        <a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <?php
                                            $query = "Select * from level2_category LIMIT 4";
                                            $r = mysqli_query($db,$query);
                                            while($row = mysqli_fetch_assoc($r)){
                                                $name = $row['level2_name'];
                                                $id = $row['level2_id'];?>
                                                <li>
                                                    <a href='search.php?s_query=<?php echo $name?>&search=Submit'><?php echo $name ?><i class="fas fa-chevron-down"></i></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="hassubs">
                                        <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <!--                                            <li><a href="shop.php">Shop<i class="fas fa-chevron-down"></i></a></li>-->
                                            <li><a href="a_product_list.php">Product<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="cart.php">Cart<i class="fas fa-chevron-down"></i></a></li>
                                            <!--                                            <li><a href="contact.php">Contact<i class="fas fa-chevron-down"></i></a></li>-->
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                            <!-- Menu Trigger -->

                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Menu -->

        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page_menu_content">

                            <div class="page_menu_search">
                                <form action="#">
                                    <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item has-children">
                                    <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item has-children">
                                            <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
<!--                                <li class="page_menu_item"><a href="blog.php">blog<i class="fa fa-angle-down"></i></a></li>-->
<!--                                <li class="page_menu_item"><a href="contact.php">contact<i class="fa fa-angle-down"></i></a></li>-->
                            </ul>

                            <div class="menu_contact">
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>