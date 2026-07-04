<?php

namespace App\Models\Concerns;

use Illuminate\Support\Facades\App;

trait HasLocaleTranslations
{
    protected function getTranslatedAttributeValue(string $attribute, $legacyValue)
    {
        $translations = $this->getAttribute($attribute . '_translations');

        if (! is_array($translations) || $translations === []) {
            return $legacyValue;
        }

        $locale = App::getLocale();
        $fallbackLocale = config('app.fallback_locale', 'en');

        return $translations[$locale]
            ?? $translations[$fallbackLocale]
            ?? collect($translations)->first(function ($value) {
                return filled($value);
            })
            ?? $legacyValue;
    }

    protected function setTranslatedAttributeValue(string $attribute, $value): void
    {
        $translations = $this->normalizeTranslations($value);
        $fallbackLocale = config('app.fallback_locale', 'en');
        $primaryValue = $translations[$fallbackLocale]
            ?? collect($translations)->first(function ($translation) {
                return filled($translation);
            });

        $this->attributes[$attribute . '_translations'] = json_encode($translations, JSON_UNESCAPED_UNICODE);
        $this->attributes[$attribute] = $primaryValue;
    }

    public function getTranslationsArray(string $attribute): array
    {
        $translations = parent::getAttributeValue($attribute . '_translations');

        if (is_array($translations) && $translations !== []) {
            return array_replace($this->emptyTranslations(), $translations);
        }

        return $this->normalizeTranslations($this->getAttributeFromArray($attribute));
    }

    protected function normalizeTranslations($value): array
    {
        if (! is_array($value)) {
            $value = [config('app.fallback_locale', 'en') => $value];
        }

        $translations = $this->emptyTranslations();

        foreach ($translations as $locale => $translation) {
            $candidate = $value[$locale] ?? null;
            $translations[$locale] = is_string($candidate) ? trim($candidate) : $candidate;
        }

        return $translations;
    }

    protected function emptyTranslations(): array
    {
        return array_fill_keys(config('info.locals', ['en', 'fr', 'ar']), null);
    }
}