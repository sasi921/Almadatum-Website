<?php
include('db.php');
if(!empty($_POST["district_id"])) 
{
$query =mysqli_query($connect,"SELECT * FROM address WHERE district = '" . $_POST["district_id"] . "' group by city order by city");
?>
<option value="">Select City</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["city"]; ?>"><?php echo $row["city"]; ?></option>
<?php
}
}
?>
