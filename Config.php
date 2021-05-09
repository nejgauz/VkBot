<?php


class Config
{
    public static function getCallbackApiConfirmationToken(): ?string
    {
        $token = getenv('CALLBACK_API_CONFIRMATION_TOKEN');
        if (!$token) {
           Logger::writeLog('Не найден confirmation токен в переменных окружения');
        }
        return $token;
    }

    public static function getVkApiAccessToken(): ?string
    {
        $token = getenv('VK_API_ACCESS_TOKEN');
        if (!$token) {
            Logger::writeLog('Не найден access токен в переменных окружения');
        }
        return $token;
    }

}