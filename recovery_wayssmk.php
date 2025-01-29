<?php session_start();
 $uname = $_SESSION['user']; ?>
<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<div class="block">
                <!-- Quick Stats Title -->
                <center>
                <div class="block-title">
                    <h2 class="text-center"><i class="fa fa-glass"> &nbsp;&nbsp;&nbsp; </i><?php echo $uname ?>&nbsp; We are here with some possible ways to stop your addiction &nbsp;<i class="fa fa-pause" ></i> </h2>
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
                     <strong> 1. Put it in writing : </strong> 
                      Making a list of the reasons to curtail your drinking — such as feeling healthier, sleeping better, or improving your relationships — can motivate you. 
                   </h3><hr>

                  <h3>
                     <strong> 2. Don't keep cigerette in your house : </strong> 
                       Having no cigerette at home can help limit your drinking.
                   </h3><hr>

                   <h3>
                     <strong> 3. Keep busy : </strong> 
                       Take a walk, play sports, go out to eat, or catch a movie. When you're at home, pick up a new hobby or revisit an old one. Painting, board games, playing a musical instrument, woodworking — these and other activities are great alternatives to smoking
                   </h3><hr>
                   
                   <h3>
                     <strong> 4. Put it in writing : </strong> 
                      Making a list of the reasons to curtail your smokingg — such as feeling healthier, sleeping better, or improving your relationships — can motivate you. 
                   </h3><hr>
                   
                   <h3>
                     <strong> 5. Ask for support : </strong> 
                       Cutting down on your drinking may not always be easy. Let friends and family members know that you need their support. Your doctor, counselor, or therapist may also be able to offer help.
                   </h3><hr>
                   
                   <h3>
                     <strong> 6. Learn relaxation techniques: </strong> 
                       Meditation, progressive muscle relaxation, guided imagery, deep breathing exercises, and yoga are powerful relaxation techniques and stress-busters.
                   </h3><hr>
                   
                   <h3>
                     <strong> 7. Nurture yourself  : </strong> 
                      Treat yourself to a massage. Truly savor an experience: for example, eat slowly and really focus on the taste and sensations of each bite. Take a walk or a nap, or listen to your favorite music. 
                   </h3><hr>
                    
                   <h3>
                     <strong> 8. Be persistent  : </strong> 
                      Most people who successfully cut down or stop drinking altogether do so only after several attempts. You'll probably have setbacks, but don't let them keep you from reaching your long-term goal. There's really no final endpoint, as the process usually requires ongoing effort. 
                   </h3><hr>
                   
                   <h3>
                     <strong> 9. Watch for peer pressure  : </strong> 
                       Practice ways to say no politely. You do not have to drink just because others are, and you shouldn't feel obligated to accept every drink you're offered. Stay away from people who encourage you to drink. 
                   </h3><hr>
                   
                   <h3>
                     <strong> 10.  Keep a diary of your drinking  : </strong> 
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
            