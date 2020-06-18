<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $primaryKey = 'language_id';

	protected $fillable = [
		'name',
		'last_update'
	];

	const CREATED_AT = 'last_update';
	const UPDATED_AT = 'last_update';
	
	protected $table = 'language';
	
	public function films() {
		return $this->hasMany('App\Film', 'language_id');
	}
}
