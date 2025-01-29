<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	include("db.php");
	$flag1=0;								

?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Test Results</h2>
       
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        
        <div class="table-responsive">
           
     
        <?php
		     	
				
						
					$result = mysqli_query($con,"SELECT * FROM test_score ");
					$count = mysqli_num_rows($result);
 					$flag1 = 0;

			echo"<h4> Total surveys : ".$count."</h4>"; ?>
            	
            <table id="general-table" class="table">
                <thead>
                    <tr>
                         <th>Person Name</th>
                         <th>Test Score</th>
                        
                        <th> Test Date</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
						while($test = mysqli_fetch_array($result))
						{
							$bid = $test['id'];
							$flag1=1;
		

                    ?>

                    <tr>
                       <td ><?php echo "".$test['uname'];  ?></td>
                       <td ><?php echo "".$test['score'];  ?></td>
                       <td ><?php echo "".$test['dot'];  ?></td>
                        
    				  	
                    </tr>
				<?php }?>                    
                </tbody>
 		</table>
        </div>
        <!-- END Styles Content -->
    </div>
    <!-- END Styles Block -->

<?php

if($flag1==0)
{
echo" <h1 class='text-primary'> Record Not Found</h1>";	
	}

 include 'inc/footer.php'; // Footer and scripts ?>


<?php include 'inc/bottom.php'; // Close body and html tags ?>
