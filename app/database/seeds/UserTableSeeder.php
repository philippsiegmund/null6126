<?php

class UserTableSeeder extends Seeder {

	public function run() {
		try {
			$user = Sentry::createUser(
				array(
					'first_name' => 'Admin',
					'last_name' => 'Istrator',
					'email' => 'admin@example.com',
					'password' => 'password',
					'activated' => true, )
					);
					
		} catch (Cartalyst\Sentry\Users\UserExistsException $e) {
			echo 'User Already Exists';
		}
	}

}
