<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class User extends SentryUserModel {
	
	public function locations(){
		return $this->hasMany('Location');
	}
}
