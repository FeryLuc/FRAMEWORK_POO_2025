<?php
switch ($_GET['authors']) {
    case 'show':
        \App\Controllers\AuthorsController::showAction($_GET['id']);
        break;

    default:
        \App\Controllers\AuthorsController::indexAction();
        break;
}
