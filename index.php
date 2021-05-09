<?php
require_once('vendor/autoload.php');

use App\VkEventHandler;

if (!isset($_REQUEST)) {
    exit;
}

VkEventHandler::handleEvent();


