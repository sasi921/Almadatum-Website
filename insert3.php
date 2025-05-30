
<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST["SID"], $_POST["Btype"]))
{
 $SID = mysqli_real_escape_string($connect, $_POST["SID"]);
 $Btype = mysqli_real_escape_string($connect, $_POST["Btype"]);

 $query = "insert into enterprenuer (SID,Btype) values('$SID', '$Btype')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>