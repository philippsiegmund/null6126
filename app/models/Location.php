<?php

class Location extends Eloquent {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	 
	protected $guarded = ['id', 'created_at', 'updated_at'];
	
	protected $fillable = ['name', 'lon', 'lat'];

	public function user() {
		return $this->belongsTo('user');
	}

}
