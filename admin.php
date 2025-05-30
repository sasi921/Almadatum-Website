
<!DOCTYPE html>


<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ALUMNI CONNECT</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>


<?php
session_start();
  if(!isset($_SESSION['user_name']))
  {

    header( "refresh:0;url=login.php" );
  } ?>
  
  
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="admin.php"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="admin.php"><img src="images/logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a href="logout.php">
              <img src="images/lg.png" alt="profile"/>
            </a>
            
          </li>
                 </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
            <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Alumni Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="si.php">Student Info</a></li>
<ul style="list-style:none;">
                                  <li class="nav-item"><a class="nav-link" href="stu.php">Student Data</a></li>
                            
                              </ul>
                <li class="nav-item"> <a class="nav-link" href="address.php">Address</a></li>
			<ul style="list-style:none;">
                                  <li class="nav-item"><a class="nav-link"  href="et.php" > Analysis</a></li>
                            
                              </ul>
                <li class="nav-item"> <a class="nav-link" href="company.php">Company</a></li>
                <ul style="list-style:none;">
                                  <li class="nav-item"><a class="nav-link"  href="comanalysis.php" > Analysis</a></li>
                            
                              </ul>
<li class="nav-item"> <a class="nav-link" href="enterprenuer.php">Enterpreneurs</a></li>
<li class="nav-item"> <a class="nav-link" href="hs.php">Higher Studies</a></li>
<ul style="list-style:none;">
                                  <li class="nav-item"><a class="nav-link" href="al.php">Analysis</a></li>
                            
                              </ul>
<li class="nav-item"> <a class="nav-link" href="unemployed.php">Unemployed</a></li>
<li class="nav-item"> <a class="nav-link" href="ss.php">Student Status</a></li>




              </ul>
            </div>
          </li>
		  
		    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-update" aria-expanded="false" aria-controls="ui-update">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Update</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-update">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="ins.php">Student Info</a></li>
              </ul>
            </div>
			<div class="collapse" id="ui-update">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="cm.php">Company</a></li>
              </ul>
            </div>
			<div class="collapse" id="ui-update">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="he.php">Higher Studies</a></li>
              </ul>
            </div>
			<div class="collapse" id="ui-update">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="ent.php">Enterpreneurs</a></li>
              </ul>
            </div>
			<div class="collapse" id="ui-update">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="un.php">Unemployees</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                  <h6 class="font-weight-normal mb-0"><span class="text-primary"></span></h6>
                </div>
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                 <!--- <div class="weather-info">
                    <div class="d-flex">
                      <div>
                     <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-73b6ba71-a684-443c-87a3-469830e6ecb4"></div>
                      </div>
                      
                    </div>
                  </div>--->
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin transparent">
			
<iframe src="https://calendar.google.com/calendar/embed?height=300&wkst=1&bgcolor=%23B39DDB&ctz=Asia%2FKolkata&showTitle=0&showTz=0&src=dmZzdHIuY3NlLmFsdW1uaUBnbWFpbC5jb20&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%2333B679&color=%230B8043" style="border-width:0" width="500" height="300" frameborder="0" scrolling="no"></iframe>			 </div>
			 <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <label for="batch"><h3>Batch Report:</h3></label>&emsp;    
<?php

include('db.php');

$passed_out_year = '';
$query = "SELECT DISTINCT passed_out_year FROM student_info ORDER BY passed_out_year ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $passed_out_year .= '<option value="'.$row['passed_out_year'].'">'.$row['passed_out_year'].'</option>';
}

?>
<div class="form-group">
<form action="" method="post">
      <select name="filter_year" id="filter_year" class="form-control" required>
       <option value="">Select Passed Out Year</option>
       <?php echo $passed_out_year; ?>
      </select>
 </br>
 <input type="submit" class="btn btn-info" name="formStream" value="Select"></td>
 </form>
     </div>

<!--<div class="container-login100-form-btn">
<button type="submit" class="btn btn-primary">Check Status</button>
</div><br>-->

<?php  
$connect = mysqli_connect("localhost", "root", "", "alumni");
if(isset($_POST['formStream']))
{
$passed_out_year = $_POST['filter_year'];
echo "<h4><b> YEAR: ".$passed_out_year."</b></h4>";
}
?>

</br>
<table class="table table-bordered">
                            <thead>
                               
<th><h3>SUMMARY</h3></th>
                                <th><h3>COUNT</h3></th>
<!--<th>proof</th>-->
                               
                            </thead>
                            <tbody>
<?php
if(isset($_POST['formStream']))
{
$passed_out_year = $_POST['filter_year'];
}
$result = mysqli_query($connect, "select COUNT(c1.SID) AS count from student_status as c1,student_info as c2 where c1.SID=c2.SID AND c2.passed_out_year='".$passed_out_year."'");
$row = mysqli_fetch_array($result);
$count = $row['count'];
?>
<td for="batch"><h4>Number of Students</td> <td><?php echo $count;?>  <h4> </td>
<tr>

<?php
if(isset($_POST['formStream']))
{
$passed_out_year = $_POST['filter_year'];
}
$result = mysqli_query($connect, "SELECT COUNT(c1.SID) AS emp FROM company as c1,student_info as c2 where c1.SID=c2.SID AND c2.passed_out_year='".$passed_out_year."'");
$row = mysqli_fetch_array($result);
$count = $row['emp'];
?>
<td for="batch"><h4>Number of Employees </td><td><?php echo $count;?>  <h4> </td>
</tr>
<tr>
<?php
$result = mysqli_query($connect, "SELECT COUNT(c1.SID) AS unemp FROM unemployed as c1,student_info as c2 where c1.SID=c2.SID AND c2.passed_out_year='".$passed_out_year."'");
$row = mysqli_fetch_array($result);
$count = $row['unemp'];
?>
<td for="batch"><h4>Number of Unemployees</td><td> <?php echo $count;?>  <h4> </td>
</tr>
<tr>
<?php
$result = mysqli_query($connect, "SELECT COUNT(c1.SID) AS he FROM higher_studies as c1,student_info as c2 where c1.SID=c2.SID AND c2.passed_out_year='".$passed_out_year."'");
$row = mysqli_fetch_array($result);
$count = $row['he'];
?>
<td for="batch"><h4>Number of Higher Studies</td><td> <?php echo $count;?>  <h4> </td>
</tr>
<tr>
<?php
$result = mysqli_query($connect, "SELECT COUNT(c1.SID) AS e FROM enterprenuer as c1,student_info as c2 where c1.SID=c2.SID AND c2.passed_out_year='".$passed_out_year."'");
$row = mysqli_fetch_array($result);
$count = $row['e'];
?>
<td for="batch"><h4>Number of Enterpreneurs</td><td> <?php echo $count;?>  <h4> </td>
</tr>
<tr>
<?php
$result = mysqli_query($connect, "select COUNT(c1.SID) AS s from student_status as c1,student_info as c2 where c1.SID=c2.SID AND (c1.current_status='OL' or c1.current_status='JL' or c1.current_status='AL' or c1.current_status='AMAZON_OL' or c1.current_status='ID' or c1.current_status='IA' or c1.current_status='PAY SLIP' or c1.current_status='SERVICE LETTER' or c1.current_status='Placed In') AND c2.passed_out_year='".$passed_out_year."'");
$row = mysqli_fetch_array($result);
$res2=mysqli_query($connect, "select COUNT(c1.SID) AS se from student_status as c1,student_info as c2 where c1.SID=c2.SID AND c2.passed_out_year='".$passed_out_year."'");
$count = $row['s'];
$tot=mysqli_fetch_array($res2);
$totc=$tot['se'];
$notsu=$totc-$count;
?>
<td for="batch"><h4>Proofs Submitted</td><td> <?php echo $count;?>  <h4> </td>
</tr>
<tr>
<?php
$result = mysqli_query($connect, "SELECT COUNT(c1.SID) AS w FROM student_status as c1,student_info as c2 where c1.SID=c2.SID AND (c1.current_status='WAITING FOR ID' or c1.current_status='') AND c2.passed_out_year='".$passed_out_year."'");
$row = mysqli_fetch_array($result);
$count2 = $row['w'];
?>
<td for="batch"><h4>Proofs Not Submitted </td><td><?php echo $notsu;?>  <h4> </td>
</tr>
</tbody>
                    </table>
                </div>
              </div>
            </div>

    
 <div class="row">
            <div class="col-md-12">
                <div class="card mt-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
<h4>STUDENT Proofs</h4>
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" placeholder="Search here" name="SID" required value="<?php if(isset($_GET['SID'])){echo $_GET['SID']; } ?>" class="form-control" >
                                        &emsp;&emsp;<button type="submit" class="btn btn-primary">SUBMIT</button>

                                    </div>
                                </form>
<div class="col-md-13">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <?php
                                    $con = mysqli_connect("localhost","root","","alumni");

                                    if(isset($_GET['SID']))
                                    {
?>
<thead>
<th>SID</th>
                                    <th>Current status</th>
                                   
                                </tr>
                            </thead>
<?php
                                        $filtervalues = $_GET['SID'];
                                        $query = "SELECT * FROM student_status WHERE  CONCAT(SID) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
<td><?=$items['SID'];?></td>
                                                    <td><?= $items['current_status']; ?></td>                                                    
                                                   
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
 
         <!--- <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top 5 Companies</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
 <th>Recruiter</th>
                          <th>Offers</th>
                          <th>Package</th>
                         
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>Accenture</td>
                          <td class="font-weight-bold">211</td>
                          <td>4.9 to 7 LPA</td>
                        </tr>
                        <tr>
 <td>Accolite</td>
                          <td class="font-weight-bold">10</td>
                          <td> 8 LPA</td>
                        </tr>
                        <tr>
 <td>Digital</td>
                          <td class="font-weight-bold">28</td>
                          <td> 7 LPA</td>
                        </tr>
                        <tr>
                         
 <td>Genc NXT</td>
                          <td class="font-weight-bold">2</td>
                          <td> 7 LPA</td>
                        </tr>
                        <tr>
                         
 <td>KEKA</td>
                          <td class="font-weight-bold">10</td>
                          <td>6 to 7 LPA</td> </tr>
                        <tr>
                         
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       
          </div>
 --->
 




      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


