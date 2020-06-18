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
	
	public function staff() {
        return $this->hasMany('App\Staff', 'address_id');
    }
	
	public function customers() {
        return $this->hasMany('App\Customer', 'address_id');
    }
	
	public function city() {
		return $this->belongsTo('App\City', 'city_id');
	}
	
	public function stores() {
        return $this->hasMany('App\Store', 'address_id');
    }
}
