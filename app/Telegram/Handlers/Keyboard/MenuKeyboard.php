<?php

namespace App\Telegram\Handlers\Keyboard;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class MenuKeyboard
{
    public function createKeyboard(): InlineKeyboardMarkup
    {
        $keyboard = InlineKeyboardMarkup::make(); // Клавиатура для меню!

        $keyboard->addRow( //Первый ряд клавиатуры!
            InlineKeyboardButton::make('Посмотреть профиль', callback_data: 'viewProfile'),
            InlineKeyboardButton::make('Создать профиль', callback_data: 'createProfile')
        );

        $keyboard->addRow( //Второй ряд клавиатуры!
            InlineKeyboardButton::make('Настройки', callback_data: 'settings')
        );

    return $keyboard;
    }

}
