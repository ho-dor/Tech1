<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 23-07-2018
 * Time: 18:45
 */

if(empty($_SESSION['username'])){
    header("location: ../admin_login.php");
}
?>