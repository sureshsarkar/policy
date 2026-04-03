<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoSection extends Model
{
    public $table = "video_sections";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'seo_url', 
		'thumbnail',
		'video', 
		'is_home',
		'publish',
    ];

    public static $rules = [
        // create rules
    ];


}

