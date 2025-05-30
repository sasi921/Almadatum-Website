<!DOCTYPE html>
<html lang="en">

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
	<title>VIDEOS</title>
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
			<a title="" href="newsfeed.php"><img src="images/logo.png" alt="" style="height:60px;"></a>
		</div>
		
		
			</div>
		</div>
	</div><!-- topbar -->
	
	<section>
			<div class="feature-photo">
				<figure><img src="images/resources/timeline-1.jpg" alt="" style="height:600px;"></figure>
				
				<form class="edit-phto">
					<i class="fa fa-camera-retro"></i>
					<label class="fileContainer">
						Edit Cover Photo
					<input type="file"/>
					</label>
				</form>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<img src="images/resources/admin.jpg" alt="">
									<form class="edit-phto">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Edit Display Photo
											<input type="file"/>
										</label>
									</form>
								</figure>
							</div>
						</div>
						<div class="col-lg-10 col-sm-9">
							<div class="timeline-info">
								<ul>
									
									<li>
										<a class="" href="timeline-photos.php" title="" data-ripple="">Photos</a>
										<a class="active" href="timeline-videos.php" title="" data-ripple="">Videos</a>
										
										
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- top area -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											
										</div>
									<div class="widget">
										<h4 class="widget-title">VIDEOS</h4>
										<ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="newsfeed.php" title="">News feed</a>
											</li>
											
												<i class="ti-image"></i>
												<a href="timeline-photos.php" title="">images</a>
											</li>
											<li>
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
									<ul class="photos">
										<h1>NO VIDEOS UPLOADED BY YOU</h1>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											
									
									
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
                        <div class="foot-logo">
                            <div class="logo">
                                <a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
                            </div>  
                            <p>
                                
                            </p>
                        </div>
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
	
</div>
	
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>	


</html>