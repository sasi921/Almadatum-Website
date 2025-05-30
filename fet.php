<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "alumni");
$columns = array('SID', 'sname');

$query = "SELECT * FROM student_info ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE SID LIKE "%'.$_POST["search"]["value"].'%" 
 OR sname LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
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
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="sname">' . $row["sname"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="section">' . $row["section"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="contact1">' . $row["contact1"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="contact2">' . $row["contact2"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="parent_num">' . $row["parent_num"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-sno="'.$row["sno"].'" data-column="passed_out_year">' . $row["passed_out_year"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" sno="'.$row["sno"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM student_info where passed_out_year='2019'";
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