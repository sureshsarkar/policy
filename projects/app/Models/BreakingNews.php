<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BreakingNews extends Model
{
    public $table = "breaking_news";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'type',
		'breaking_news_text',
		'breaking_news_text_slug',
		'link',
		'image',
		'image2',
        'description',

        'cms_id',
        'ordering',
        'publish'



    ];

    public static $rules = [
        // create rules

        'image'=>"required|image"
    ];
    public static $updaterules = [
        // create rules

        'image'=>"nullable|image"

    ];

    // Slider
}
