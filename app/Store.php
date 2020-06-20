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
	
	public function inventories() {
        return $this->hasMany('App\Inventory', 'store_id');
    }
	
	public function customers() {
        return $this->hasMany('App\Customer', 'store_id');
    }
	
	public function staff() {
        return $this->hasMany('App\Staff', 'store_id');
    }
	
	public  function staffManager() {
		return $this->belongsTo('App\Staff', 'manager_staff_id');
	}
	
	public function films() {
		return $this->belongsToMany('App\Film', 'inventory', 'store_id', 'film_id')->distinct();
	}
}
