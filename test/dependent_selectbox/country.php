<style>
.dropdown
{	
width: 150px;
height: 30px;
font-size: 18px;
}
.space
{
margin-left: 40px;	
}
</style>
<?php
include('db_config.php');
$sql= "select * from countries";
$query = $db->query($sql);
$data = $query->fetch_assoc();

?>

<label>Country</label>
<select name="counntry" id="country" class="dropdown" onchange="change_country();">
<option value="">Select Country</option>
<?php while($row = $query->fetch_assoc()) { ?>
	<option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?> </option>
<?php } ?>
</select>

<span class="space"></span>
<label>State</label>
<select name="state" id="state" class="dropdown">
<option value="">Select State</option>

</select>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
function change_country()
{
	var country = $("#country").val();
	
	   $.ajax({
		type: "POST",
		url: "state.php",
		data: "country="+country,
		cache: false,
		success: function(response)
			{
					//alert(response);return false;
				$("#state").html(response);
			}
			});
	
}
</script>




