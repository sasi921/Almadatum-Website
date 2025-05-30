
<?php
echo "helll";
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST["SID"], $_POST["sname"], $_POST["section"], $_POST["contact1"], $_POST["contact2"], $_POST["parent_num"], $_POST["email"], $_POST["passed_out_year"]))
{
 $SID = mysqli_real_escape_string($connect, $_POST["SID"]);
 $sname = mysqli_real_escape_string($connect, $_POST["sname"]);
 $section = mysqli_real_escape_string($connect, $_POST["section"]);
 $contact1 = mysqli_real_escape_string($connect, $_POST["contact1"]);
 $contact2 = mysqli_real_escape_string($connect, $_POST["contact2"]);
 $parent_num = mysqli_real_escape_string($connect, $_POST["parent_num"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $passed_out_year = mysqli_real_escape_string($connect, $_POST["passed_out_year"]);
 $query = "insert into student_info values('','$SID', '$sname','$section','$contact1','$contact2','$parent_num','$email','$passed_out_year')";
 //$query = "insert into student_info values(SID,sname,section,contact1,contact2,parent_num,email,passed_out_year) values('$SID', '$sname','$section','$contact1','$contact2','$parent_num','$email','$passed_out_year')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>