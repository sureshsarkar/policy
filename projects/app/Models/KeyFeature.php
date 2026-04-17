<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyFeature extends Model
{
    public $table = "keyfeatures";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title', 
        'icon_class',
		'descreption', 
		'publish',
        'ordering', 
    ];

    public static $rules = [
        // create rules
    ];

    // Cm
}

