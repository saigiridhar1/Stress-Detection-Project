<?php session_start();
 $uname = $_SESSION['user']; ?>
<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
<center>
<div class="block">
                <!-- Quick Stats Title -->
                <div class="block-title">
                    <h2 class="text-center"><i class="fa fa-glass"> &nbsp;&nbsp;&nbsp; </i><?php echo $uname ?>&nbsp; Your  Addiction Percentage is </h2>
                </div>
                <!-- END Quick Stats Title -->

                <!-- Quick Stats Content -->
                <?php
                include "db.php";
               $score=0;
                    $result = mysqli_query($con,"SELECT score FROM test_score WHERE uname='$uname' ");
                    while($test = mysqli_fetch_array($result))
                    {
                        $score=$test['score'];
                    }
            
                ?>
                <div class="row">
                    <div >
                        <div class="pie-chart block-section" data-percent="<?php echo($score);?>" data-size="200">
                            <span class="fa fa-glass"> <strong><?php echo($score." % "); ?></strong></span>
                        </div>
                    </div>
                   <h1>Don't Panic...</h1>
                   <img src="img/logo1.png" width="200" height="100">
                   <h3>We Can Help You. To Come Out of Your Bad Habits  </h3>
                   <br>
                   <a href="recovery_ways.php"><h2>Here We Go...</h2></a>     
                </div>
                <!-- END Quick Stats Content -->
</div>
</center>
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>
            