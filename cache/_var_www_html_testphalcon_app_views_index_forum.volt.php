

<h1><?= $title ?></h1>

<?php foreach ($categories as $key => $value) { ?>
    <?php if ($oldval != $value) { ?>
        <?= $value ?>
    <?php } ?>
    <?= $key ?>
    <?php $oldval = $value; ?>

<?php } ?>

