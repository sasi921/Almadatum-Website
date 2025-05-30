<!DOCTYPE html>
<html lang="en">
<?php  
 $connect = mysqli_connect("localhost", "root", "", "alumnis");  
 
 if(isset($_POST["insert"]))  
 {  
	
	  $caption=$_POST['caption'];
	 
	  if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
		$query = "insert into posts(sid,caption) values ('181FA04271','$caption')"; 
		} else {
			$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
	  
			$query = "insert into posts(sid,media,caption) values ('181FA04271','$file','$caption')";
		}
        
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted")</script>';  
      }  
 }  
 ?> 
<?php
session_start();
  if(!isset($_SESSION['sid']))
  {

    header( "refresh:0;url=landing.php" );
  } ?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>ALUMNI</title>
    <link rel="icon" href="images/wlr.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
	
</head>

<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
	
	
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="newsfeed.php"><img  src="images/q.png" alt="HTML5" style="width:120px;height:60px" >
			<img  align="left" src="images/wlr.png" alt="HTML5" style="width:90px;height:60px"></a>
		</div>
		
		<div class="top-area">
			<ul class="main-menu">
				
				
				
			</ul>
			
			</ul>
			<div class="logo">
				<img src="images/logo.png" alt="">
			</div>
		</div>
		</div>
		
	</div><!-- topbar -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">News feed</h4>
										<ul class="naves">

		
											
											
												<i class="ti-image"></i>
												<a href="timeline-photos.php" title="">Images</a>
											</li>
																						<li>
											</li>

											<li>
												<i class="ti-video-camera"></i>
												<a href="timeline-videos.php" title="">Videos</a>
											</li>
											
											
											
											<li>
												<i class="ti-power-off"></i>
												<a href="soclogout.php" title="">Logout</a>
											</li>
										</ul>
									</div><!-- Shortcuts -->
									
									
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
											<img src="images/resources/admin2.jpg" alt="">
										</figure>
										<div class="newpst-input">
											<!--form method="post" enctype="multipart/form-data">
												<textarea rows="2" placeholder="write something" name="caption" id="caption"></textarea>
												<div class="attachments">
													<ul>
													<input type="file" name="image" id="image" />  
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file" name="image" id="image">
															</label>
														</li>
														
														<li>
															<button type="submit" name="insert" id="insert" value="Insert">Post</button>
														</li>
													</ul>
												</div>
											</form-->
											<form method="post" enctype="multipart/form-data">  
												<div class="attachments">
												<textarea rows="2" placeholder="write something" name="caption" id="caption"></textarea>
													<ul>

														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file" name="image" id="image">
															</label> 
														</li>
  														<li>
                     									<input type="submit" name="insert" id="insert" value="POST" class="btn btn-info" />  
														</li>
													</ul>	
												</div>
                							</form> 
										</div>
									</div>
								</div><!-- add post new box -->
								
								<div class="loadMore">
								
								<?php  
								$query = "SELECT * FROM posts ORDER BY time DESC";  
								$result = mysqli_query($connect, $query); 
								$i=0;
								while($i<10){			
								while($row = mysqli_fetch_array($result))  
								{?>
										<div class="central-meta item">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/admin.jpg" alt="">
														</figure>
														<div class="friend-name">
															<ins>
																<?php 
																	$sidname=$row['sid'];
																	$querynamep ="SELECT * FROM student_info where sid='$sidname' ";  
																	$resultnamep = mysqli_query($connect, $querynamep); 
																	if($rownamep = mysqli_fetch_array($resultnamep))
																	{
																		echo $rownamep['sname'];
																	}
																?>
															</ins>
															<span><?php echo $row['time']; ?></span>
														</div>
														<div class="post-meta">                                                            
																<?php                        if(isset($row['media'])){
                                                                                          echo '  
                                                                                               <tr>  
                                                                                                    <td>  
                                                                                                         <img src="data:image/jpeg;base64,'.base64_encode($row['media'] ).'" height="" width="" class="img-thumnail" />  
                                                                                                    </td>  
                                                                                               </tr>  
                                                                                          '; 
                                                                                          }  
																		?>
															<div class="description">
																
																<p>
																				<?php echo $row['caption']; ?>
																</p>
															</div>
														</div>
													</div>
												</div>    
										</div>  
								<?php
								
								} 
								$i=$i+1;
							}
								?>								
								</div>
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">
										<figure align="center">
												<a href="#" title=""><img src="images/resources/admin.jpg" alt="" style='width:100px; height:150px; border-radius:15px;' ></a>
											</figure>
										</h4>	
										<div class="your-page">
											<?php
												 $sid=$_SESSION['sid'];
												$queryname ="SELECT * FROM student_info where sid='$sid' ";  
												$resultname = mysqli_query($connect, $queryname); 
											?>
											<div class="page-meta">
												<a href="#" title="" class="underline">
													<?php
														if($rowname = mysqli_fetch_array($resultname))
														{
															
															echo $rowname['sname'];
														}
													?>
													
												</a>
												</div>
												<br>
												<br>
												<ul>
													<li>
													
														<?php
															$querycompany="SELECT * from company where sid='$sid'";
															$resultcompany=mysqli_query($connect, $querycompany);
															if($rowcompany=mysqli_fetch_array($resultcompany))
															{
																echo $rowcompany['company_name'];
															
														?>
													</li>
													<li>
														<?php
															echo $rowcompany['designation'];
															}
															else{
																$querycompany="SELECT * from student_status where sid='$sid'";
																$resultcompany=mysqli_query($connect, $querycompany);
																if($rowcompany=mysqli_fetch_array($resultcompany))
																{
																	echo $rowcompany['current_status'];
																}
															}
														?>
													</li>
												<button type="button" class="btn btn-default btn-sm">
          											<span class="glyphicon glyphicon-edit"></span> Edit
        										</button>
												</ul>
												
												<!-- Tab panes -->
												
												  
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="widget">
                        <ul class="location">
                            <li>
                                <i class="ti-map-alt"></i>
                                <p>Vadlamudi,Guntur-522213</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>0863-2344700</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>follow</h4></div>
                        <ul class="list-style">
                            <li><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/vignanuniversityofficial/" title="">facebook</a></li>
                            <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/vfstruniversity?lang=en" title="">twitter</a></li>
                            <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/vignan_university_official/?hl=en" title="">instagram</a></li>
                            <li><i class="fa fa-linkedin"></i> <a href="https://www.linkedin.com/school/vignans-foundation-for-science-technology-research-deemed-to-be-university/" title="">Linked IN</a></li>
                            
                        </ul>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </footer><!-- footer -->
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          
        </div>
      </div>
    </div>
  </div>
				</div>
			</div>
		</div>
	</div>
</div>
	
			
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	

</html>