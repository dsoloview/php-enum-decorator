<?php

namespace App\Enums;

use App\Attributes\Translation;
use App\Traits\EnumTranslationTrait;

enum RolesEnum
{
    use EnumTranslationTrait;
    #[Translation(LanguagesEnum::RUSSIAN, 'Пользователь')]
    #[Translation(LanguagesEnum::ENGLISH, 'User')]
    #[Translation(LanguagesEnum::TURKISH, 'Kullanıcı')]
    case USER;
    #[Translation(LanguagesEnum::RUSSIAN, 'Администратор')]
    #[Translation(LanguagesEnum::ENGLISH, 'Admin')]
    case ADMIN;
    #[Translation(LanguagesEnum::RUSSIAN,'Супер администратор')]
    #[Translation(LanguagesEnum::ENGLISH,'Super admin')]
    case SUPERADMIN;
}
