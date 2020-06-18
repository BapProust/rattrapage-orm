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
}
