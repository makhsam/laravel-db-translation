<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ApiController;
use App\Models\FrontendAsset;
use App\Models\FrontendTranslation;

class FrontendController extends ApiController
{
    /**
     * Get list of frontend translations
     *
     * @return void
     */
    public function translations()
    {
        $locale = app('translator')->getLocale();

        $translations = FrontendTranslation::where('is_visible', true)->get()
            ->map(function ($translation) use ($locale) {
                return [
                    'key' => $translation->key,
                    'value' => $translation->value[$locale] ?? ''
                ];
            });

        return $this->respondWithSuccess([
            'translations' => $translations,
        ]);
    }

    /**
     * Get list of frontend assets
     */
    public function assets()
    {
        $assets = FrontendAsset::where('is_visible', true)
            ->select(FrontendAsset::SELECTED_COLUMNS)->get();

        return $this->respondWithSuccess([
            'assets' => $assets,
        ]);
    }
}
