<?php

namespace App\Enum;

enum RolesEnum: string
{
    case Admin = 'admin';
    case User = 'user';
    case commenter = 'commenter';

    public function labels(): array
    {
        return [
            self::Admin->value => 'Admin',
            self::User->value => 'User',
            self::commenter->value => 'Commenter',
        ];
    }
}
