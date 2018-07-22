<!--<!/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Kunal-->
<!-- * Date: 11-07-2018-->
<!-- * Time: 10:23-->
<!-- */-->
<?php
include "admin_header.php";?>
<body>


<?php
include "admin_nav.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Add Product
        </div>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "store")
                or die("Error in Connection on add_category");
                if(isset($_POST['add'])){
                    $name = $_POST['name'];
                    $details = $_POST['details'];
                    $price = $_POST['price'];
                    $quan = $_POST['quantity'];
                    $status = $_POST['status'];
                    $visibility = $_POST['visibility'];
                    $cat = $_POST['category'];
                    $pid = $_POST['id'];
                    $createDate = date("Y-m-d h:i:s");
                    $UpdateDate = date("Y-m-d h:i:s");
                    $image = $_FILES['fileToUpload']['name'];
                    $arr = explode(".",$image);
                    $fimg = $arr[0].time().'.'.$arr[1];
                    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "../uploads/" . $fimg);
                    $query = "Insert Into products VALUES ('','$cat','$name','$details','$price','$fimg','$quan','$pid','$status','$createDate','$UpdateDate','$visibility')";
                    $result = mysqli_query($conn, $query) or die("Query Failed");

                }
                ?>

                <form action="add_product.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Add Name">
                    <br><br><input type="text" name="details" placeholder="Description">
                    <br><br><input type="number" name="price" placeholder="Price">
                    <br><br><input type="number" name="quantity" placeholder="Quantity"><br><br>

                    <select name="status">
                        <option value=1>In Stock</option>
                        <option value=0>Out Of Stock</option>
                    </select><br><br>

                    <select name="visibility">
                        <option value=1>Enabled</option><br><br>
                        <option value=0>Disabled</option><br><br>
                    </select><br><br>

                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
<!--                        <input type="submit" value="Upload Image" name="submit">-->
<!--                    <input type="file" name="image"><br><br>-->
                    <select name="category">
                        <option><?php
                            $conn = mysqli_connect("localhost", "root", "", "store")
                            or die("Error in Connection on add_category");
                            $query_level2 = "SELECT * FROM level2_category";
                            $result_level2 = mysqli_query($conn, $query_level2) or die("Query failed add_category");
                            echo "<option value='' disabled selected>Select</option>";
                        while ($row = mysqli_fetch_assoc($result_level2)) {
                            echo '<option value="'.$row['level2_name'].'">'.$row['level2_name'].'</option>';
                            }?>
                    </option>
                    </select><br><br>
<!--                    <input type="number" name="p_id"><br><br>-->

                    <select name="id">
                        <option><?php
                            $conn = mysqli_connect("localhost", "root", "", "store")
                            or die("Error in Connection on add_category");
                            $query_level2 = "SELECT * FROM level2_category";
                            $result_level2 = mysqli_query($conn, $query_level2) or die("Query failed add_category");
                            echo "<option value='' disabled selected>Select</option>";
                            while ($row = mysqli_fetch_assoc($result_level2)) {
                                echo '<option value="'.$row['level2_id'].'">'.$row['level2_id']."-".$row['level2_name'].'</option>';
                            }?>
                        </option>
                    </select><br><br>
                    <input type="submit" name="add">

                </form>

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



<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 13-07-2018
 * Time: 09:24
 */

