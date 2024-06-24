<?php

namespace App\Telegram\Handlers\Keyboard;
use Illuminate\Validation\Rules\In;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class MenuKeyboard
{
    public function createKeyboard(): InlineKeyboardMarkup
    {
        $keyboard = InlineKeyboardMarkup::make(); // Клавиатура для меню!
        $keyboard ->addRow(
            InlineKeyboardButton::make('Смотреть анкеты', callback_data: 'viewPerson')
        );

        $keyboard->addRow( //Первый ряд клавиатуры!
            InlineKeyboardButton::make('Посмотреть профиль', callback_data: 'viewProfile'),
            InlineKeyboardButton::make('Создать профиль', callback_data: 'createProfile')
        );

        $keyboard->addRow( //Второй ряд клавиатуры!
            InlineKeyboardButton::make('Настройки', callback_data: 'settings')
        );

    return $keyboard;
    }
    public function createBack(): InlineKeyboardMarkup
    {
        $keyboard = InlineKeyboardMarkup::make();
        $keyboard->addRow(
            InlineKeyboardButton::make('Назад', callback_data: 'back')

        );
        return $keyboard;
    }

    public function createConfirm(): InlineKeyboardMarkup
    {
        $keyboard = InlineKeyboardMarkup::make();
        $keyboard->addRow(
            InlineKeyboardButton::make('Подтвердить',callback_data: 'confirmProfile'),
            InlineKeyboardButton::make("Изменить", callback_data: 'editProfile')
        );
        return $keyboard;
    }
}

