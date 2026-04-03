<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public $table = "votes";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id', 
		'question_id', 
		'user_id', 
		'publish',
		'ordering',
    ];

    public static $rules = [
        // create rules
    ];

		public function question() {
			return $this->belongsTo(Question::class,'question_id');
		}
}

