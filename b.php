
<?php  

session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: index.php");//use for the redirection to some page 
exit; 
?>


<?php    
session_start(); 
session_destroy();
if(isset($_SERVER['HTTP_REFERER'])) {
 header('Location: '.$_SERVER['HTTP_REFERER']);  
} else {
 header('Location: index.php');  
}
exit;  
?>