<!DOCTYPE html>
<html>
<title>Add Category</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
    
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
    
    
.select-boxes{width: 280px;text-align: center;}
select {
    background-color: #F5F5F5;
    border: 1px double #15a6c7;
    color: #1d93d1;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}

</style>

<div style="display: none" id="message">

</div>
    <script type="text/javascript">
$(document).ready(function(){
    $('#root').on('change',function(){
        var rootID = $(this).val();
        if(rootID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'root_id='+rootID,
                success:function(html){
                    $('#level1').html(html);
                    $('#level2').html('<option value="">Select Level 1 Category first</option>');
                }
                // error:function(){
                //
                // }
            }); 
        }else{
            $('#level1').html('<option value="">Select Level 1 Category first</option>');
            $('#level2').html('<option value="">Select Level 2 Category first</option>');
        }
    });
    
    $('#level1').on('change',function(){
        var level1ID = $(this).val();
        if(level1ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'level1_id='+level1ID,
                success:function(html){
                    $('#level2').html(html);
                }
            }); 
        }else{
            $('#level2').html('<option value="">Select Level 1 Category first</option>');
        }
    });
});
    </script>
      
    
<body>

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div style="max-width:1600px">

  
  <!-- Image header -->
 

  <!-- Grid -->
  <div>

    <!-- Blog entries -->
    <div>
    
      <!-- Blog entry -->
      <div>
        
          <h2 style="text-align: center";></h2>
          <br>
          <div class="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM root_category");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <form method="post" action="add_category.php">
    <select name="root" id="root" >
        <option value="">Select Root Category</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['root_id'].'">'.$row['root_name'].'</option>';
            }
        }else{
            echo '<option value="">Root not available</option>';
        }
        ?>
    </select>
        <input type='text' name='newLevel1'>
        <input type="submit" name="submit" value="Insert">

        </form>

    <select name="level1" id="level1">
        <option value="">Select Level 1 Category first</option>
    </select>
              <form method="post" action="add_category.php">
                  <input type='text' name='newLevel2' id="newLevel2">
                  <input type="button" name="level1submit" value="Insert" id="level1submit">
              </form>


              <select name="level2" id="level2">
        <option value="">Select Level 2 Category first</option>
    </select>

          </div>

          
            
      </div>
      
    </div>

  </div>

</div>
<script>
    $('#level1submit').on('click',function() {
        //alert("I am here");
        var rootId = $('#root').val();
        var level1Id =  $("#level1 option:selected").val();
        var level2Val = $('#newLevel2').val();
        console.log(level1Id);
        if(level2Val) {
            $.ajax({
                type: 'POST',
                url: 'ajaxDataInsert.php',
                data: {root_Id: rootId, Level_Id: level1Id, Level2_Val: level2Val},
                success: function (html) {
                    console.log(html);
                    $('#message').html();
                    $('#message').css("display", "block");
                    $('#message').html(html);
                    setTimeout(function(){ location.reload(); }, 3000);


                }
            });
        }
    });

</script>
</body>
</html>
















 
