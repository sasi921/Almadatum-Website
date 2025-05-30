<?php
include("db.php");
$sql = "SELECT DISTINCT district FROM address ORDER BY district ASC";
$statement = $connect->prepare($query);
						$statement->execute();
$result = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Dropdown list example</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script>
         function getStates(countryId){
            $("#state").show();
            $("#stateDropdown").html('<option>Loading...</option>');
            $.ajax({
               method: "POST",
               url: "getStates.php",
               dataType: "html",
               data: {country: countryId}
            })
               .done(function(data){
               $("#stateDropdown").html(data);
            });
         }  
      </script>
   </head>
   <body>
      <div class="container">
         <form class="form-horizontal">
            <div class="form-group">
               <label for="country" class="col-sm-2 control-label">Country:</label>
               <div class="col-sm-4">
                  <select class="form-control" id="country" onChange="getStates(this.value)">
                     <option value="">Select Country</option>
                     <?php
                     foreach($result as $country){
                        echo "<option value='" . $country['id'] . "'>" . $country['countryName'] . "</option>";
                     }
                     ?>
                  </select>
               </div>
            </div>
            <div class="form-group" id="state">
               <label for="state" class="col-sm-2 control-label">State:</label>
               <div class="col-sm-4">               
                  <select class="form-control" id="stateDropdown">
                  </select>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>