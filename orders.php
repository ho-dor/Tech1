<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 19-07-2018
 * Time: 10:14
 */
include "header.php";
include "admin/dbConfig.php";
if (isset($_POST['confirm'])) {
$username = $_SESSION['uname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
$query_select = "Select * from cart WHERE User_name ='$username' ";
$result_select = mysqli_query($db,$query_select) or die(" Select Query Failed");
while($row = mysqli_fetch_assoc($result_select)) {
//print_r($row);
    $img = $row['Image'];
    $name = $row['P_Name'];
    $cat = $row['Category'];
    $price = $row['Price'];
    $quantity = $row['Quantity'];
    $subtotal = $row['SubTotal'];
    $query_cart = "INSERT INTO orders(Category,P_name,User_name,Quantity,Total,Contact,Address) VALUES ('$cat','$name','$username','$quantity','$subtotal','$phone','$address')";
    $result_cart = mysqli_query($db, $query_cart) or die (" Insert Query Failed");
    }
    $query_delete = "DELETE FROM cart where User_name = '$username'";
    $result_delete = mysqli_query($db,$query_delete) or die("Delete Query Failed");
}

?>

<h4 style="color: #0d82d3;margin-top: 10%;">Your Order is confirmed , check your registered E-Mail for payment direction.</h4>


