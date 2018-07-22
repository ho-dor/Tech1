<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 22-07-2018
 * Time: 19:27
 */
include "admin/dbConfig.php";
$id = $_GET['id'];
$query = "Delete from cart where id=$id";
$result = mysqli_query($db,$query);
if($result){
    header("location: cart.php");
}

?>