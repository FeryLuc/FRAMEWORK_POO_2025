<?php Core\Template::startSection('title') ?>
<h2>Latest Authors</h2>
<?php Core\Template::endSection() ?>

<?php Core\Template::startSection('content') ?>
<?php include '../app/views/authors/_index.php' ?>
<?php Core\Template::endSection() ?>