<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST["sno"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE unemployed SET ".$_POST["column_name"]."='".$value."' WHERE sno = '".$_POST["sno"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>