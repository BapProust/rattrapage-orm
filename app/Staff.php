<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $primaryKey = 'staff_id';

	protected $fillable = [
		'first_name',
		'last_name',
		'address_id',
		'picture',
		'email',
		'store_id',
		'active',
		'username',
		'password',
		'last_update'
	];

	const CREATED_AT = 'last_update';
	const UPDATED_AT  = 'last_update';
	
	protected $table = 'staff';
	
	public function address() {
        return $this->belongsTo('App\Address', 'address_id');
    }
	
	public function rentals() {
        return $this->hasMany('App\Rental', 'staff_id');
    }	
	
	public function payments() {
        return $this->hasMany('App\Payment', 'staff_id');
    }
	
	public function stores() {
		return $this->belongsTo('App\Store', 'store_id');
	}
	
	public function customers() {
		return $this->belongsToMany('App\Customer', 'payment', 'staff_id', 'customer_id')->distinct();
	}
}
