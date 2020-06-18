<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $primaryKey = 'payment_id';

	protected $fillable = [
		'customer_id',
		'staff_id',
		'rental_id',
		'amount',
		'payment_date',
		'last_update'
	];

	const CREATED_AT = 'payment_date';
	const UPDATED_AT = 'last_update';
	
	protected $table = 'payment';
	
	public function staff() {
		return $this->belongsTo('App\Staff', 'staff_id');
	}	
	
	public function customer() {
		return $this->belongsTo('App\Customer', 'customer_id');
	}
}
