<?php
session_start();
include 'database/db.php';
if(isset($_SESSION['role']) and $_SESSION['role']=='owner'){
    header('Location: /futsa/adminPanel/adminAfterLogin.php');
}
?>


<link href="./src/css/ui.css" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='futsalowners/futsalowner.css' />
<link rel='stylesheet' type='text/css' href='templates/index.css' />

<?php 
    include 'templates/header.php';
?>
<section>
    <div class="first-section">
        <div class="text-firstsection">
            <h3>Play with your heart not just <br>with feets.</h3>
            <p>A futsal booking system</p>
        </div>
        <div class="logo-first-section">
            <img src="src/images/logo.png" />
        </div>

        <a href="afterlogin.php">
            <div class="get-start-btn">Get Started</div>
        </a>
        <div class="first-section-big">
            <a href="login/userLogin/userLoginView.php"> <img src="images/img.png" /></a>
        </div>

    </div>
</section>
<section>
    <div class="second-section">
        <div class="location-icon"><img src="images/location.png" alt="icon"></div>
        <div class="secondary-title">
            <h1>Futsals Near You</h1>
            <p>Below are the lists of futsals near you.
                Feel free to check available time and book yours.</p>
        </div>
        <div class="futsal-lists">
            <?php include 'database/db.php'; ?>
            <?php include 'futsalowners/futsalowners.php'; ?>
        </div>
    </div>
</section>
<footer>
    <?php 
    include 'templates/footer.php';
?>
</footer>