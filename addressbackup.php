<?php
session_start();
  if(!isset($_SESSION['user_name']))
  {

    header( "refresh:0;url=login.php" );
  } ?>

<script>function getdistrict(val) {
	$.ajax({
	type: "POST",
	url: "city.php",
	data:'filter_district='+val,
	success: function(data){
		$("#city").html(data);
	}
	});
}

function getcity(val) {
	$.ajax({
	type: "POST",
	
	data:'filter_city='+val,
	
	});
}</script>
<?php
 include('db.php');
 ?>
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
<li class="nav-item">
            <a class="nav-link" href="admin.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">BACK</span>
            </a>
          </li>
		  </ul>
		  </nav>
	  <div class="main-panel">
        <div class="content-wrapper">
          <div class="container">
        <div class="row">
            <div class="col-md-25">
                <div class="card mt-14">
					
					
						 




<html>
 <head>
  <title>Address Details</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
 </head>

<body>
  <div class="container box">
   <h3 align="center">Address Details</h3>
   <br />
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
	    <div class="form-group">SELECT DISTRICT 
      <select onChange="getdistrict(this.value);"  name="filter_district" id="filter_district" class="form-control" >
       
       <option value="">Select</option>
        <?php $query =mysqli_query($connect,"SELECT * FROM address group by district order by district");
        while($row=mysqli_fetch_array($query))
        { 
        ?>
        <option value="<?php echo $row['district'];?>"><?php echo $row['district'];?></option>
        <?php
        }
        ?>
      </select>
     </div>
  
	<div class="form-group" id="city">
    SELECT CITY
      <select name="filter_city"  class="form-control" id="stateDropdown">
       <option value="">Select City</option>
        `
      </select>
     </div>
	
 
     <div class="form-group" align="center">
      <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
     </div>
    </div>
    <div class="col-md-4"></div>
   </div>
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="25%">SID</th>
       <th width="10%">door_no</th>
       <th width="25%">area</th>
	   <th width="15%">district</th>
	   <th width="15%">city</th>
  
	
       <th width="15%">pincode</th>
      </tr>
     </thead>
    </table>
    <br />
    <br />
    <br />
   </div>
  </div>
       </div>
        </div>
    </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
 
  fill_datatable();
 
  function fill_datatable(filter_city = '',filter_district = '')
  {
   var dataTable = $('#customer_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
     url:"fetch.php",
     type:"POST",
     data:{
   filter_district:filter_district, filter_city:filter_city
     }
    }
   });
  }
 
  $('#filter').click(function(){
	     var filter_city = $('#filter_city').val();
   
   
   var filter_district = $('#filter_district').val();

   if(    filter_city != '' && filter_district != '' )
   {
    $('#customer_data').DataTable().destroy();
    fill_datatable( filter_city,filter_district);
   }
   else
   {
    alert('Select  both filter option');
    $('#customer_data').DataTable().destroy();
    fill_datatable();
   }
  });
 
 
 });
 
</script>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>






























