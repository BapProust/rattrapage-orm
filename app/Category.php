<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';

	protected $primaryKey = 'category_id';

	protected $fillable = [
		'name',
		'last_update'
	];

	const CREATED_AT  = 'last_update';
	const UPDATED_AT = 'last_update';
	
	public function films() {
		return $this->belongsToMany('App\Film', 'film_category', 'category_id', 'film_id')->withPivot('last_update');
	}
}
