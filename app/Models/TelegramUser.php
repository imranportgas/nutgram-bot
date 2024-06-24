<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramUser extends Model
{
    use HasFactory;
    protected $table = 'telegram_user';
    protected $fillable = ['uuid', 'first_name', 'last_name', 'username'];

}
