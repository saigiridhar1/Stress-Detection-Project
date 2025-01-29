  <?php include 'inc/config.php'; // Configuration php file ?>
  <!DOCTYPE html>
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	  <head>
		  <meta charset="utf-8">
  
		  <title><?php echo $template['title'] ?></title>
  
		  <meta name="description" content="<?php echo $template['description'] ?>">
		  <meta name="author" content="<?php echo $template['author'] ?>">
		  <meta name="robots" content="noindex, nofollow">
  
		  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
  
		  <!-- Icons -->
		  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
		  <link rel="shortcut icon" href="img/favicon.ico">
		  <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
		  <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
		  <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
		  <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
		  <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
		  <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
		  <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
		  <!-- END Icons -->
  
		  <!-- Stylesheets -->
		  <!-- Bootstrap is included in its original form, unaltered -->
		  <link rel="stylesheet" href="css/bootstrap.css">
  
		  <!-- Related styles of various icon packs and javascript plugins -->
		  <link rel="stylesheet" href="css/plugins.css">
  
		  <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
		  <link rel="stylesheet" href="css/main.css">
  
		  <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
		  <?php if ($template['theme']) { ?>
		  <link id="theme-link" rel="stylesheet" href="css/themes/<?php echo $template['theme']; ?>.css">
		  <?php } ?>
  
		  <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
		  <link rel="stylesheet" href="css/themes.css">
		  <!-- END Stylesheets -->
  
		  <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
		  <script src="js/vendor/modernizr-respond.min.js"></script>
	  </head>
	  <body>
		  <!-- Header -->
		  <header class="navbar navbar-default navbar-fixed-top">
			  <!-- Header Brand -->
			  <div >
				  <img src="img/template/lg1.jpg"  alt="FreshUI">
				  <span><?php //echo $template['name']; ?></span>
			  </div>
			  <!-- END Header Brand -->
		  </header>
		  <!-- END Header -->
  
		  <!-- Login Container -->
		  <div id="login-container">
			  <!-- Page Content -->
			  <div id="page-content" class="block remove-margin">
				  <!-- Login Title -->
				  <div class="block-header">
					  <div class="header-section">
						  <h1 class="text-center">Welcome to IT Stress Management<br><small>Please Login </small></h1>
					  </div>
					  
				  </div>
				  
						  <div class="col-xs-4">
							  <button class="btn btn-lg btn-info btn-block" id="admin-login-btn"> New User</button>
						  </div>
						  <div class="col-xs-4">
							  <button  class="btn btn-lg btn-info btn-block" id="emp-login-btn">Log in</button>
						  </div>
						  <div class="col-xs-4">
							<a href="echat/">  <button  class="btn btn-lg btn-info btn-block" >Counsellor</button>
							</a>
						  </div>
						  
				  <!-- END Login Title -->
	  <!-- Social Login -->
						  <!-- END Social Login -->
					  
				  <!-- Login Form -->
				  <form action="auth.php" method="post" id="log_in" class="form-horizontal">
					  <div class="form-group">
					  <br><br><br>
					  <h3>Please fill the Details</h3>
					  <br>
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								  <input type="text" id="uname" name="uname" class="form-control input-lg" placeholder="User-Name" required>
							  </div>
						  </div>
					  </div>
					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password" required>
							  </div>
						  </div>
					  </div>
					  <div class="form-group">
						  
						  <div class="col-xs-4 text-right">

							  <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-angle-right"></i><b> Log In</b> </button>
						  </div>
						   <div class="col-xs-4 text-right">

							  <a href="reset_pass.php"  class="btn btn-sm btn-danger"><i class="fa fa-angle-right"></i> Forgot Password </a>
						  </div>
					  </div>
				  </form>
				  <!-- END Login Form -->
  
				  <!-- Register Form -->
  <form action="new_reg.php" method="post" id="sign_up" class="form-horizontal" onSubmit = "return checkPassword(this)">
					  <div class="form-group">
					  <br><br><br>
					  <h3>Please fill the Details</h3>
					  <br>
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								  <input type="text" id="emp-username" required name="fname" class="form-control input-lg" placeholder="Full Name">
							  </div>
						  </div>
					  </div>

					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="email" id="email" required name="email_id" class="form-control input-lg" placeholder="Enter Your Email ID">
							  </div>
						  </div>
					  </div>
					  		
					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="number" id="age" required name="age" class="form-control input-lg" placeholder="Enter Your Age">
							  </div>
						  </div>
					  </div>
					  	
					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="text" id="uname" required name="uname" class="form-control input-lg" placeholder="Set Username">
							  </div>
						  </div>
					  </div>

					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="password" id="password1" required name="password1" class="form-control input-lg" placeholder="Password">
							  </div>
						  </div>
					  </div>
	
					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="password" id="password2" required name="password2" class="form-control input-lg" placeholder="Confirm Password">
							  </div>
						  </div>
					  </div>
					  <div class="form-group">
						  
						  <div class="col-xs-4 text-right">
							  <button type="submit" name="submit" class="btn btn-sm btn-success"><i class="fa fa-angle-right"></i> Register </button>
						  </div>
					  </div>
				  </form>                <!-- END Register Form -->
  
				  <!-- Modal Terms -->
				  <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
					  <div class="modal-dialog">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">Terms &amp; Conditions</h4>
							  </div>
							  
						  </div>
					  </div>
				  </div>
				  <!-- END Modal Terms -->
			  </div>
			  <!-- END Page Content -->
		  </div>
		  <!-- END Login Container -->
  			 <script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") ;
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                     
                    return true; 
                } 
            } 
        </script> 
		  <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>
  
		  <!-- Bootstrap.js, Jquery plugins and custom Javascript code -->
		  <script src="js/vendor/bootstrap.min.js"></script>
		  <script src="js/plugins.js"></script>
		  <script src="js/main.js"></script>
  
		  <!-- Javascript code only for this page -->
		  <script>
			  $(function(){
				  document.getElementById("log_in").style.display="none";
				  document.getElementById("sign_up").style.display="none";
				  /* Save buttons (remember me and terms) and hidden checkboxes in variables */
				  var checkR  = $('#login-remember'),
					  checkT  = $('#register-terms'),
					  btnR    = $('#btn-remember'),
					  btnT    = $('#btn-terms');
  
				  // Add the 'active' class to button if their checkbox has the property 'checked'
				  if (checkR.prop('checked')) btnR.addClass('active');
				  if (checkT.prop('checked')) btnT.addClass('active');
  
				  // Toggle 'checked' property of hidden checkboxes when buttons are clicked
				  btnR.on('click', function(){ checkR.prop('checked', !checkR.prop('checked')); });
				  btnT.on('click', function(){ checkT.prop('checked', !checkT.prop('checked')); });
  
				  /* Login & Register show-hide */
				  var formAdmin      = $('#sign_up'),
					  formEmp    = $('#log_in');
  
				  $('#emp-login-btn').click(function(){ formAdmin.slideUp(500); formEmp.slideDown(500); });
				  $('#admin-login-btn').click(function(){ formAdmin.slideDown(500); formEmp.slideUp(500);  });
			  });
		  </script>
	  </body>
  </html>