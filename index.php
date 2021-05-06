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
        <div class="get-start-btn">Get Started</div>
        <img src="images/img.png" />
    </div>
</section>
<hr>
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