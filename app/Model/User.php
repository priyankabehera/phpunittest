<?php

namespace App\Model;

class User {

	public $first_name;

	public $last_name;

	public function setFirstName( $FirstName ) {

		$this->first_name = $FirstName;
	}

	public function getFirstName() {

		return $this->first_name;
	}

	public function setLastName( $LastName ) {

		$this->last_name = $LastName;
	}

	public function getLastName()   {

		return $this->last_name;
	}

	public function getFullName(){

		return $this->first_name . ' ' . $this->last_name;
	}
}