<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrontendAsset extends Model
{
    protected $table = 'frontend_assets';
    public $timestamps = false;

    protected $fillable = ['key', 'label', 'description', 'type', 'url'];

    protected $casts = [
        'is_visible' => 'boolean'
    ];

    const SELECTED_COLUMNS = ['key', 'label', 'type', 'url'];

    const TYPE_IMAGE = 'image';
    const TYPE_VIDEO = 'video';
    const TYPE_LINK = 'link';
    const TYPE_PHONE = 'phone';
}
