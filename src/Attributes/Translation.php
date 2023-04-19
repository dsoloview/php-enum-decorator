<?php

namespace App\Attributes;

use App\Enums\LanguagesEnum;
use Attribute;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_ALL)]
final readonly class Translation
{
    public function __construct(
        private LanguagesEnum $language,
        private string $translation)
    {
    }

    public function getTranslation(): string
    {
        return $this->translation;
    }

    public function getLanguage(): LanguagesEnum
    {
        return $this->language;
    }

}