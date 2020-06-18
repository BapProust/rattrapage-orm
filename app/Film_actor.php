<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Film_actor extends Model
{
	protected $primaryKey = [
		'actor_id',
		'film_id'
	];

	public $incrementing = false;
	
	protected $fillable = 'last_update';

	const CREATED_AT = 'last_update';
	const UPDATED_AT = 'last_update'; 
	
	protected $table = 'film_actor';
	
	protected function setKeysForSaveQuery(Builder $query) {
		$keys = $this->getKeyName();
		if(!is_array($keys)){
			return parent::setKeysForSaveQuery($query);
		}

		foreach($keys as $keyName){
			$query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
		}

		return $query;
	}
	
	protected function getKeyForSaveQuery($keyName = null) {
		if(is_null($keyName)){
			$keyName = $this->getKeyName();
		}
	
		if (isset($this->original[$keyName])) {
			return $this->original[$keyName];
		}

		return $this->getAttribute($keyName);
	}
}
