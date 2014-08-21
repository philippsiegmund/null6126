<?php

class AdminGroupTableSeeder extends Seeder {

	public function run() {
		try {

			// Create the group
			$group = Sentry::createGroup(array(
				'name' => 'Administrator', 
				'permissions' => array(
					'admin' => 1, 
					'users' => 1, 
					'groups' => 1, 
					'locations' => 1, 
					'adventures' => 1, 
					'images' => 1, 
					'comments' => 1
					) 
				)
			);

		} catch (Cartalyst\Sentry\Groups\NameRequiredException $e) {
			echo 'Name field is required';

		} catch (Cartalyst\Sentry\Groups\GroupExistsException $e) {

			echo 'Group already exists';
		}

		try {
			// Find the user using the user id
			$user = Sentry::findUserById(1);

			// Find the group using the group id
			$adminGroup = Sentry::findGroupById(1);

			// Assign the group to the user
			if ($user -> addGroup($adminGroup)) {
				echo 'Group assigned successfully';
			} else {
				echo 'Group was not assigned';
			}
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			echo 'User was not found.';
		} catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
			echo 'Group was not found.';
		}

	}

}
