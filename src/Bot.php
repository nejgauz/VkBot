<?php

namespace App;


class Bot
{
    public static function sendMessage(int $userId)
    {
        $users = VkApi::getUsers($userId);
        $user = array_pop($users);
        $msg = "Привет, {$user['first_name']}!";

        VkApi::sendMessage($userId, $msg);
    }
}