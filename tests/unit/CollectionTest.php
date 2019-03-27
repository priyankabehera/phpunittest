<?php

class CollectionTest extends \PHPUnit\Framework\TestCase {

	/**
	 * @test
	 */

	public function empty_initantiated_collection_return_no_items(){

		$collection = new \App\Support\Collection;

		$this->assertEmpty($collection->get());
	}
}