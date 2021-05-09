<?php

namespace App;


class VkEventHandler
{
    const CALLBACK_API_EVENT_CONFIRMATION = 'confirmation';
    const CALLBACK_API_EVENT_MESSAGE_NEW = 'message_new';

    public static function handleEvent(): void
    {
        $event = json_decode(file_get_contents('php://input'), true);

        if (!isset($event['group_id'])) {
            exit();
        }

        if (!is_string($event['group_id'])) {
            exit();
        }

        switch ($event['type']) {
            //Подтверждение сервера
            case self::CALLBACK_API_EVENT_CONFIRMATION:
                echo Config::getCallbackApiConfirmationToken();
                exit();

            //Получение нового сообщения
            case self::CALLBACK_API_EVENT_MESSAGE_NEW:
                $userId = $event['object']['user_id'] ?? false;
                if (!$userId) {
                    exit();
                }
                Bot::sendMessage($userId);
                echo 'ok';
                exit();

            default:
                echo 'Unsupported event';
                exit();
        }
    }
}