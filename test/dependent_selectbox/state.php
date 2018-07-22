<?php
include('db_config.php');
$country = $_POST['country'];
$sql= "select * from states where country_id='$country'";
$query = $db->query($sql);
echo '<option value="">Select State</option>';
while($res = $query->fetch_assoc()){
echo '<option value="'.$res['state_name'].'">'.$res['state_name'].'</option>';
	
}
?>


<label>State</label>
<select name="state" id="state" class="dropdown" onchange="change_state();">
    <option value="">Select State</option>
    <?php while($row = $query->fetch_assoc()) { ?>
        <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?> </option>
    <?php } ?>
</select>

<span class="space"></span>
<label>City</label>
<select name="state" id="state" class="dropdown">
    <option value="">Select City</option>

</select>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    function change_state()
    {
        var country = $("#state").val();

        $.ajax({
            type: "POST",
            url: "city.php",
            data: "state="+state,
            cache: false,
            success: function(response)
            {
                //alert(response);return false;
                $("#city").html(response);
            }
        });

    }
</script>

