<?php 
session_start();
include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<div id="page-content" class="block">
<html>
<head>
<div id="container">
	<div class="header">
		<h1>WELCOME TO CHAT... SHARE YOUR EXPERIENCE</h1>
	</div>
    <div class="grey_highlight_shadow">
	<div class="main  " >
	
	
		<?php
            
                if(!isset($_SESSION['username'])){
        ?>
	<form name="form2" method="post" action="login1.php">
		<?php 
            if(isset($_GET['message'])){ 
                $message=$_GET['message'];
                echo "<h3>$message</h3>";
            }
        ?>
    <h3>
	<div  class="grey_highlight_shadow" id="header2" style="height:220px;width:500px;float:left;margin-bottom:10px;margin-top:30px;margin-left:80px;border-radius:25px; ">
	</form>
	
    
	</div>
    <table>
    <tr>
        <td><input type="text" name="username" placeholder="Username"></td>
        <td><input type="password" name="password" placeholder="Passwords"></td>
        <td><input type="submit" name="submit" value="Login"></td>
    </tr>
	
<div  id="header2" style="height:100px;width:200px;float:left;margin-top:40px;margin-left:5;margin-right: 5px;">
 <h1><a href="http://localhost/pta10/trunk/index.php?r=tblLogin/homepage">Home</a>
<a href="http://localhost/pta10/trunk/index.php?r=site/gmt">back</a></h1>
 <img src="images/f1.jpg">
  <img src="images/t1.jpg">
   <img src="images/g1.jpg">
</div>
    </table>
	

    </h3>
 
	
    <?php 
            if(isset($_GET['message1'])){ 
                $message=$_GET['message1'];
                echo "<h5>$message</h5>";
            }
    ?>
	<?php
        exit;
        }
    
    ?>

	<?php 
                if(isset($_GET['username'])){
                $_GET['username'];
                }
    ?>

	<script src="js/jquery.min.js"></script>
	<script>

	function submitchat(){
		if(form1.msg.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var msg = form1.msg.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('chatlogs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?msg='+msg, true); //open and send http request
		xmlhttp.send();
	}
	$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#chatlogs').load('logs.php');}, 2000);
		});
		
	</script>
</head>
<body>
<div class=" grey_highlight_shadow" id="header2" style="height:400px;width:200px;float:right;margin-top:30px;margin-left:10px;margin-right: 5px">
 <h3 style="text-align:center"> See Who is online </h3> 
 <div  id="header2" style="height:100px;width:250px;float:;margin-top:10px;margin-left:;margin-right: 5px;">
 <div id="header2" style="height:10px;width:10px;float:left;margin-top:1px;margin-left:30px;margin-right: 5px;background-image: url(images/on.jpg);">
 </div>
 <div  id="header2" style="height:30px;width:170px;float:left;margin-top:0px;margin-left:;margin-right: 5px;">
 
 
<?php 
echo $_SESSION['username']; 

 ?>
 </div>
 </div>
 
 
 
</div>

<h2>welcome, <?php echo $_SESSION['username']; ?></h2>
	<div id="chatlogs">
    	LOADING CHATLOGS, PLEASE WAIT...
    </div>
<form name="form1">
     <div class="form-group">
	</br> <textarea name="msg" placeholder="Your message here..." style="width:590px; height:30px;"></textarea>
    <hr>
	<a href="#" onClick="submitchat()" class="btn btn-primary">Send</a></br></br>
</div>
</form>
    </div>
</div>
</div>

</div>
 
</body>

</html>

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>