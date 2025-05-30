
<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST["SID"], $_POST["current_status"]))
{
 $SID = mysqli_real_escape_string($connect, $_POST["SID"]);
 $current_status = mysqli_real_escape_string($connect, $_POST["current_status"]);

 $query = "insert into unemployed (SID,current_status) values('$SID', '$current_status')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>