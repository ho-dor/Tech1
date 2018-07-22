/<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 16-07-2018
 * Time: 10:16
 */
include "admin/dbConfig.php";
if(isset($_POST["quantity"]) && !empty($_POST["quantity"])) {
    //Get all city data
   echo $cat =  $_POST['cat'];
    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $date = date("Y-m-d  h:i:s");
    $uname = $_SESSION['uname'];
    $total = $price*$quantity;
    $query = $db->query("Insert into cart(P_Name,Category,User_name,Quantity,Price,Date,SubTotal) VALUES ('$name','$cat','$uname','$quantity','$price','$date','$total') ");

    if($query){
        echo "Successfully inserted";
    }
    else{
        echo "Failed";
    }

    //Count total number of row
}
?>