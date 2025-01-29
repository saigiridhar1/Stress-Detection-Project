<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php
include("db.php");

$tbl_name = $_REQUEST['tbl_name'];
$qid = $_REQUEST['qid'];


$result = mysqli_query($con,"SELECT * FROM `$tbl_name` WHERE qid  = '$qid'");
$test = mysqli_fetch_array($result);
if (!$result) 
        {
        die("Error: Data not found..");
        }
                $qid=$test['qid'] ;
                $question= $test['question'] ;
                $option1=$test['option1'];
                $option2=$test['option2'];
                $option3=$test['option3'];
                $option4=$test['option4'];


if(isset($_POST['save']))
{   
                $qid_save=$qid ;
                $question_save=$_POST['question'] ;
                $option1_save=$_POST['option1'];
                $option2_save=$_POST['option2'];
                $option3_save=$_POST['option3'];
                $option4_save=$_POST['option4'];
                
                
                
        

    mysqli_query($con,"UPDATE `$tbl_name` SET qid = '$qid_save',
                question = '$question_save', option1 = '$option1_save' , option2 = '$option2_save', option3 = '$option3_save' , option4 = '$option4_save' WHERE qid = '$qid' ")
                or die(mysql_error()); 
    echo "Saved!";
    
    echo"<script>location.href='add_question.php?tbl_name=$tbl_name'</script>";          
}

?>

   <!-- Bordered Form Block -->
    <div class="block">
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2>Fill the Question Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        <form  method="post" class="form-horizontal form-bordered" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Q.No.</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="qid" value="<?php echo $qid ?>" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-bio">Question
                </label>
                <div class="col-sm-4">
                    <textarea id="bordered-bio" name="question" rows="4" class="form-control" required> <?php echo $question ?></textarea>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Option 1 </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="option1" value="<?php echo $option1 ?>" class="form-control" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Option 2 </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="option2" value="<?php echo $option2 ?>" class="form-control" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Option 3 </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="option3" value="<?php echo $option3 ?>" class="form-control" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Option 4 </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="option4" value="<?php echo $option4 ?>" class="form-control" >
                </div>
            </div>
               
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="submit" name="save" class="btn btn-sm btn-primary" value=" UPDATE "/>
                </div>
            </div>
            
        </form>
        <!-- END Bordered Form Content -->
    </div>
    <!-- END Bordered Form Block -->
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

