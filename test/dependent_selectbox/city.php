<?php
include('db_config.php');
$state = $_POST['state'];
$sql= "select * from cities where state_id='$state'";
$query = $db->query($sql);
echo '<option value="">Select City</option>';
while($res = $query->fetch_assoc()){
    echo '<option value="'.$res['city_name'].'">'.$res['city_name'].'</option>';

}
?>