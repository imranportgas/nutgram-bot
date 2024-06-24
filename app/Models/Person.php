<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    const GUEST = 0;
    const SYS_ADMIN = 1;
    protected $fillable = ['name', 'role', 'chat_id', 'age', 'description', 'city', 'image'];

    public function roleLabels(): array
    {
        return [
            self::SYS_ADMIN => 'Системный администратор',
            self::GUEST => 'Гость',
        ];
    }
}
