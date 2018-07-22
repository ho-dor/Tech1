<!--<!/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Kunal-->
<!-- * Date: 11-07-2018-->
<!-- * Time: 10:23-->
<!-- */-->
<?php
include "admin_header.php";
?>
<body>
<?php
include "admin_nav.php";
include "dbConfig.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Add Category
        </div>

<?php

include "index.php";
?>
        <?php
        if(isset($_POST['submit'])) {
            $new = $_POST['newLevel1'];
            $id = $_POST['root'];
            $query = "Insert into level1_category(level1_name,root_id) Values('$new','$id')";
            $r = mysqli_query($db,$query) or die("Query Failed");
        }

        if(isset($_POST['level1submit'])) {
            $new = $_POST['newLevel1'];
            $query = "Insert into level1_category(level1_name,root_id) Values('$new')";
            $r = mysqli_query($db,$query) or die("Query Failed");
        }

        if(isset($_POST['level2submit'])) {
            $new = $_POST['newLevel2'];
            $query = "Insert into level2_category(level2_name,level1_id) Values('$new')";
            $r = mysqli_query($db,$query) or die("Query Failed");
        }
        ?>
            </div>
<!--            <!-- /.row -->
<!---->
        </div>
        <!-- /.container-fluid -->

<!--    </div>-->
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

