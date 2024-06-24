<?php

namespace App\Telegram\Conversations;

use App\Telegram\Handlers\Keyboard\MenuKeyboard;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;

class CreateProfile extends Conversation
{
    public $firstName;
    public $age;
    public $city;
    public $description;
    public $image;
    /**

     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function start(Nutgram $bot): void
    {
        $bot->editMessageText('Введите свое имя:');
        $this->next('askFirstName');
    }

    /**
     * @throws InvalidArgumentException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function askFirstName(Nutgram $bot)
    {
        $this->firstName = $bot->message()->getText();
        $bot->sendMessage('Введите свой возраст:');
        $this->next('askAge');

    }

    /**
     * @throws InvalidArgumentException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function askAge(Nutgram $bot): void
    {

        $this->age = $bot->message()->getText();

        $bot->sendMessage('Введите свой город:');
        $this->next('askCity');
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function askCity(Nutgram $bot): void
    {
        $this->city = $bot->message()->getText();
        $bot->sendMessage('Введите описание вашего профиля');
        $this->next('askDescription');
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function askDescription(Nutgram $bot): void
    {
        $this->description = $bot->message()->getText();
        $bot->sendMessage('Пришлите мне картинку!');
        $this->next('askImage');
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function askImage(Nutgram $bot): void
    {
        $keyboard = new MenuKeyboard();
        $photos = $bot->message()->photo[0];
        $bot->sendPhoto(
            photo: $photos->file_id,
            caption:
"Имя:{$this->firstName}\n
Возраст:{$this->age}\n
Город:{$this->city}\n
Описание:{$this->description}\n",
            reply_markup: $keyboard->createConfirm());

        $this->end();
    }
}
