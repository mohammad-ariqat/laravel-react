<?php

namespace App\Enum;

enum RolesEnum: string
{
    case Admin = 'admin';
    case User = 'user';
    case commenter = 'commenter';

    public static function labels(): array
    {
        return [
            self::Admin->value => 'Admin',
            self::User->value => 'User',
            self::commenter->value => 'Commenter',
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::User => 'User',
            self::commenter => 'Commenter',
        };
    }
}
