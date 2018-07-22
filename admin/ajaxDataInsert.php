<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 16-07-2018
 * Time: 10:16
 */
include "dbConfig.php";
if(isset($_POST["Level2_Val"]) && !empty($_POST["Level2_Val"])) {
    //Get all city data
    $val =  $_POST['Level2_Val'];
    $id = $_POST['Level_Id'];
    $query = $db->query("Insert into level2_category(level2_name,level1_id) VALUES ('$val','$id') ");

    if($query){
        echo "Successfully inserted";
    }
    else{
        echo "Failed";
    }

    //Count total number of row
}
?>


