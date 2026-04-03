<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $table = "questions";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'category_id', 
		'publish',
		'ordering',
    ];

    public static $rules = [
        // create rules
    ];

		public function category() {
			return $this->belongsTo(Deal::class,'category_id');
		}

    public function votes() {
      return $this->hasMany(Vote::class);
		}

}

