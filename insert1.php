
<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST["SID"], $_POST["company_name"], $_POST["designation"], $_POST["location"]))
{
 $SID = mysqli_real_escape_string($connect, $_POST["SID"]);
 $company_name = mysqli_real_escape_string($connect, $_POST["company_name"]);
 $designation = mysqli_real_escape_string($connect, $_POST["designation"]);
 $location = mysqli_real_escape_string($connect, $_POST["location"]);
 
 $query = "insert into company(SID,company_name,designation,location) values('$SID', '$company_name','$designation','$location')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>