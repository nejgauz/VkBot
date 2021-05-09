<?php

namespace App;


class Config
{
    public static function getCallbackApiConfirmationToken(): ?string
    {
        return getenv('CALLBACK_API_CONFIRMATION_TOKEN');
    }

    public static function getVkApiAccessToken(): ?string
    {
        return getenv('VK_API_ACCESS_TOKEN');
    }

}