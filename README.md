# VK BOT
### Simple bot for VK / Простой бот для ВКонтакте

Он умеет отправлять фразу 'Привет, имя_пользователя!';

Чтобы настроить для своего сообщества:
- скопируйте файл config.php.dist
```shell script
cp config.php.dist Config.php
```
- добавьте свой ключ подтверждения и ключ доступа:
```php
public const CALLBACK_API_CONFIRMATION_TOKEN = 'ваш_ключ_подтверждения';
public const VK_API_ACCESS_TOKEN = 'ваш_ключ_доступа';
```

Более подробную информацию, где взять ключи, смотрите в
[официальной документации ВК](https://vk.com/dev/bots_docs?f=1.1.%20%D0%9F%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BA%D0%BB%D1%8E%D1%87%D0%B0%20%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D0%B0)
