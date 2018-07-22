<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["root_id"]) && !empty($_POST["root_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM level1_category WHERE root_id = ".$_POST['root_id']." ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Level 1 Category</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['level1_id'].'">'.$row['level1_name'].'</option>';
        }
    }else{
        echo '<option value="">Level 1 Category not available</option>';
    }
}

if(isset($_POST["level1_id"]) && !empty($_POST["level1_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM level2_category WHERE level1_id = ".$_POST['level1_id']." ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Level 2 Category</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['level2_id'].'">'.$row['level2_name'].'</option>';
        }
    }else{
        echo '<option value="">Level 2 Category not available</option>';
    }
}
?>