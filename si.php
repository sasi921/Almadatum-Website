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
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo.png" alt="logo"/></a>
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
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
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
<li class="nav-item"> <a class="nav-link" href="ss.php">Student status</a></li>




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
          <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Student Data </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="SID" required value="<?php if(isset($_GET['SID'])){echo $_GET['SID']; } ?>" class="form-control" >
                                        <button type="submit" class="btn btn-primary" id='button' onclick()="hidetable()">SUBMIT</button>
										
                                    </div>
                                </form>
								

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-13">
                <div class="card mt-4">
                    <div class="card-body">
                        
                                <?php 
                                    $con = mysqli_connect("localhost","root","","alumni");

                                    if(isset($_GET['SID']))
                                    {
                                        $filtervalues = $_GET['SID'];
                                        $query = "SELECT * FROM student_info WHERE  CONCAT(SID) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
?>
<table class="table table-bordered" >
				
                            <thead>
                                <tr>STUDENT INFO
								<th>SID</th>
                                    <th>sname</th>
									<th>section</th>
                                    <th>contact1</th>
									<th>contact2</th>
                                    <th>parent_num</th>
									<th>email</th>
									<th>passed_out_year</th>
                                    
                                </tr>
                            </thead>
                            <tbody><?php
							
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
												<td><?=$items['SID'];?></td>
                                                    <td><?= $items['sname']; ?></td>
                                                    <td><?= $items['section']; ?></td>
                                                    <td><?= $items['contact1']; ?></td>
													<td><?= $items['contact2'];?></td>
													<td><?= $items['parent_num'];?></td>
													<td><?= $items['email'];?></td>
													<td><?= $items['passed_out_year'];?></td>
                                                    
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
			
			<!-- address -->
			
			
			<div class="col-md-13">
                <div class="card mt-4">
                    <div class="card-body">
                        
                                <?php 
                                    $con = mysqli_connect("localhost","root","","alumni");

                                    if(isset($_GET['SID']))
                                    {
                                        $filtervalues = $_GET['SID'];
                                        $query = "SELECT * FROM address WHERE  CONCAT(SID) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);?>
										<table class="table table-bordered">
                            <thead>
                                <tr>ADDRESS
								<th>SID</th>
                                    <th>door_no</th>
									<th>area</th>
                                    <th>district</th>
									<th>city</th>
                                    <th>pincode</th>
									
                                    
                                </tr>
                            </thead>
                            <tbody>
										<?php
										

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
												<td><?=$items['SID'];?></td>
                                                    <td><?= $items['door_no']; ?></td>
                                                    <td><?= $items['area']; ?></td>
                                                    <td><?= $items['district']; ?></td>
													<td><?= $items['city'];?></td>
													<td><?= $items['pincode'];?></td>
													
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
			<div class="col-md-13">
                <div class="card mt-4">
                    <div class="card-body">
                        
                                <?php 
                                    $con = mysqli_connect("localhost","root","","alumni");

                                    if(isset($_GET['SID']))
                                    {
                                        $filtervalues = $_GET['SID'];
                                        $query = "SELECT * FROM company WHERE  CONCAT(SID) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
										?><table class="table table-bordered">
                            <thead>
                                <tr>COMPANY DETAILS
								<th>SID</th>
                                    <th>company_name</th>
									<th>designation</th>
                                    <th>location</th>
									<th>proof</th>

									
                                    
                                </tr>
                            </thead>
                            <tbody>


<?php


                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
												<td><?=$items['SID'];?></td>
                                                    <td><?= $items['company_name']; ?></td>
                                                    <td><?= $items['designation']; ?></td>
                                                    <td><?= $items['location']; ?></td>
													<td><?= $items['proof'];?></td>
												
													
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

