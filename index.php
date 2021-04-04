<?php

if (!isset($_REQUEST)) {
    exit;
}

VkEventHandler::handleEvent();


