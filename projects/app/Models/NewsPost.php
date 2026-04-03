<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    public $table = "news_post";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'seo_url',
		'author',
		'breaking_news',
		'trending_news',
		'top_stories_news',
		'comments_count',
		'shortDescription',
		'mediumDescription',
		'longDescription',
		'description',
		'image',
		'image2',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'templete',
		'bannerImage',
		'publish',
		'is_parent',
		'longDescriptiontwo',
		'longDescriptionthree',
		'longDescriptionfour',

		'header_section',
		'footer_section',
		'cta_description'

    ];

    public static $rules = [
        // create rules
    ];

    // Cm 
	
	public function parentname(){
		return $this->belongsTo(\App\Models\Deal::class,'is_parent','id');
	}


}

