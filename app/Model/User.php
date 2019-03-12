<?php

namespace App\Model;

class User {

	public $first_name;

	public function setFirstName( $FirstName ) {

		$this->first_name = $FirstName;
	}

	public function getFirstName() {

		return $this->first_name;
	}
}