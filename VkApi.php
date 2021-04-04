<?php


class VkApi
{
    const VK_API_VERSION = '5.67';
    const VK_API_ENDPOINT = 'https://api.vk.com/method/';

    public static function getUsers(int $userId)
    {
        return self::callVk('users.get', ['user_id' => $userId]);
    }

    public static function sendMessage(int $userId, string $message)
    {
        return self::callVk('messages.send', [
            'user_id' => $userId,
            'message' => $message
        ]);
    }

    private static function callVk(string $method, array $params)
    {
        $params['access_token'] = Config::VK_API_ACCESS_TOKEN;
        $params['v'] = self::VK_API_VERSION;

        $query = http_build_query($params);
        $url = self::VK_API_ENDPOINT . $method . '?' . $query;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json, true)['response'] ?? false;

        if (!$response) {
            exit();
        }

        return $response;
    }


}