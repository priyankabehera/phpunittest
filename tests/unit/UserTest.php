<?php

class UserTest extends \PHPUnit\Framework\TestCase {

	public function testThatWeCanGetTheFirstName() {

		$user = new \App\Model\User;

		$user->setFirstName( "Billy" );

		$this->assertEquals( $user->getFirstName(), 'Billy' );

	}

	public function testThatWeCanGetTheLastName() {

		$user = new \App\Model\User;

		$user->setLastName( "Behera" );

		$this->assertEquals( $user->getLastName(), 'Behera' );
	}

	public function testThatWeCanGetTheFullName() {

		$user = new \App\Model\User;

		$user->setFirstName( 'Billy' );

		$user->setLastName( 'Behera' );

		$this->assertEquals( $user->getFullName(), 'Billy Behera' );
	}

	public function testThatWeCanGetTheTrimmedFirstNameAndLastName() {

		$user = new \App\Model\User;

		$user->setFirstName( '            Billy' );

		$user->setLastName( 'Behera              ' );

		$this->assertEquals($user->getFullName(), 'Billy Behera');

	}

	public function testGetTheEmail(){

		$user = new \App\Model\User;

		$user->setEmail('priyanka@multidots.com');

		$this->assertEquals($user->getEmail(), 'priyanka@multidots.com');
	}


}