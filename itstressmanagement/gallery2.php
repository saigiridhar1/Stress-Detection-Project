 <?php session_start(); ?>           
<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<!-- Page content -->
<div id="page-content" class="block">
    <!-- Gallery Header -->
    
    
    <!-- Grid Gallery Block -->
    <div class="block">
        <!-- Grid Gallery Title -->
        <div class="block-title">
            <h2><i class="fa fa-th-large"></i> Have a Look <?php echo"".$_SESSION['user']; ?>...
             <br> 
            What You will go through if you dont Stop Smoking 
        </h2>
        </div>
        <!-- END Grid Gallery Title -->

        <!-- Grid Gallery Content -->
        <div class="gallery">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/money_loss.jpg" alt="image">
                </div>
                <div class="col-sm-6">
                    <img src="img/liver_fail.jpg" alt="image">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/head_ache.jpg" alt="image">
                </div>
                <div class="col-sm-6">
                    <img src="img/heart_attack.jpg" alt="image">
                </div>
            </div>
        </div>
        <!-- END Grid Gallery Content -->
        <a href="questions2.php"><h1>Lets Check Your Alcohol Addiction Percentage % </h1></a>
    </div>
    <!-- END Grid Gallery Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>