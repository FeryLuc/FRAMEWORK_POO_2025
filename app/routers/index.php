<?php
if (isset($_GET['books'])) {
} else {
    \App\Controllers\PagesController::homeAction();
}
