<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrontendTranslation extends Model
{
    protected $table = 'frontend_translations';
    public $timestamps = false;

    protected $fillable = ['key', 'value', 'group_id'];
    
    protected $casts = [
        'value' => 'array', 'is_visible' => 'boolean'
    ];

    /**
     * Relationships
     */
    public function group()
    {
        return $this->belongsTo('App\Models\FrontendTranslationGroup', 'group_id');
    }
}
