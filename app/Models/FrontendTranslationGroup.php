<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrontendTranslationGroup extends Model
{
    protected $table = 'frontend_translation_groups';
    public $timestamps = false;

    protected $fillable = ['name', 'label'];

    /**
     * Relationships
     */
    public function translations()
    {
        return $this->hasMany('App\Models\FrontendTranslation', 'group_id');
    }
}
