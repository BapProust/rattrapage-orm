<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film_text extends Model
{
	protected $primaryKey = 'film_id';

	protected $fillable = [
		'title',
		'description'
	];

	public $timestamps = false;
	
	protected $table = 'film_text';
	
	public $incrementing = false;
	
	public function film() {
		return $this->hasOne('App\Film', 'film_id');
	}
}
