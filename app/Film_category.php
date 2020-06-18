<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Film_category extends Model
{
	protected $primaryKey = [
		'film_id',
		'category_id'
	];

	protected $fillable = 'last_update';

	const CREATED_AT = 'last_update';
	const UPDATED_AT = 'last_update';
	
	protected $table = 'film_category';
	
	public $incrementing = false;
	
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
