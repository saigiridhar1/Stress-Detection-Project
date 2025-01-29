<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	include("db.php");
				
			$result = mysqli_query($con,"SELECT * FROM counselors");
			$count=mysqli_num_rows($result);
 			//$count = mysql_query("SELECT COUNT(*)FROM videos");
			//$count = mysql_query("SELECT COUNT( * ) AS total FROM videos");
     
?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Counsellors List</h2>
  			
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        
                    <?php
                    $ci=0;
                    $clb="";
								while($test = mysqli_fetch_array($result))
							{
								
								$bid = $test['id'];
                                $ci=$ci+1;
                                if($ci%2==0)
                                {
                                    $clb="#ADD8E6";
                                }
                                else
                                {
                                     $clb="#FFEBCD";
                                    
                                }

										

                    ?>

                    <div style="background-color: <?php echo $clb ;?>; ">
                        <h3><br><b>
                        <?php //echo "".$test['id'];  ?>
                        
                        COUNSELLOR NAME: <?php echo "".$test['c_name'];  ?><br><br>
                        
                        <?php echo "".$test['c_address'];  ?><br>
                        <br>
                        

                        Email_ID:<u> <?php echo "".$test['c_email'];  ?></u><br><br>
                        
                        Contact: <?php echo "".$test['c_contact'];  ?><br>
                       </b> </h3><br>
	
                    </div>
                    <hr><hr>
				<?php } ?>                    
           
        <!-- END Styles Content -->
    </div>
    <!-- END Styles Block -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->

<?php include 'inc/bottom.php'; // Close body and html tags ?>
