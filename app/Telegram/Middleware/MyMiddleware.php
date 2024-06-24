<?php

namespace App\Telegram\Middleware;

use App\DTO\TelegramUserDTO;
use App\Models\TelegramUser;
use SergiX44\Nutgram\Nutgram;

class MyMiddleware
{
    public function __invoke(Nutgram $bot, $next): void
    {
        $uuid = $bot->user()->id;
        /** @var TelegramUser $user */
        $user = TelegramUser::find($uuid); // Запрос к бд на получение пользователя, если он есть!
        if (!$user) { // проверяем есть ли пользователь в бд, если нет то регаем, если есть, то пропускаем!
            $username = $bot->user()->username;
            $firstName = $bot->user()->first_name;
            $lastName = $bot->user()->last_name;
            $telegramUserDTO = new TelegramUserDTO(
                $uuid,
                $firstName,
                $lastName ?? null,
                $username ?? null);
            //Передаем все данные в бд!
        }
//        $bot->sendMessage(" hello {$user}");
        $next($bot);
    }
}
