<?php

namespace App\Telegram\Handlers;

use App\Telegram\Handlers\Keyboard\MenuKeyboard;
use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
use function PHPUnit\Framework\callback;

class MainHandler
{
    public function start(Nutgram $bot): void //Запуск команды /star и вызов меню!
    {
        $keyboard = new MenuKeyboard();
        $bot->sendSticker('CAACAgIAAxkBAAEMXQZmeXBX1uc2f4eUbwPBLHTrx2QQbgACpgEAAhZCawp34quAh_SzLjUE');
        $bot->sendMessage('Приветствую тебя в нашем боте! Нажимай на кнопки для продолжения.', reply_markup: $keyboard->createKeyboard());


    }


}
