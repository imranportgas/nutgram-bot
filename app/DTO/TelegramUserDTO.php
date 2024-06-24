<?php
namespace App\DTO;
class TelegramUserDTO
{
    public function __construct(
        public int $uuid,
        public ?string $username,
        public string $firstName,
        public ?string $lastName,
    )
    {
    }
}
