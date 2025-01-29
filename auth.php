<html>
<head>
<title>Log in</title>
</head>
<body bgcolor="#000000">
<style>
.btn{
	padding:20px;
	color:#F70408;
	background-color:#FCF9F9;
	}
.text{
	color:#FF0004;
	}
</style>
<?php
   include("db.php");
   
      
      $uname = $_POST['uname'];
      
	  
	  $password = $_POST['password']; 
      
      if($uname=='admin' & $password=='admin')
      {
      	echo "<script>location.href='admin_panel.php'</script>";

      }
      if($uname=='doctor1' & $password=='doctor1')
      {
      	session_start();
      	$_SESSION['user']="DR.Rajesh";
      	$_SESSION['username']="DR.Rajesh";
      	echo "<script>location.href='chatbox.php'</script>";

      }
      if($uname=='doctor2' & $password=='doctor2')
      {
      	session_start();
      	$_SESSION['user']="DR.Suresh";
      	$_SESSION['username']="DR.Suresh";
      	echo "<script>location.href='chatbox.php'</script>";

      }
      
      $result = mysqli_query($con,"SELECT * FROM users WHERE uname = '$uname' AND pswd = '$password'  ");
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);
      session_start();
    	
      if(($count == 1)) {
		  $_SESSION['user']=$uname;
		 $_SESSION['username']=$uname;
		   
         
         echo"<h1 class='text'  >Hello ".$uname."<br> here we go for DAY " ;
		 $cdate=date("Y-m-d");
 		 $res=mysqli_query($con,"SELECT * FROM users WHERE uname = '$uname'");
		 $test = mysqli_fetch_array($res);
 		 $tdate=$test['DOJ'];
 		 
		$datetime1 = date_create($tdate );
		$datetime2 = date_create($cdate);
		$interval = date_diff($datetime1, $datetime2);
		$days=$interval->format('%a');
		echo"".$days+1;


 		 
		 echo"<script> location.href='category.php'</script>";
		 
      }else {
		  session_destroy();
         echo "<h1 class='text'> Name or Password is invalid</h1>";
		 echo "<br><br><a  href='index.php' class='btn '> Try Again </a>";
		 
      }
	  
	  
  
?>
</body>
</html>