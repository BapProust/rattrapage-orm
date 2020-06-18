<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
	protected $primaryKey = 'rental_id';

	protected $fillable = [
		'rental_date',
		'inventory_id',
		'customer_id',
		'return_date',
		'staff_id',
		'last_update'
	];

	const CREATED_AT = 'rental_date';
	const UPDATED_AT = 'last_update';
	
	protected $table = 'rental';
	
	public function inventory() {
		return $this->belongsTo('App\Inventory', 'inventory_id');
	}
}
