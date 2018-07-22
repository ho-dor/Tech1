<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 22-07-2018
 * Time: 16:54
 */

include "header.php";
include "admin/dbConfig.php";

if(isset($_GET['search'])){
    $s_query = $_GET['s_query'];

    $query = "Select * from products where Name LIKE '%$s_query%' or Category LIKE '%$s_query%'";
    $result = mysqli_query($db,$query);

    if(mysqli_num_rows($result)==0){
        echo "<h2 style='margin-top:2%;color: #0d82d3'>NO MATCHING RESULT</h2>";
    }
    else {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $img = $row['Image'];
            $cat = $row['Category'];
            $name = $row['Name'];
            $price = $row['Price'];
            $details = $row['Details'];
            ?>

            <div style="background-color: #afd9ee;margin-bottom: 2%;" class="bestsellers_item discount">

                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                    <div class="bestsellers_image"><img src="<?php echo 'uploads/' . $row['Image'] . "" ?>" alt="">
                    </div>
                    <div class="bestsellers_content">
                        <div class="bestsellers_category"><a href="#"><?php echo $row['Category'] ?></a></div>
                        <div class="bestsellers_name"><a href="product.php?id=<?php echo $id ?>"><?php echo $name ?></a>
                        </div>
                        <!--            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
                        <div class="bestsellers_price discount"><?php echo "Rs." . $row['Price'] ?></div>
                    </div>
                </div>
                <!--            <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>-->
                <!--            <ul class="bestsellers_marks">-->
                <!--                <li class="bestsellers_mark bestsellers_discount">-25%</li>-->
                <!--                <li class="bestsellers_mark bestsellers_new">new</li>-->
                <!--            </ul>-->
            </div>
            </a>
            <?php

        }
    }
}
include "footer.php";
?>