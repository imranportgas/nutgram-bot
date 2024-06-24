<?php

namespace App\Telegram\Middleware;

use SergiX44\Nutgram\Nutgram;

class MyMiddleware
{
    public function __invoke(Nutgram $bot, $next): void
    {
//        $telegramID = $bot->user()->id;
//        $user = User::find($telegramID); // Запрос к бд на получение пользователя, если он есть!
//        if (!$user) { // проверяем есть ли пользователь в бд, если нет то регаем, если есть, то пропускаем!
//            $username = $bot->user()->username;
//            $firstName = $bot->user()->first_name;
//            $lastName = $bot->user()->last_name;
//            //Передаем все данные в бд!
//        }
        $bot->sendMessage('Hello');
        $next($bot);
    }
}
