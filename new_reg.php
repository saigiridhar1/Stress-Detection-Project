<html>
<head>
	<title> Register </title>
		
	
</head>
<body bgcolor="black">
	<style type="text/css">
		.txt{
			color: white;
			font-size: 36;

		}
		.btn{
			padding: 20px;
			background-color: red;
			color: white;
			font-size: 36;
		}
	</style>
<?php
//echo"hello";
if (isset($_POST['submit']))
	{	   
	include 'db.php';
					
			 		
					$fname= $_POST['fname'] ;
					$email_id= $_POST['email_id'] ;
										
					$age=$_POST['age'] ;
					$uname=$_POST['uname'] ;
					$password1=$_POST['password1'] ;
					
						
					
					
  	$sql_u = "SELECT * FROM users WHERE uname='$uname'";
  	
  	$res_u = mysqli_query($con, $sql_u);
  	
  	if (mysqli_num_rows($res_u) > 0) {
  	  echo "<h2 class='txt'> Sorry... username already taken </h2>"; 
  	  echo"<a href='index.php' class='btn'> Try Again </a>";	
  	}
  	else{
				
		$doj=date("Y-m-d");

		 $query=mysqli_query($con,"INSERT INTO `users` (fname,email_id,age,uname,pswd,DOJ) VALUES ('$fname','$email_id','$age','$uname','$password1','$doj')");
		  
				if($query!=0)
				{
					//session_start();
					//$_SESSION['data_inserted']=1;
					echo"<h2 class='txt'>Registerd successfully  <br><br> &nbsp; ".$uname." &nbsp;  Now You can Log-in... </h2><br><br>";
					echo"<a href='index.php' class='btn '> Log-in</a>";
					
					}
					else
					{
						//$_SESSION['data_inserted']=0;
						echo"<h1 class='txt'> ".mysql_error()."</h1>";
					 	echo"<h2 class='txt'>Something went wrong..<br><br></h2>";
						echo"<a href='index.php' class='btn' > Try Again </a>";
	
						}
					}
						
				
				
 }
 else
 {
	 				echo"<h2 class='txt'>Something went wrong.  <br><br></h2>";
					echo"<a href='index.php' class='btn' > Try Again </a>";
	
	 }
?>

</body>
</html>
