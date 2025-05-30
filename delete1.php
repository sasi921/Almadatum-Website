
<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST["sno"]))
{
 $query = "DELETE FROM company WHERE sno = '".$_POST["sno"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>