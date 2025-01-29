<?php session_start(); ?>
<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

    <div class="block">
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2 style="text-transform: uppercase;">
                <?php echo"".$_SESSION['user']; ?></h2>
            <h2>Please Help Us to To Help You...
            
               Choose Your Suitable Options 
               &nbsp;&nbsp;&nbsp;&nbsp;
            </h2>

        </div>
        <form action="#" method="post" class="form-horizontal form-bordered" >
            <?php
            include "db.php";
                    $result = mysqli_query($con,"SELECT * FROM questions2 ");
                    while($test = mysqli_fetch_array($result))
                    {
                        ?>
                        <div class="form-group">
                            <h3 >
                                <?php
                                echo $test['qid'].". ".$test['question'];
                                ?>
                            </h3>
                            <center>
                            <h4>
                             <?php echo"".$test['option1']?>
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="1">&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php echo"".$test['option2']?>
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="2">&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php echo"".$test['option3']?>
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="3" required>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo"".$test['option4']?>
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="4" required>
                       </h4>
                       </center>

                         </div>   

                        <?php

                    }
                            

            ?>


            <div class="form-group">
                <div align="center">
                    <input type="Submit"  name="submit" value="Submit" class="btn btn-primary" required>
                </div>
            </div>
            <u><a href="score.php" align="right"> <h2 >Skip Test </h2></a></u> 
            
        <!-- END Bordered Form Content -->
    </div>
    <!-- END Bordered Form Block -->

<?php
if(isset($_POST['submit']))
{
        $uname=$_SESSION['user'];
        $q1=$_POST['que1'];
        $q2=$_POST['que2'];
        $q3=$_POST['que3'];
        $q4=$_POST['que4'];
        $q5=$_POST['que5'];
        $q6=$_POST['que6'];
        $q7=$_POST['que7'];
        $q8=$_POST['que8'];
        $q9=$_POST['que9'];
        $q10=$_POST['que10'];

        $total=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10;

        $score=($total*100)/40;



        $dot=date("Y-m-d");

         $query=mysqli_query($con,"INSERT INTO `test_score` (uname,score,dot) VALUES ('$uname','$score','$dot')");
         if($query!=0)
         {
             echo"<script>location.href='score.php'</script>";
       
         }
         else{
            echo"TRY again";
         }
         
}

?>

<script src="js/jquery-1.12.4.min.js"></script>

<script src="js/jquery.min.js">
    


<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>