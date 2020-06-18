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
}

