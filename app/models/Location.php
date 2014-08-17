<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Location extends Eloquent  {

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
	
	protected $fillable = ['name', 'long', 'lat'];

}
