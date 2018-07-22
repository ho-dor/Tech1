<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#country').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        $('#state').html(html);
                        $('#city').html('<option value="">Select state first</option>');
                    }
                });
            }else{
                $('#state').html('<option value="">Select country first</option>');
                $('#city').html('<option value="">Select state first</option>');
            }
        });

        $('#state').on('change',function(){
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'state_id='+stateID,
                    success:function(html){
                        $('#city').html(html);
                    }
                });
            }else{
                $('#city').html('<option value="">Select state first</option>');
            }
        });
    });
</script>

<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 14-07-2018
 * Time: 23:13
 */

//Include the database configuration file
include 'dbConfig.php';

if(!empty($_POST["country_id"])){
    //Fetch all state data
    $query = $db->query("SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //State option list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}elseif(!empty($_POST["state_id"])){
    //Fetch all city data
    $query = $db->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //City option list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>