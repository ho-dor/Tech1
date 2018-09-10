<?php
include_once "header.php";
//echo "<pre>";
//print_r($_SERVER);

unset($_SESSION['pre_url']);
$_SESSION['pre_url'] = $_SERVER['HTTP_REFERER'];
?>



    <!-- Contact Info -->

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Login</div>

                        <form action="login_result.php" method="post" id="contact_form">
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                <input name="username" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your Username" required="required" data-error="Username is required.">
                                <input name="password" type="password" id="contact_form_email" class="contact_form_email input_field" placeholder="Your Password" required="required" data-error="Password is required.">
                            </div>
                            <div class="contact_form_button">
                                <input name="submit" type="submit" class="button contact_submit_button"></input>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>



    <!-- Footer -->

    <?php
    include "footer.php";
    ?>
</body>

</html>
