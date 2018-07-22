<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 14-07-2018
 * Time: 23:46
 */
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];

    // Define country and city array
    $countryArr = array(
        "usa" => array("New Yourk", "Los Angeles", "California"),
        "india" => array("Mumbai", "New Delhi", "Bangalore"),
        "uk" => array("London", "Manchester", "Liverpool")
    );

    // Display city dropdown based on country name
    if($country !== 'Select'){
        echo "<label>City:</label>";
        echo "<select>";
        foreach($countryArr[$country] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Populate City Dropdown Using jQuery Ajax</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("select.country").change(function(){
                var selectedCountry = $(".country option:selected").val();
                $.ajax({
                    type: "POST",
                    url: "process-request.php",
                    data: { country : selectedCountry }
                }).done(function(data){
                    $("#response").html(data);
                });
            });
        });
    </script>
</head>
<body>
<form>
    <table>
        <tr>
            <td>
                <label>Country:</label>
                <select class="country">
                    <option>Select</option>
                    <option value="usa">United States</option>
                    <option value="india">India</option>
                    <option value="uk">United Kingdom</option>
                </select>
            </td>
            <td id="response">
                <!--Response will be inserted here-->
            </td>
        </tr>
    </table>
</form>
</body>
</html>
