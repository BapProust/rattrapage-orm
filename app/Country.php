<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $table = 'country';

	protected $primaryKey = 'country_id';

	protected $fillable = [
		'country',
		'last_update'
	];

	const CREATED_AT =  'last_update';
	const UPDATED_AT = 'last_update';
	
	public function cities() {
		return $this->hasMany('App\City', 'country_id');
	}
}
