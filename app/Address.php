<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected  $primaryKey = 'address_id';

	protected $fillable = [
		'address',
		'address2',
		'district',
		'city_id',
		'postal_code',
		'phone',
		'last_update',
		'location'
	];

	const CREATED_AT = 'last_update';
	const UPDATED_AT =  'last_update';

	protected $table = 'address';
}
