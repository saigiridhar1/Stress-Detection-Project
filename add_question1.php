<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>


<?php 
    include("db.php");
            
                
            $result = mysqli_query($con,"SELECT * FROM questions1  ");
            

?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Tobacco Question List</h2>
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
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
                                while($test = mysqli_fetch_array($result))
                            {
                                $qid = $test['qid'];
        

                    ?>

                    <tr>
                        <td ><?php echo "".$test['qid'];  ?></td>
                        <td ><?php echo "".$test['question'];  ?></td>
                        <td ><?php echo "".$test['option1'];  ?></td>
                        <td ><?php echo "".$test['option2'];  ?></td>
                        <td ><?php echo "".$test['option3'];  ?></td>
                        <td ><?php echo "".$test['option4'];  ?></td>
                        
                        <td><?php echo " <a href ='que_edit1.php?qid=$qid' class='btn btn-sm btn-primary'>Edit</a> &nbsp;";?></td>
    
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
