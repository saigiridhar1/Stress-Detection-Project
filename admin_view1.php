<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	include("db.php");
				
			$result = mysqli_query($con,"SELECT * FROM users");
			$count=mysqli_num_rows($result);
 			//$count = mysql_query("SELECT COUNT(*)FROM videos");
			//$count = mysql_query("SELECT COUNT( * ) AS total FROM videos");
     
?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Users List</h2>
  			<?php echo"<h4> Total surveys : ".$count."</h4>"; ?>
       
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
                <thead>
                    <tr>
                        
                        
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>DOJ</th>
                        <th >User Name</th>
                        <th >Password</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
								while($test = mysqli_fetch_array($result))
							{
								$count+=1;
								$bid = $test['id'];
										

                    ?>

                    <tr>
                        <td ><?php echo "".$test['id'];  ?></td>
                        <td ><?php echo "".$test['fname'];  ?></td>
                        <td ><?php echo "".$test['age'];  ?></td>
                        <td ><?php echo "".$test['DOJ'];  ?></td>
                        <td ><?php echo "".$test['uname'];  ?></td>
                        <td ><?php echo "".$test['pswd'];  ?></td>
                        
                      	<td><?php echo "<a href ='admin_del_survey.php?bid=$bid' class='btn btn-sm btn-primary' >Delete</a>";?></td>
	
                    </tr>
				<?php } ?>                    
                </tbody>
 		</table>
        </div>
        <!-- END Styles Content -->
    </div>
    <!-- END Styles Block -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->

<?php include 'inc/bottom.php'; // Close body and html tags ?>
