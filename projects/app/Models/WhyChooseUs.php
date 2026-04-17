<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    public $table = "whychooseus";

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

