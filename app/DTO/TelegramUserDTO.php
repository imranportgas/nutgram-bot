<?php
namespace App\DTO;
class TelegramUserDTO
{
    public function __construct(
        public int $uuid,
        public string $firstName,
        public ?string $lastName,
        public ?string $username,
    )
    {
    }
}
