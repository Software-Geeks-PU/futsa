<link href="./src/css/ui.css" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='futsalowners/futsalowner.css' />
<link rel='stylesheet' type='text/css' href='templates/index.css' />

<?php 
    include 'templates/header.php';
?>
<section>
    <div class="first-section">
        <img src="images/img.png" />
    </div>
    <div class="secondary-title">
        <p>Futsals Near You</p>
        <div class="green-line-h"></div>
    </div>
</section>
<?php include 'database/db.php'; ?>
<?php include 'futsalowners/futsalowners.php'; ?>
<section class="second-section"></section>

<?php 
    include 'templates/footer.php';
?>