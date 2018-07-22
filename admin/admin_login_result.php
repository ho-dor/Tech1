<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 08-07-2018
 * Time: 23:55
 */
//session_start();

$conn = mysqli_connect("localhost","root","","store") or die("Error in Connection");
if(isset($_POST['admin'])) {
    $flag = 0;
    $user = $_POST['username'];
    $password = $_POST['password'];

    $query = "Select * from registered WHERE Type=1";
    $result = mysqli_query($conn, $query) or die("Query Failed");
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['Username'] == $user) {
            if ($row['Password'] == $password) {
                $flag = 1;
                $_SESSION['username']=$row['Username'];
                header("location:admin_dashboard.php");
                break;
            } else {
                $flag = 1;
                echo "Wrong Password";
                break;
            }
        }else{
            echo "No admin found";
        }
    }
}