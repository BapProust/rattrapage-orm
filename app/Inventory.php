<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
	protected $primaryKey = 'inventory_id';

	protected $fillable = [
		'film_id',
		'store_id',
		'last_update'
	];

	const CREATED_AT = 'last_update';
	const UPDATED_AT = 'last_update';
	
	protected $table = 'inventory';
	
	public function films() {
		return $this->belongsTo('App\Film', 'film_id');
	}
	
	public function store() {
		return $this->belongsTo('App\Store', 'store_id');
	}
	
	public function rentals() {
        return $this->hasMany('App\Rental', 'inventory_id');
    }
}
