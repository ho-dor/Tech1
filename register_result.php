<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 22-06-2018
 * Time: 11:54
 */

if(isset($_POST['register'])) {
    $conn = mysqli_connect("localhost", "root", "", "store") or die("Error in connection");
    if ($conn) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $user = $_POST['username'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $query = "INSERT INTO `registered`(`E-Mail`, `Password`, `FirstName`, `LastName`, `Username`, `Phone`, `Gender`, `Address`) ";
        $query .= "VALUES ('$email','$password','$first','$last','$user','$phone','$gender','$address')";
        $result = mysqli_query($conn, $query) or die("Query Failed");
        if ($result) {
            echo "You are registered . Please Login to access your account" . '<br>';
            echo "<html><head><title></title></head><body><a href='login.php'>Click here to login</a></body></html>";
            include_once "index.php";
        }
    }
}
?>