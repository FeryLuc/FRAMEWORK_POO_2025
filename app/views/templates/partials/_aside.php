
<?php

use App\Models\CategoriesRepository;

$categories = CategoriesRepository::findAll();
include '../app/views/categories/_index.php';
?>