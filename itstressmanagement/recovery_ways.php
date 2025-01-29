<?php session_start();
 $uname = $_SESSION['user']; ?>
<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<div class="block">
                <!-- Quick Stats Title -->
                <center>
                <div class="block-title">
                    <h2 class="text-center"><i class="fa fa-glass"> &nbsp;&nbsp;&nbsp; </i><?php echo $uname ?>&nbsp; We are here with some possible ways to Reduce  your addictionanxity and stress Levels &nbsp;<i class="fa fa-pause" ></i> </h2>
                </div>
                </center>
                <!-- END Quick Stats Title -->

                <!-- Quick Stats Content -->
                <?php
                include "db.php";
               
                    
            
                ?>
                <div class="row">
                   <center> 
                   <h1>Don't Panic...</h1>
                   <img src="img/logo1.png" width="200" height="100">
                        </center><br><hr>
                   <h3>
                     <strong> 1. Time Management:: </strong> 
                      Prioritize tasks and set realistic deadlines. Use tools like task lists, calendars, and project management software to stay organized and manage your time effectively.. 
                   </h3><hr>

                  <h3>
                     <strong> 2.Take Regular Breaks: : </strong> 
                       Follow the Pomodoro Technique or similar methods to take regular breaks. Short breaks can help you recharge and improve productivity.
                   </h3><hr>

                   <h3>
                     <strong> 3.Exercise Regularly:  : </strong> 
                       Follow the Pomodoro Technique or similar methods to take regular breaks. Short breaks can help you recharge and improve productivity.
                   </h3><hr>
                   
                   <h3>
                     <strong> 4. Healthy Diet:

  </strong> 
                      Maintain a balanced diet with plenty of fruits, vegetables, and whole grains. Avoid excessive caffeine and sugar, which can increase stress levels. 
                   </h3><hr>
                   
                   <h3>
                     <strong> 5. Mindfulness and Meditation: : </strong> 
                      Practice mindfulness or meditation techniques to calm your mind and reduce anxiety. Even a few minutes a day can make a significant difference.                   </h3><hr>
                   
                   <h3>
                     <strong> 6. Set Boundaries:: </strong> 
                       Establish clear boundaries between work and personal life. Avoid checking emails or working after hours unless absolutely necessary..
                   </h3><hr>
                   
                   <h3>
                     <strong> 7. Seek Support:   </strong> 
                      Talk to colleagues, friends, or family members about your stress. Sometimes, just sharing your concerns can help alleviate stress. Consider professional counseling if needed. 
                   </h3><hr>
                    
                   <h3>
                     <strong> 8. Professional Development:  : </strong> 
                      
                   </h3><hr>
                   
                   <h3>
                     <strong> 9. Watch for peer pressure  : </strong> 
                       Practice ways to say no politely. You do not have to drink just because others are, and you shouldn't feel obligated to accept every drink you're offered. Stay away from people who encourage you to drink. 
                   </h3><hr>
                   
                   <h3>
                     <strong> 9.  DO YOGA AND MEDITATION </strong> 
                      For three to four weeks, keep track of every time you have a drink. Include information about what and how much you drank as well as where you were. Compare this to your goal. If you're having trouble sticking to your goal, discuss it with your doctor or another health professional. 
                   </h3><hr>
                   <hr>
                  <center>
                    <h3>...All The Very Best...</h3>

                  </center>                                      

                    
                </div>
                <!-- END Quick Stats Content -->
</div>

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>
            