<?php
include 'admin/dbConfig.php';
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'raikunal251297@gmail.com';                 // SMTP username
$mail->Password = 'PYTHON@.PY';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
$mail->setFrom('raikunal251297@gmail.com', 'Tech1');
if(isset($_POST['confirm'])) {
    $email = $_POST['email'];
    $uname = $_SESSION['uname'];
    $phone = $_POST['phone'];
    // TCP port to connect to


    $mail->addAddress("$email");     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');        $address = $_POST['address'];

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);// Set email format to HTML
    $mail->SMTPDebug = 2;
    $mail->Subject = 'Order Confirmation';
    $mail->Body = 'Your Order has been confirmed <b>You have to paytm the order amount to 7895780897 to receive your order</b>';
    //$mail->AltBody = ;

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $username = $_SESSION['uname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $query_select = "Select * from cart WHERE User_name ='$username' ";
        $result_select = mysqli_query($db, $query_select) or die(" Select Query Failed");
        while ($row = mysqli_fetch_assoc($result_select)) {
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
        $result_delete = mysqli_query($db, $query_delete) or die("Delete Query Failed");
        header("location: orders.php");
        echo 'Message has been sent';
        $msg = 'Your Order has been confirmed.You have to paytm the order amount to 7895780897 to receive your order';

        $sms_send = 'http://www.smsidea.co.in/sendsms.aspx?mobile=9099084643&pass=8888patel&senderid=SIGMAA&to='.$phone.'&msg=Your%20Order%20has%20been%20confirmed.You%20have%20to%20paytm%20the%20order%20amount%20to%207895780897%20to%20receive%20your%20order';

        /**
         * Created by PhpStorm.
         * User: Kunal
         * Date: 21-07-2018
         * Time: 12:40
         */
//step1/
        $cSession = curl_init();
//step2
//curl_setopt($cSession,CURLOPT_URL,"http://www.smsidea.co.in/sendsms.aspx?mobile='9099084643'&pass='8888patel'&senderid='SIGMAA'&to='7895780897'&msg='test msg'");
        curl_setopt($cSession, CURLOPT_URL, $sms_send);
        curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cSession, CURLOPT_HEADER, false);
//step3
        $result = curl_exec($cSession);
//print_r($result) ;
//step4
        curl_close($cSession);
//step5
        echo $result;
    }
}
?>