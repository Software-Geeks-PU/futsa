<link href="./src/css/ui.css" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='futsalowners/futsalowner.css' />
<link rel='stylesheet' type='text/css' href='src/css/ui.css' />
<link rel='stylesheet' type='text/css' href='templates/index.css' />

<?php 
    include 'templates/header.php';
?>
<section>
    <div class="first-section">
        <h2>FUTSA-Get ready to roll</h2>

        <div class="Button-danger" id="w">Hello</div>
    </div>
    <div class="nav-bar">
        <h3>random text</h3>
    </div>
</section>
<?php include 'database/db.php'; ?>
<?php include 'futsalowners/futsalowners.php'; ?>
<section class="second-section">
    <div class="images"><img src="src/images/logo.png" /></div>
    <div class="images"></div>
    <div class="images"></div>
</section>

<?php 
    include 'templates/footer.php';
?>