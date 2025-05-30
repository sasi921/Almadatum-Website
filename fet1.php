<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "alumni");
$columns = array('SID', 'company_name');

 $query = "select * from company ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE SID LIKE "%'.$_POST["search"]["value"].'%" 
 OR company_name LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'';
}
else
{
 $query .= 'ORDER BY sno ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="SID">' . $row["SID"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="company_name">' . $row["company_name"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="designation">' . $row["designation"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="location">' . $row["location"] . '</div>';

 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" sno="'.$row["sno"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "select * from company";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>