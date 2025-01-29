<?php include 'inc/Aconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #800080;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>




<!-- Page content -->
<div id="page-content" class="block">
<center>    
<h2>__Welcome To Admin Panel__</h2>


<button class="button"></button>
<button class="button button2"></button>
<button class="button button3"></button>
<button class="button button4"></button>
<button class="button button5"></button>
<hr>
</center>
    <!-- Animations Content -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
           




                <div class="col-sm-4" style="background-color:#DDA0DD;">
                    ______
                    <div class="block-section">
                <a href="counsellors.php" class="btn btn-sm btn-primary" >All Counsellors </a>
                </div>
                ______
                <div class="block-section">
                <a href="admin_view1.php" class="btn btn-sm btn-primary" >All Users </a>
                </div>
                ______
                <div class="block-section">
                <a href="admin_view2.php" class="btn btn-sm btn-primary" >Addiction Score</a>
                </div>
                <hr>
                </div>

            
                <hr>
                </div>
                <div class="col-sm-4">
                <img src="img/admin.png" width="200" height="200">
                </div>
                <div class="col-sm-4">
                </div>


                <div class="col-sm-4">
                </div>
            
                <div class="col-sm-4" style="background-color:#DDA0DD;">
                <br>  
                <div class="block-section">
                <a href="add_question.php?tbl_name=questions" class="btn btn-sm btn-primary" >Add Questions for Alcohol Test</a>
                </div>    
                   
                <div class="block-section">
                <a href="add_question.php?tbl_name=questions2" class="btn btn-sm btn-primary" >Add Questions for Smoking Test</a>
                </div>    
                
                <hr>
                </div>
                <hr><hr>
                <div > 
                <div class="col-sm-4">
                </div>
            

                <div class="col-sm-4" style="background-color:#DDA0DD;">
                    <br>
                <div class="block-section">
                <a href="add_question.php?tbl_name=questions4" class="btn btn-sm btn-primary" >Add Questions for Anxity and stress Test</a>
                </div>    
                
                <hr>  
               </div>
                


                <div class="col-sm-4">  
                </div>  
            </div>
                 
           
        </div>
    </div>
    <!-- END Animations Content -->
</div>
<!-- END Page Content -->







<?php  include 'inc/footer.php'; ?>


<?php 
include 'inc/bottom.php'; // Close body and html tags 


?>