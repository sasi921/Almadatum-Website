
<?php

include('db.php');

$column = array('SID', 'door_no', 'area', 'district', 'city', 'pincode');

$query = "
SELECT * FROM address 
";

if(isset($_POST['filter_district'], $_POST['filter_city']) && $_POST['filter_district'] != '' && $_POST['filter_city'] != '')
{
 $query .= '
 WHERE district = "'.$_POST['filter_district'].'" AND city = "'.$_POST['filter_city'].'" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY SID  ';
}

$query1 = '';

if($_POST["length"] != 0)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['SID'];
 $sub_array[] = $row['door_no'];
 $sub_array[] = $row['area'];
 $sub_array[] = $row['district'];
 $sub_array[] = $row['city'];
 $sub_array[] = $row['pincode'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM address";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>
