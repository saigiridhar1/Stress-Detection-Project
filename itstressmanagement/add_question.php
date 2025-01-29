<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>


<?php 
    include("db.php");
            
            $tbl_name=$_REQUEST['tbl_name'];

            $result = mysqli_query($con,"SELECT * FROM `$tbl_name`  ");
            

?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Admin Questions List</h2>
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="2" style="font-weight: bolder;">
                <thead>
                    <tr>
                        
                        <th>ID </th>
                        <th>Question</th>
                        <th>Option-1</th>
                        <th>Option-2</th>
                        <th>Option-3</th>
                        <th>Option-4</th>
                        
                        <th >Action</th>
                        
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $ci=0;
                                while($test = mysqli_fetch_array($result))
                            {
                                $qid = $test['qid'];
                                $ci=$ci+1;
                                if($ci%2==0)
                                {
                                    $cls="danger";
                                }
                                else{
                                    $cls="";
                                }

                    ?>

                    <tr class="<?php echo $cls ?>">
                        
                        <td ><?php echo "".$test['qid'];  ?></td>
                        <td ><?php echo "".$test['question'];  ?></td>
                        <td ><?php echo "".$test['option1'];  ?></td>
                        <td ><?php echo "".$test['option2'];  ?></td>
                        <td ><?php echo "".$test['option3'];  ?></td>
                        <td ><?php echo "".$test['option4'];  ?></td>
                        
                        <td><?php echo " <a href ='que_edit.php?tbl_name=$tbl_name&qid=$qid' class='btn btn-sm btn-primary'>Edit</a> &nbsp;";?></td>
                        
                    </tr>
                <?php } ?>                    
                </tbody>
        </table>
        </div>
        <!-- END Styles Content -->
    </div>
    <!-- END Styles Block -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<?php include 'inc/bottom.php'; // Close body and html tags ?>
