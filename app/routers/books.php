<?php
switch ($_GET['books']) {
    case 'show':
        \App\Controllers\BooksController::showAction($_GET['id']);
        break;

    default:
        \App\Controllers\BooksController::indexAction();
        break;
}
