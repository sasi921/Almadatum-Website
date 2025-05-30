<?php  
 $connect = mysqli_connect("localhost", "root", "", "alumnis"); 
 if(isset($_POST["insert"]))  
 {   
     $caption=$_POST['text'];
     //$path=$_POST['image'];
     if(isset($_FILES["image"]["tmp_name"])){
          $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     
          $query = "insert into posts(sid,media,caption) values ('181FA04270','$file','$caption')";  
     }
      else{
          $query = "insert into posts(sid,caption) values ('181FA04270','$caption')";  
      }
     
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <?php
session_start();
  if(!isset($_SESSION['sid']))
  {
     
    header( "refresh:0;url=landing.php" );
  } ?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <input type="text" name="text" id="text" />  
                     <br />  
                     <?php
                         $sid=$_SESSION['sid'];
                         
                     ?>
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
 
               <?php  
                    $query = "SELECT * FROM posts ORDER BY time DESC";  
                    $result = mysqli_query($connect, $query); 
                                            
                    while($row = mysqli_fetch_array($result))  
                    {?>
                          <div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="images/resources/admin.jpg" alt="">
											</figure>
											<div class="friend-name">
												<ins><?php echo $row['sid']; ?></ins>
												<span><?php echo $row['time']; ?></span>
											</div>
											<div class="post-meta">                                                            
                                                       <?php                              if(isset($row['media'])){
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
                    } ?>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name != '')  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>