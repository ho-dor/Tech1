<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 10-07-2018
 * Time: 21:22
 */
session_unset();
session_destroy();
header('location: ../admin_login.php');