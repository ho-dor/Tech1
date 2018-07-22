

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>

<body>

<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_form_container">
                    <div class="contact_form_title">Admin Login</div>

                    <form action="admin/admin_login_result.php" method="post" id="contact_form">
                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                            <input name="username" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Username" required="required" data-error="Username is required.">
                            <input name="password" type="password" id="contact_form_email" class="contact_form_email input_field" placeholder="Password" required="required" data-error="Password is required.">
                        </div>
                        <div class="contact_form_button">
                            <button name="admin" type="submit" class="button contact_submit_button">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel"></div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 08-07-2018
 * Time: 23:17
 */

?>