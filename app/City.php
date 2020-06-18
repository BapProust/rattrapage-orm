<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table = 'city';

	protected $primaryKey = 'city_id';

	protected $fillable = [
		'city',
		'country_id',
		'last_update'
	];

	const CREATED_AT = 'last_update';
	const  UPDATED_AT = 'last_update';

	public function country() {
		return $this->belongsTo('App\Country', 'country_id');
	}
}
