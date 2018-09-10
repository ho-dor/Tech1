<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 18-07-2018
 * Time: 14:01
 */
include "header.php";
include "admin/dbConfig.php";
?>
<div class="panel"></div>
<form action="mailer.php" method="post" id="contact_form">

    </div>
    <div class="contact_form" style="width: 50%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Checkout</div>


                        <div class="contact_form_inputs flex-md-row flex-column justify-content-between align-items-between">
                            <!--                            <input type="text" id="contact_form_name" class="contact_form_name input_field" name="firstname" placeholder="Your Firstname" required="required" data-error="Name is required.">-->
                            <div class="contact_form_text" style="margin: 5%; margin-left: 0%">
                                <!--                                <input type="textarea" id="contact_form_email" name="address" class="contact_form_email input_field" placeholder="Address" required="required" data-error="Address is required.">-->
                            </div>
                            <div class="contact_form_text" style="margin: 5%; margin-left: 0%">
                                <input type="number" id="contact_form_phone" name="phone" class="contact_form_phone input_field" placeholder="Phone">
                            </div>    <div class="contact_form_text" style="margin: 5%;margin-left: 0%">
                                <input type="email" name="email" id="contact_form_phone" class="contact_form_phone input_field" placeholder="E-Mail">
                            </div>    <div class="contact_form_text" style="margin: 5%;margin-left: 0%">
                                <!--                                <input name="username" type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Username">-->
                            </div>    <div class="contact_form_text" style="margin: 5%;margin-left: 0%">
                                <!--                                <input name="password" type="password" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Password">-->
                            </div>    <div class="contact_form_text" style="margin: 5%;margin-left: 0%">
                                <!--                                <input name="gender" type="radio" id="contact_form_phone" value="male"><h4 style="color: #0d82d3">Male</h4>-->
                                <!--                                <input name="gender" type="radio" id="contact_form_phone" value="female"><h4 style="color: #0d82d3">Female</h4>-->
                            </div>
                            <div class="contact_form_text">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="address" rows="4" placeholder="Address" required="required" data-error="Please, write us a message."></textarea>
                            </div>
                            <div class="contact_form_button">
                                <input type="submit" class="button contact_submit_button" name="confirm" value="Confirm Order">
                            </div>
                            <div class="reviews_title_container">
                                <h3 style="margin:4%;" class="reviews_title">Order Summary</h3>
                            </div>


                            <table style="display: inline;width: 40%;">
                                <?php
                                $username = $_SESSION['uname'];
                                $query_select = "Select * from cart WHERE User_name ='$username' ";
                                $result_select = mysqli_query($db,$query_select) or die("Query Failed");
                                while($row = mysqli_fetch_assoc($result_select)) {
                                    //print_r($row);
                                    $img = $row['Image'];
                                    $name = $row['P_Name'];
                                    $cat = $row['Category'];
                                    $price = $row['Price'];
                                    $quantity  = $row['Quantity'];
                                    $subtotal = $row['SubTotal'];

                                    ?>

                                    <tr>
                                        <div class="owl-item">
                                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                                <td><div><div class="review_image"><img src="uploads/<?php echo $img ?>" alt=""></div></div></td>
                                                <td>
                                                    <div class="review_content">
                                                        <div class="review_name"><?php echo $name ?></div>
                                                        <div class="review_rating_container">
                                                            <!--                    <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
                                                            <div class="review_time"><?php echo "Quantity :". $quantity ?></div>
                                                        </div>
                                                        <div class="review_text"><p><?php echo "Price : Rs.".$price ?></p></div>
                                                        <div class="review_text"><p><?php echo "SubTotal : Rs.".$subtotal ?></p></div>
                                                    </div>
                                                </td>
                                            </div>
                                        </div>
                                    </tr>

                                    <?php
                                }
                                ?>
                                <?php
                                $query_total = "Select sum(SubTotal) as 'Total' from cart Where User_name='$username'";
                                $result_total = mysqli_query($db,$query_total) or die("Query Failed");
                                $row = mysqli_fetch_assoc($result_total);
                                echo " <div class=\"review_text\"><p>Grand Total : Rs. ".$row['Total']."</p></div>";
                                ?>
                            </table>
</form>

</div>
</div>
</div>
</div>
</div>
</div>