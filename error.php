<link rel='stylesheet' href='templates/index.css' type='text/css' />

<?php  if (count($errors) > 0) : ?>
<div class="error">
    <?php foreach ($errors as $error) : ?>
    <p><?php echo $error ?></p>
    <?php endforeach ?>
</div>
<?php  endif ?>