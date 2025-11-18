<?php
use \App\Controllers\PagesController;

if (isset($_GET['books'])) {
    
}else{
    include_once '../app/controllers/pagesController.php';
    PagesController\homeAction($connection);
}