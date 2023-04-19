<?php

namespace App;
use App\Enums\LanguagesEnum;
use App\Enums\RolesEnum;

final readonly class App
{
    public function run(): void
    {
        $enum = RolesEnum::USER;
        $translation = $enum->getTranslation(LanguagesEnum::TURKISH);
        var_dump($translation);
    }

}