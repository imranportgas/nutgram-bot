<?php

namespace App\Telegram\Handlers;

use App\Telegram\Handlers\Keyboard\MenuKeyboard;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
use function PHPUnit\Framework\callback;

class MainHandler
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage('This is an handler!');
    }

    public function start(Nutgram $bot): void //Запуск команды /star и вызов меню!
    {
        $keyboard = new MenuKeyboard();
        $bot->sendMessage('Приветствую тебя в нашем боте! Нажимай на кнопки для продолжения.', reply_markup: $keyboard->createKeyboard());


    }
}
