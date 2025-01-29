<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php
include("db.php");
?>

    <div class="block">
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2>Fill the Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        <form  method="post" class="form-horizontal form-bordered" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Counsellor's Name: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="c_name" value="" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-bio">Counsellor's Address: 
                </label>
                <div class="col-sm-4">
                    <textarea id="bordered-bio" name="c_address" rows="4" class="form-control" required> </textarea>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Counsellor's Email_ID: </label>
                <div class="col-sm-4">
                    <input type="email" id="bordered-username" name="c_email"  class="form-control" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Counsellor's Contact: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="c_contact"  class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">User-Name: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="username"  class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Password: </label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="password"  class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="submit" name="submit" class="btn btn-sm btn-primary" value=" SUBMIT "/>
                </div>
            </div>
            
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $c_name=$_POST['c_name'];
            $c_address=$_POST['c_address'];
            $c_email=$_POST['c_email'];
            $c_contact=$_POST['c_contact'];
            $username=$_POST['username'];
            $password=$_POST['password'];

             $query=mysqli_query($con,"INSERT INTO `counselors` (c_name,c_address,c_email,c_contact,username,password) VALUES ('$c_name','$c_address','$c_email','$c_contact','$username','$password')");
             $query1=mysqli_query($con,"INSERT INTO `login1` (username,password) VALUES ('$username','$password')");
             
             if($query && $query1)
             {
                echo "Data Inserted";
                echo "<script>location.href='counsellors.php'</script>";
             }
             else
             {
                echo "Data Not Inserted".mysqli_error($con);
             }

        }

        ?>
        <!-- END Bordered Form Content -->
    </div>
    <!-- END Bordered Form Block -->
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

