<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $primaryKey = 'store_id';

	protected $fillable =  [
		'manager_staff_id',
		'address_id',
		'last_update'
	];

	const CREATED_AT = 'last_update';
	const UPDATED_AT  = 'last_update';
	
	protected $table = 'store';
	
	public function address() {
        return $this->belongsTo('App\Address', 'address_id');
    }
}
