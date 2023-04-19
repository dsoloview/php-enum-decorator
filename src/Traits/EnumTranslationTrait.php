<?php

namespace App\Traits;
use App\Attributes\Translation;
use App\Enums\LanguagesEnum;

trait EnumTranslationTrait
{
    public function getTranslation(LanguagesEnum $language): string
    {
        $ref = new \ReflectionClassConstant(self::class, $this->name);
        $attributes = $ref->getAttributes(Translation::class);
        foreach ($attributes as $attribute) {
            /**
             * @var Translation $instance;
             */
            $instance = $attribute->newInstance();
            if ($instance->getLanguage() === $language) {
                return $instance->getTranslation();
            }
        }

        throw new \Exception("Translation for {$language->name} language not found");
    }


}