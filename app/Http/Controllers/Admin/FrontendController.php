<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiController;
use App\Models\FrontendTranslation;
use App\Models\FrontendTranslationGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends ApiController
{
    /**
     * Get list of frontend translations
     */
    public function index(Request $request)
    {
        $data = $this->validate($request, [
            'group_id' => 'required|integer',
        ]);

        // Fetch visible locales as keys
        $locales = DB::table('locales')
            ->where('is_visible', true)->get()
            ->pluck('locale')->toArray();

        // Get translation locales that are visible
        $translations = FrontendTranslation::where('group_id', $data['group_id'])->get()
            ->map(function ($translation) use ($locales) {
                return [
                    'is_visible' => $translation->is_visible,
                    'key' => $translation->key,
                    'value' => array_filter($translation->value, function ($val) use ($locales) {
                        return in_array($val, $locales);
                    }, ARRAY_FILTER_USE_KEY)
                ];
            });

        return $this->respondWithSuccess([
            'translations' => $translations,
        ]);
    }

    /**
     * Update the translation value
     */
    public function update(Request $request)
    {
        $data = $this->validate($request, [
            'key' => 'required|string',
            'value' => 'required|array',
            'value.*' => 'required|string|max:250',
            'is_visible' => 'required|boolean',
        ]);

        $translation = FrontendTranslation::where('key', $data['key'])->first();
        $translation->value = $data['value'];
        $translation->is_visible = $data['is_visible'];
        $translation->save();

        return $this->respondWithSaved(['translation' => $translation]);
    }

    /**
     * Get list of locales
     */
    public function locales()
    {
        $locales = DB::table('locales')->where('is_visible', true)->get();

        return $this->respondWithSuccess([
            'locales' => $locales,
        ]);
    }

    /**
     * Get list of groups
     */
    public function groups()
    {
        $groups = FrontendTranslationGroup::get();

        return $this->respondWithSuccess([
            'groups' => $groups,
        ]);
    }
}
