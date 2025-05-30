
<?php
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST["SID"], $_POST["admission_year"], $_POST["university"], $_POST["continent"]))
{
 $SID = mysqli_real_escape_string($connect, $_POST["SID"]);
 $admission_year = mysqli_real_escape_string($connect, $_POST["admission_year"]);
 $university = mysqli_real_escape_string($connect, $_POST["university"]);
 $continent = mysqli_real_escape_string($connect, $_POST["continent"]);
 
 $query = "insert into higher_studies(SID,admission_year,university,continent) values('$SID', '$admission_year','$university','$continent')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>