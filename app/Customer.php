<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $primaryKey = 'customer_id';

	protected $fillable = [
		'store_id',
		'first_name',
		'last_name',
		'email',
		'address_id',
		'active',
		'create_date',
		'last_update'
	];

	const CREATED_AT = 'create_date';
	const UPDATED_AT = 'last_update';

	protected $table = 'customer';
	
	public function address() {
        return $this->belongsTo('App\Address', 'address_id');
    }
	
	public function store() {
		return $this->belongsTo('App\Store', 'store_id');
	}
	
	public function rentals() {
        return $this->hasMany('App\Rental', 'customer_id');
    }	
	
	public function payments() {
        return $this->hasMany('App\Payment', 'customer_id');
    }
	
	public function staff() {
		return $this->belongsToMany('App\Staff', 'payment', 'customer_id', 'staff_id')->distinct();
	}
}

