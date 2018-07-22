<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 13-07-2018
 * Time: 10:11
 */
include "dbconfig.php";
$query = "Select Name,Details,Price,Category from products";
$result = mysqli_query($db,$query);
while($row = mysqli_fetch_array($result)){
    print_r($row);
}
?>