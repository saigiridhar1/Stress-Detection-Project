<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php
include("db.php");

$id = $_REQUEST['bid'];


$result = mysqli_query($con,"SELECT * FROM `counselors` WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
        {
        die("Error: Data not found..");
        }
               // $id=$test['id'] ;
                $c_name= $test['c_name'] ;
                $c_address=$test['c_address'];
                $c_email=$test['c_email'];
                $c_contact=$test['c_contact'];
                $username=$test['username'];
                $password=$test['password'];

                


if(isset($_POST['submit']))
{   
               // $id_save=$id ;
                $c_name_save=$_POST['c_name'] ;
                $c_address_save=$_POST['c_address'];
                $c_email_save=$_POST['c_email'];
                $c_contact_save=$_POST['c_contact'];
                
                $username_save=$_POST['username'];
                $password_save=$_POST['password'];
                                
                
        

    mysqli_query($con,"UPDATE `counselors` SET 
                c_name = '$c_name_save', c_address = '$c_address_save' , c_email = '$c_email_save', c_contact = '$c_contact_save', username='$username_save', password='$password_save'  WHERE id = '$id' ")
                or die(mysql_error()); 
    echo "Saved!";
    
    echo"<script>location.href='counsellors.php'</script>";          
}

?>

   <!-- Bordered Form Block -->
    <div class="block">
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2>Edit the  Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        <form  method="post" class="form-horizontal form-bordered" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Counsellor's Name: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="c_name" value="<?php echo($c_name)?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-bio">Counsellor's Address: 
                </label>
                <div class="col-sm-4">
                    <textarea id="bordered-bio" name="c_address" rows="4" class="form-control" required> <?php echo($c_address)?></textarea>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Counsellor's Email_ID: </label>
                <div class="col-sm-4">
                    <input type="email" id="bordered-username" name="c_email"  value="<?php echo($c_email)?>"class="form-control" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Counsellor's Contact: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="c_contact" value="<?php echo($c_contact)?>" class="form-control" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">User-Name: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="username" value="<?php echo($username)?>" class="form-control" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Password: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="password" value="<?php echo($password)?>" class="form-control" >
                </div>
            </div>
               
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="submit" name="submit" class="btn btn-sm btn-primary" value=" SUBMIT "/>
                </div>
            </div>
            
        </form>
        <!-- END Bordered Form Content -->
    </div>
    <!-- END Bordered Form Block -->
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

