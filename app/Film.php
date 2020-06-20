<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
	protected $primaryKey = 'film_id';

	protected  $fillable = [
		'title',
		'description',
		'release_year',
		'language_id',
		'original_language_id',
		'rental_duration',
		'rental_rate',
		'length',
		'replacement_cost',
		'rating',
		'special_features',
		'last_update'
	];

	const CREATED_AT = 'last_update';
	const UPDATED_AT = 'last_update';
	
	protected $table = 'film';
	
	public function actors() {
		return $this->belongsToMany('App\Actor', 'film_actor', 'film_id', 'actor_id');
	}
	
	public function language() {
		return $this->belongsTo('App\Language', 'language_id');
	}
	
	public function categories() {
		return $this->belongsToMany('App\Category', 'film_category', 'film_id', 'category_id');
	}
	
	public function inventory() {
		return $this->hasMany('App\Inventory', 'film_id');
	}
	
	public function film_text() {
		return $this->hasOne('App\Film_text', 'film_id');
	}
	
	public function stores() {
		return $this->belongsToMany('App\Store', 'inventory', 'film_id', 'store_id')->distinct();
	}
}
