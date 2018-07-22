<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 10-07-2018
 * Time: 09:57
 */

session_start();
//echo "I am here";
session_unset();
session_destroy();
header('location:index.php');
//header('location: http://localhost/store/index.php');
?>