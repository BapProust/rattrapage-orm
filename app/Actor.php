<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
	protected $primaryKey = 'actor_id';

	protected  $fillable = [
		'first_name',
		'last_name',
		'last_update'
	];

	const CREATED_AT = 'last_update';
	const UPDATED_AT  = 'last_update';

	protected $table = 'actor';
	
	public function films() {
		return $this->belongsToMany('App\Film', 'film_actor', 'actor_id', 'film_id');
	}
}
 
