<?php Core\Template::startSection('title') ?>
<h2>Latest Books</h2>
<?php Core\Template::endSection() ?>

<?php Core\Template::startSection('content') ?>
<?php include '../app/views/books/_index.php' ?>
<?php Core\Template::endSection() ?>