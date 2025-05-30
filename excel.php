<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "alumni");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM unemployed";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>SID</th>  
                         <th>Current_status</th>  
              
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["SID"].'</td>  
                         <td>'.$row["current_status"].'</td>  
                       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>

