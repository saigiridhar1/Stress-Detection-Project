<?php session_start(); ?>
<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header  


$tbl_name=$_REQUEST['tbl_name'];

 ?>

    <div class="block">
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2 style="text-transform: uppercase;">
                <?php echo"".$_SESSION['user']; ?></h2>
            <h2>Please Help Us to To Help You...
            
               Choose Your Suitable Options For Our Questions
               &nbsp;&nbsp;&nbsp;&nbsp;
            </h2>

        </div>
        <table border="2">
        <form action="#" method="post" class="form-horizontal form-bordered" >
            



            <?php
            include "db.php";
                    $result = mysqli_query($con,"SELECT * FROM `$tbl_name` ");
                    $cls=0;
                    $ci="";
                    while($test = mysqli_fetch_array($result))
                    {
                        $cls=$cls+1;
                        if($cls%2==0)
                        {
                         $ci="#AFEEEE";  
                        }
                        else{
                             $ci="#FAEBD7";
                            
                        }
                        ?>
                        <tr style="background-color: <?php echo $ci ?>;">
                            <td>

                        <div class="form-group">
                            <div >
                            
                            <h3 ><strong>
                                <?php
                                echo $test['qid'].". ".$test['question'];
                                ?>
                            </h3>
                            
                            <h4>
                                <br>
                                <strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="1"> <?php echo"".$test['option1']?>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="2">
                             <?php echo"".$test['option2']?>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="3" required>
                             <?php echo"".$test['option3']?>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="que<?php echo $test['qid'] ?>" value="4" required>
                            <?php echo"".$test['option4']?>
                            
                       </h4>
                       
                            </div>
                         </div> 
                         </td>
                         </tr>  

                        <?php

                    }
                            

            ?>
            <tr style="background-color:#FAEBD7 ">
            <td>
            <div class="form-group">
                <div align="center">
                    <br><strong>
                    <input type="Submit"  name="submit" value="__Submit__" class="btn btn-primary" required>
                </div>
            </div>
            <u><a href="score.php" align="right"> <h2 ><strong>Skip Test </h2></a></u> 
        </form>
        </td>
        </tr>
        </table>
            
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