<!DOCTYPE html>
<html lang="en">
<?php
session_start();
  if(!isset($_SESSION['user_name']))
  {

    header( "refresh:0;url=login.php" );
  } ?>
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
  <link rel="shortcut icon" href="images/favicon.png"/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="admin.php"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="admin.php"><img src="images/logo-png.svg" alt="logo"/></a>
      </div>
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
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
          <!-- partial -->
    
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
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>COMPANY</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>COMPANY</h4>
                    </div>
                </div>
            </div>&emsp;
<?php

include('db.php');

$company_name = '';
$query = "SELECT DISTINCT company_name FROM company order by company_name";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $company_name .= '<option value="'.$row['company_name'].'">'.$row['company_name'].'</option>';
}

?>
<div class="form-group" align="center">
<form action="" method="post">
      <select name="filter_year" id="filter_year" class="form-control" required>
       <option value="">Select Company Name</option>
       <?php echo $company_name; ?>
      </select>
 </br>
 <input type="submit" align="" class="btn btn-info" name="formStream" value="Select" ></td>
 </form>
     </div>
    

            <div class="col-md-14">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered" >
                            <thead align="center">
                                <tr>
<th>SID</th>
<th>sname</th>
                                    <th>company_name</th>
<th>designation</th>
                                    <th>location</th>
<th>proof</th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $con = mysqli_connect("localhost","root","","alumni");
if(isset($_POST['formStream']))
{

$company_name = $_POST['filter_year'];

echo "<div align='center'><b><h4>".$company_name."</h4></b></div>";
}

$query ="SELECT * FROM company as c1,student_info as c2 where c1.SID=c2.SID AND c1.company_name='".$company_name."'";

$query_run = mysqli_query($con, $query);
$c=0;
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
$c++;
                                                ?>
                                                <tr>
<td><?=$items['SID'];?></td>
<td><?=$items['sname'];?></td>
                                                    <td><?= $items['company_name']; ?></td>
                                                    <td><?= $items['designation']; ?></td>
                                                    <td><?= $items['location']; ?></td>
<td><?= $items['proof'];?></td>

                                                   
                                                </tr>
                                                
                                                <?php
                                            }
echo "COUNT: ".$c;

    
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                        
                                                                     
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<div align="center">
<?php include("companybargp.php");
        ?>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>

      <!-- partial -->
     <!-- <div class="main-panel">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Company Data </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="SID" required value="<?php if(isset($_GET['SID'])){echo $_GET['SID']; } ?>" class="form-control" >
                                        </br></br> <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

<th>SID</th>
                                    <th>Company Name</th>
                                    <th>Designation</th>
                                    <th>Location</th>
<!--<th>proof</th>
                                   
                                </tr>
                            </thead>
                            <tbody>-->
                              
                                <?php
                                    $con = mysqli_connect("localhost","root","","alumni");

                                    if(isset($_GET['SID']))
                                    {
                                        $filtervalues = $_GET['SID'];
                                        $query = "SELECT * FROM company WHERE  CONCAT(company_name) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
$c=0;
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
$c++;
                                                ?>
                                                <tr>
<td><?=$items['SID'];?></td>
                                                    
                                                    <td><?= $items['company_name']; ?></td>
                                                    <td><?= $items['designation']; ?></td>
                                                    <td><?= $items['location']; ?></td>
<!--<td><?= $items['proof'];?></td>-->
       
                                                </tr>

                                                <?php

                                            }
echo "COUNT: ".$c;
//echo nl2br("\n");

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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  
           
         
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
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



